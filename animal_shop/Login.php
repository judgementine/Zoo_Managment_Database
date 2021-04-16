<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$username, $password = "";
$employeeType = ""; // 1:Admin 2:Zookeeper 3:Acccountant
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["username"]);
    $password = test_input($_POST["password"]);
    
    
    $servername = "localhost";
    $dbname = "myDB";
    // Create connection
    $server = mysql_connect($servername,$username, $password);
    
  // Check connection
  if ($server->connect_error) {
    header("Location: FinancialReport.html");
    die("Connection failed: " . $conn->connect_error);
    exit;
  }
  else
  {
    $_SESSION['username']=$username;
    $_SESSION['password']=$password;
    $_SESSION['servername']=$servername;
    $_SESSION['dbname']= $dbname;
    
    $sql = "SELECT displayType FROM Users WHERE username = '{$username}'";
    $result = $server->query($sql);

    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        if ($row["displayType"]. == 1) {
          header("Location: AdminMainPage.html");
        }
        elseif ($row["displayType"]. == 2) {
          header("Location: ZookeeperMainPage.html"); 
        }
        elseif ($row["displayType"]. == 3) {
          header("Location: AccountantMainPage.html"); 
        }
      }
    }


  }
?>
<body>
<html>