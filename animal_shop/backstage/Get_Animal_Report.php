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
<h1>Generated Animal Report<h1>
<table class= "striped">
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
$inexhibit = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //should be animal_ID i believe....
  $animalID = test_input($_POST["animalID"]);
  $Animal_species = test_input($_POST["Animal_species"]);
  $animal_DOB = test_input($_POST["animal_DOB"]);
  $Breeding = test_input($_POST["Breeding"]);
    $Attractions = test_input($_POST["Attractions_Site"]);
    $exhibit = test_input($_POST["exhibit"]);
    $instructID="";
    $instructSub="";
    $instructBreeding="";
    $instructSite="";
    $instructexhibit="";

    if ($animalID!="")
    {
      $instructID = "animalID ='$animalID',";
    }
    if($animal_DOB != "")
    {
      $instructSub = "*,Sub_Species ='$animal_DOB'";

    }
    if($Breeding != "")
    {
      $instructBreeding = ",Breeding ='$Breeding'";

    }
    if($Attractions_Site != "")
    {
      $instructSite = ", Attractions_Site ='$Attractions_Site'";

    }
    if($exhibit == true)
    {
        $instructexhibit= ", In_Exhibit = Yes";
    }
    $sql = "SELECT * FROM animal WHERE animalID ='$instructID' Animal_species = '$Animal_species' '$instructSub' '$instructBreeding' '$instructSite' '$insturctexhibit'";
    echo "<p>'$sql'<p>";
    $result = $server->query($sql);
  if($result<=0)
  {
     echo "<script type='text/javascript'> document.location = 'backstage/AnimalReport.html'; </script>"; 
  }


    while ($row = mysql_fetch_array($result)) {
        echo "<tr class= 'header'>";
        echo "<td>" .$row["enclosure_ID"]."</td>";
        echo "<td>".$row['feeding']."</td>";
        echo "<td>".$row['Animal_species']."</td>";
        echo "<td>".$row['Sub_species']."</td>";
        echo "<td>".$row['animal_DOB']."</td>";
        echo "<td>".$row['Health']."</td>";
        echo "<td>".$row['Breeding']."</td>";
        echo "<td>".$row['spec_instructions']."</td>";
        echo "<td>".$row['Attractions_site']."</td>";
        echo "</tr>";
    }

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

</table>
</body>
</html>
