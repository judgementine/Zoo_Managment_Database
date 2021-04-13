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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = test_input($_POST["musername"]);
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
      $_SESSION['dbname']= $dbname
  }
?>
<body>
<html>