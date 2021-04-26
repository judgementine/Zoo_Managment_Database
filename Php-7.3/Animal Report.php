Animal Report

{source}

<!DOCTYPE html>

<head>

<style>

table{

border-style:solid;

border-width:2px;

border-color:blue;

border-collapse:collapse;

}

.headerSortDown:after,
.headerSortUp:after {
  content: ' ';
  position: relative;
  left: 2px;
  border: 8px solid transparent;
}

.headerSortDown:after {
  top: 10px;
  border-top-color: silver;
}

.headerSortUp:after {
  bottom: 15px;
  border-bottom-color: silver;
}

.headerSortDown,
.headerSortUp {
  padding-right: 10px;
}
th{

background-color:green;

Color:white;

}

th,td{

width:150px;

text-align:center;

border:1px solid black;

padding:5px;

}

 

body{

background-color:#EEFDEF";

}

</style>

<script>

let sortDirection=false;

function loadTable()

</script>

</head>

 

 

<?php
$servername = "team9-zoo-database-57.c3gzznnyeksn.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "T3Am9Pasw0rd$";
$dbname = "zoodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['order'])){

$order=$_GET['order'];

}else{

$order='asset_num';

}

if(isset($_GET['sort'])){

$sort=$_GET['sort'];

}else{

$sort='ASC';

}


$sql = "SELECT * FROM animal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row

$sort=='DESC'?$sort='ASC':$sort='DESC';


echo '<table>';
echo '<tr>';
echo ' <th> Animal Species</th>';
echo ' <th> Animal Type</th>';
echo ' <th> Animal ID</th>';

echo ' <th> Animal Health</th>';

echo ' <th> Animal Breeding</th>';

echo ' <th> DOB </th>';

echo ' <th> Specific Handling</th>';

echo ' <th> Diet </th>';

echo ' <th> Enclosure ID</th>';

echo ' <th> Is currently in exhibit</th>';

echo ' <th> Attractions Site ID</th>';
echo '</tr>';

 

 

while($row = $result->fetch_assoc()) {

echo "<tr>";

echo "<td>".$row['Sub_species']."</td>";

echo "<td>".$row['Animal_species']."</td>";

echo "<td>".$row['animal_ID']."</td>";

echo "<td>".$row['Health']."</td>";

echo "<td>".$row['Breeding']."</td>";

echo "<td>".$row['animal_DOB']."</td>";

echo "<td>".$row['Spec_instructions']."</td>";

echo "<td>".$row['feeding']."</td>";

echo "<td>".$row['enclosure_ID']."</td>";

echo "<td>".$row['In_Exhibit']."</td>";

echo "<td>".$row['Attractions_Site_ID']."</td>";

}

 



echo '</table>';
} else {
echo "0 results";
}
$conn->close();
?>{/source}
