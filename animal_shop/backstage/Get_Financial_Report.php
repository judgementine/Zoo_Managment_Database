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

  
  if ($month=="")
  {
    $month = "*";
  }
 if($quarter=="")
  {
    $quarter == "*";

  }
  if($year == "")
  {
    $year = "*";

  }
$sql = "SELECT * FROM Finance WHERE month ='$month', quarter = '$quarter', year ='$year'";

  
  /*
  $servername = "zoo-database.ccvdldxxabcr.us-east-2.rds.amazonaws.com";
  $username = "admin";
  $password = "T3Am9Pasw0rd$";
  $dbname = "myDB";
 
  // Create connection
  $server = mysql_connect($servername,$username, $password);
  // Check connection
  if ($server->connect_error) {
    header("Location: FinancialReport.html");
    die("Connection failed: " . $conn->connect_error);
    exit;
  }
  else{
  $db =  mysql_select_db("$dbname,$server");
  $result = $server->mysql_query($sql);
  
  $server->close();

  }
  */
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