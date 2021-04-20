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
$name = "";
$fname = "";
$minit = "";
$lname = "";
$employeeID = "";
$jobTitle = "";
$PhoneNumber = "";
$cellphone = "";
$homephone = "";
$salary = "";


}
?>