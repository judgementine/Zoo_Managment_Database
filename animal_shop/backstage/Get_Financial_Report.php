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
    echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
    exit;
}
else{
// define variables and set to empty values
$month = "";
$quarter = "";
$year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $month = test_input($_POST["month"]);
  $quarter = test_input($_POST["quarter"]);
  $year = test_input($_POST["year"]);
    $Imonth ="";
    $Iquarter = "";
    $Iyear = "";
  
  if ($month!="")
  {
    $Imonth = "month ='$month',";
  }
 if($quarter=="")
  {
    $quarter == "quarter = '$quarter',";

  }

$sql = "SELECT * FROM Finance WHERE '$Imonth' '$Iquarter' year ='$year'";
    $result = $server->query($sql);
  if($result<=0)
  {
     echo "<script type='text/javascript'> document.location = 'backstage/FinancialReport.html'; </script>"; 
  }
  $server->close();
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h1>Generated financial Report<h1>
<table class="striped">
<tr class="header">
    <td>Month</td>
    <td>Quarter</td>
    <td>Year</td>
    <td>Admissions<td>
    <td>Sales<td>
    <td>Expenses<td>
    <td>Total Revenue<td>
</tr>
<?php
   while ($row = mysql_fetch_array($result)) {
       echo "<tr class=\"".$class."\">";
       echo "<td>".$row["month"]."</td>";
       echo "<td>".$row["quarter"]."</td>";
       echo "<td>".$row["year"]."</td>";
       echo "<td>".$row["Admissions"]."</td>";
       echo "<td>".$row["Sales"]."</td>";
       echo "<td>".$row["Expenses"]."</td>";
       echo "<td>".$row["Earnings"]."</td>";
       echo "</tr>";
   }

?>
</table>
</body>
</html>