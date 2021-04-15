<?php
session_start();
?>
<html>
<head>
<style>
        .h1 {
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            font-size: 40px;
        }
        .h2 0{
            display: block;
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            font-size: 30px;
        }

</style>
</head>
<body>
ShopReport <?php
// define variables and set to empty values
$month = $quarter = $year = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $dno = test_input($_POST["dno"]);
  $location = test_input($_POST["location"]);
  $shopType = test_input($_POST["shopType"]);
  $attractionType = test_input($_POST["attractionType"]);
  $schedule = test_input($_POST["schedule"]);


  $servername = "localhost";
  $username = "username";
  $password = "password";
  $dbname = "myDB";


  // Create connection
  $server = mysql_connect($servername,$username, $password);
  // Check connection
  if ($server->connect_error) {
    header("Location: shopReport.html");
    die("Connection failed: " . $conn->connect_error);
    exit;
  }
  else{
  $db =  mysql_select_db("$dbname,$server");
    $dname =""
    if($dno=="")$dname="*";
    else{
      $dname = $server->mysql_query("SELECT $dno FROM Department");
    }
    if($location=="")$location="*";
    if($shopType=="")$location="*";
    if($attractionType=="")$attractionType="*";
    if($schedule=="")$schedule="*";

    $sql1 = "SELECT $dname, $location, $shopType, $schedule FROM Shops"
    $sql2 = "SELECT $dname, $location, $shopType, $schedule FROM Shops"

  $result1 = $server->mysql_query($sql1);
  $result2 = $server->mysql_query($sql2);
  
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
<div class="h1">
    <p>Managerial Report<p>
</div> 
<div class ="h2">
<p>Shops<p>
</div>
<table class="striped">
<tr class="header">
    <td>Name</td>
    <td>Type</td>
    <td>Department</td>
    <td>Location</td>
    <td>Schedule</td>
    <td>Items</td>
    <td>Item Name<td>
    <td>Item Price<td>
    <td>Num Sales<td>
</tr>

<?php
   while ($row = mysql_fetch_array($result1)) {
      echo "<tr class=\"".$class."\">";
      echo "<td>".$row[Name]."</td>";
      echo "<td>".$row[Type]."</td>";
      echo "<td>".$row[Department_Name]."</td>";
      echo "<td>".$row[Location]."</td>";
      echo "<td>".$row[Schedule]."</td>";
      echo "<td>".$row[items]."</td>";
      echo "<td>".$row[item_name]."</td>";
      echo "<td>".$row[item_price]."</td>";
      echo "<td>".$row[number_of_sales]."</td>";

   }

?>

</table>

<div class ="h2">
<p>Attractions<p>
</div>
<table class="striped">
<tr class="header">
    <td>Name</td>
    <td>Type</td>
    <td>Department</td>
    <td>Location</td>
    <td>Site ID</td>
    <td>Schedule</td>
    <td>num sales</td>
    <td>admitance price<td>
</tr>

<?php
   while ($row = mysql_fetch_array($result2)) {
      echo "<tr class=\"".$class."\">";
      echo "<td>".$row[Name]."</td>";
      echo "<td>".$row[Type]."</td>";
      echo "<td>".$row[Department_Name]."</td>";
      echo "<td>".$row[Location]."</td>";
      echo "<td>".$row[Site ID]."</td>";
      echo "<td>".$row[Schedule]."</td>";
      echo "<td>".$row[number_of_sales]."</td>";
      echo "<td>".$row[price_of_admittance]."</td>";
      echo "<td>".$row[item_price]."</td>";
      echo "<td>".$row[number_of_sales]."</td>";

   }

?>

</table>

</body>
</html>