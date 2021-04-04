<?php
session_start();
?>
<html>
<body>
FinancialReport <?php
// define variables and set to empty values
$month = $quarter = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $month = test_input($_POST["month"]);
  $quarter = test_input($_POST["quarter"]);
  $year = test_input($_POST["year"]);

  $servername = "localhost";
  $username = "username";
  $password = "password";
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
  if ($month!="")
  {
     $sql = "SELECT $month, $quarter, $year FROM Finance";
  }
  else if($quarter!="")
  {
    $sql = "SELECT $quarter, $year FROM Finance";

  }
  else
  {
    $sql = "SELECT $year FROM Finance";

  }
  $result = $server->mysql_query($sql);
  
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
   $i = 0;
   while ($row = mysql_fetch_array($sql)) {
       $class = ($i == 0) ? "" : "alt";
       echo "<tr class=\"".$class."\">";
       echo "<td>".$row[Month]."</td>";
       echo "<td>".$row[Quarter]."</td>";
       echo "<td>".$row[Year]."</td>";
       echo "<td>".$row[Admissions]."</td>";
       echo "<td>".$row[Sales]."</td>";
       echo "<td>".$row[Expenses]."</td>";
       echo "<td>".$row[Total Revenue]."</td>";
       echo "</tr>";
       $i = ($i==0) ? 1:0;
   }

?>
</table>
</body>
</html>