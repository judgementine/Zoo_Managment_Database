Employee Report

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

$sql = "SELECT * FROM Employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
echo '<table>';
echo '<tr>';
echo ' <th> ID_Number</th>';
echo ' <th> Job_Title</th>';
echo ' <th> Salary</th>';

echo ' <th> Phone_Number</th>';

echo ' <th> cell_phone</th>';

echo ' <th> home_phone</th>';

echo ' <th> name</th>';

echo ' <th> first_name</th>';

echo ' <th> last_name</th>';

echo ' <th> middle_initial</th>';
echo ' <th> Attractions_Site_ID</th>';



echo '</tr>';

while($row = $result->fetch_assoc()) {

echo "<tr>";

echo "<td>".$row['ID_Number']."</td>";

echo "<td>".$row['Job_Title']."</td>";

echo "<td>".$row['Salary']."</td>";

echo "<td>".$row['Phone_Number']."</td>";

echo "<td>".$row['cell_phone']."</td>";

echo "<td>".$row['home_phone']."</td>";

echo "<td>".$row['name']."</td>";

echo "<td>".$row['first_name']."</td>";

echo "<td>".$row['last_name']."</td>";

echo "<td>".$row['middle_initial']."</td>";

echo "<td>".$row['Attractions_Site_ID']."</td>";

}

 


while($row = $result->fetch_assoc()) {
echo '<tr><td>' . $row["ID_Number"]. '</td><td> $'. $row["Job_Title"]. '</td><td>' . $row["Salary"]. '</td></tr>' . $row["Phone_Number"]. '</td></tr>' . $row["cell_phone"]. '</td></tr>' . $row["home_phone"]. '</td></tr>' . $row["name"].'</td></tr>' . $row["first_name"].'</td></tr>' . $row["last_name"].'</td></tr>' . $row["middle_initial"].'</td></tr>' . $row["Attractions_Site_ID"]. '</td></tr>';
}
echo '</table>';
} else {
echo "0 results";
}
$conn->close();
?>{/source}
