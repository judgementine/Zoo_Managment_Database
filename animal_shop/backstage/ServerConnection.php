
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$servername = "zoo-database.ccvdldxxabcr.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "T3Am9Pasw0rd$";
$dbname = "zoo-database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
?>

    
<body>
<html>