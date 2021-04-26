Financial Report

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

$sql = "SELECT * FROM Finance";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
echo '<table>';
echo '<tr>';
echo ' <th> Sales</th>';
echo ' <th> Expenses</th>';
echo ' <th> Earnings</th>';

echo ' <th> Admissions</th>';

echo ' <th> Quarter</th>';

echo ' <th> Year</th>';

echo ' <th> Month</th>';
echo '</tr>';

while($row = $result->fetch_assoc()) {

echo "<tr>";

echo "<td>".$row['Sales']."</td>";

echo "<td>".$row['Expenses']."</td>";

echo "<td>".$row['Earnings']."</td>";

echo "<td>".$row['Admissions']."</td>";

echo "<td>".$row['quarter']."</td>";

echo "<td>".$row['year']."</td>";

echo "<td>".$row['month']."</td>";

}

 


while($row = $result->fetch_assoc()) {
echo '<tr><td>' . $row["Sales"]. '</td><td> $'. $row["Expenses"]. '</td><td>' . $row["Earnings"]. '</td></tr>' . $row["Admissions"]. '</td></tr>' . $row["quarter"]. '</td></tr>' . $row["year"]. '</td></tr>' . $row["month"]. '</td></tr>';
}
echo '</table>';
} else {
echo "0 results";
}
$conn->close();
?>{/source}
