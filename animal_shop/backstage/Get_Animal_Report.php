<?php
session_start();
?>
<html>
<body>
AnimalReport <?php
// define variables and set to empty values
$month = $quarter = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $animalID = test_input($_POST["animalID"]);
  $Animal_species = test_input($_POST["Animal_species"]);
  $animal_DOB = test_input($_POST["animal_DOB"]);
  $Breeding = test_input($_POST["Breeding"]);


    
  $servername = "localhost";
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
  $db =  mysql_select_db("$dbname,$server");
  
      if ($animalID != ""){
          $sql = "SELECT $animalID, $Animal_species, $animal_DOB, $Breeding FROM animal";
      }
      else if($Animal_species != ""){
          $sql = "SELECT $Animal_species, $animal_DOB, $Breeding FROM animal";
      }
      else if($animal_DOB != ""){
          $sql = "SELECT $animal_DOB, $Breeding FROM animal";
      }
      else {
          $sql = "SELECT $Breeding FROM animal";"
          
      }
      

  $result = $server->mysql_query($sql);
  
  $server->close();

  }
    header("Location: GeneratedReport.html")
    exit;

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
        echo "</tr>";
    }

?>
</table>
</body>
</html>
