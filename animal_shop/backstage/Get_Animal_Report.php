<?php
$servername = "zoo-database.c3gzznnyeksn.us-east-2.rds.amazonaws.com:3209";
$username = "admin";
$password = "T3Am9Pasw0rd$";
$dbname = "mydb";
$server = mysqli_connect($servername,$username, $password, $dbname);
if ($server->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php
$servername = "zoo-database.c3gzznnyeksn.us-east-2.rds.amazonaws.com:3209";
$username = "admin";
$password = "T3Am9Pasw0rd$";
$dbname = "mydb";
$server = mysqli_connect($servername,$username, $password, $dbname);
if ($server->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    exit;
}
else{ 
$animalID = "";
$Animal_species = "";
$animal_DOB = "";
$Breeding = "";
$Attractions = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //should be animal_ID i believe....
  $animalID = test_input($_POST["animalID"]);
  $Animal_species = test_input($_POST["Animal_species"]);
  $animal_DOB = test_input($_POST["animal_DOB"]);
  $Breeding = test_input($_POST["Breeding"]);
    $Attractions = test_input($_POST["Attractions_Site"]);

    if ($animalID=="")
    {
      $animalID = "*";
    }
   if($Animal_species=="")
    {
      $Animal_species == "*";

    }
    if($animal_DOB == "")
    {
      $animal_DOB = "*";

    }
    if($Breeding == "")
    {
      $Breeding = "*";

    }
    if($Attractions_Site == "")
    {
      $Attractions_Site = "*";

    }
      $sql = "SELECT * FROM animal WHERE animalID ='{animalID}', Animal_species = '{$Animal_species}', animal_DOB ='{$animal_DOB}',Breeding ='{$Breeding},Attractions_Site ='{$Attractions_Site} ";
    
    
    
    
    
    
    
  /*$servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";
 
  // Create connection
  $server = mysql_connect($servername,$username, $password);
  // Check connection
  if ($server->connect_error) {
    header("Location: AnimalReport.html");
    die("Connection failed: " . $conn->connect_error);
    exit;
  }
  else{
  */
  //$db =  mysql_select_db("$dbname,$server");
  
  
  //in MYSQL it is animal_ID... possibly change ? 
      if ($animalID != ""){
          $sql = "SELECT * FROM animal WHERE '{$animalID}', '{$Animal_species}', '{$animal_DOB}', '{$Breeding}', '{$Attractions_site}'";
      }
      else if($Animal_species != ""){
          $sql = "SELECT {$Animal_species, $animal_DOB, $Breeding,Attractions_site FROM animal";
      }
      else if($animal_DOB != ""){
          $sql = "SELECT $animal_DOB, $Breeding,Attractions_site FROM animal";
      }
      else if{
          $sql = "SELECT $Breeding,Attractions_site FROM animal";
          
      }
      else {
          $sql = "SELECT Attractions_site FROM animal";
      }
     

  $result = $server->mysql_query($sql);
      $sql = "SELECT * FROM animal WHERE animalID ='$animalID', Animal_species = '$Animal_species', animal_DOB ='$animal_DOB', Breeding ='$Breeding', Attractions_Site ='$Attractions_Site' ";

    $result = $server->query($sql);
  
  $server->close();

  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Generated Animal Report<h1>
<table class="striped">
<tr class="header">
    <td>enclosure_ID</td>
    <td>feeding</td>
    <td>Animal_species </td>
    <td>Sub_species<td>
    <td>animal_DOB<td>
    <td>Health<td>
    <td>Breeding <td>
    <td>spec_instructions <td>
    <td>Attractions_site <td>


</tr>






<?php
    while ($row = mysql_fetch_array($result)) {
        echo "<tr class=\"".$class."\">";
        echo "<td>".$row[enclosure_ID]."</td>";
        echo "<td>".$row[feeding]."</td>";
        echo "<td>".$row[Animal_species]."</td>";
        echo "<td>".$row[Sub_species]."</td>";
        echo "<td>".$row[animal_DOB]."</td>";
        echo "<td>".$row[Health]."</td>";
        echo "<td>".$row[Breeding]."</td>";
        echo "<td>".$row[spec_instructions]."</td>";
        echo "<td>".$row[Attractions_site]."</td>";
        echo "</tr>";
    }

?>
</table>
</body>
</html>
