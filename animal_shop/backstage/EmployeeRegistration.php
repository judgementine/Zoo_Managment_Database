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



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $fname = $_POST["fname"];
    $minit = $_POST["mInit"];
    $lname = $_POST["lname"];
    $employeeID = $_POST["employeeID"];
    $jobTitle = $_POST["jobTitle"];
    $PhoneNumber = $_POST["PhoneNumber"];
    $cellphone = $_POST["cellPhone"];
    $homephone = $_POST["Homephone"];
    $salary = $_POST["Salary"];

    $sql = "INSERT INTO Employee (ID_Number, Job_Title, Salary, Phone_Number, cell_phone, home_phone, name, first_name, last_name, middle_initial) 
        VALUES ('$employeeID', '$jobTitle', '$salary', '$PhoneNumber', '$cellphone', '$homephone', '$name', '$fname', '$lname', '$minit')";

    if (mysqli_query($server, $sql) {
        echo "New record created succefully";
    } else {
        echo "error found";
    }
}

?>