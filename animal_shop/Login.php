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
else{
$username = "";
$password = "";
$employeeType = ""; // 1:Admin 2:Zookeeper 3:Acccountant
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $sql = "SELECT password, employee_type FROM Users WHERE username = '$username'";
    $result = $server->query($sql);
    $row = $result->fetch_assoc();
    if($row["password"] == $password)
    {
        if ($row["employee_type"] == 0) {
          echo "<script type='text/javascript'> document.location = 'AdminMainPage.html'; </script>";
          exit;
        }
        elseif ($row["employee_type"] == 1) {
          echo "<script type='text/javascript'> document.location = 'ZookeeperMainPage.html'; </script>";
          exit;
        }
        elseif ($row["employee_type"] == 2) {
          echo "<script type='text/javascript'> document.location = 'AccountantMainPage.html'; </script>";
          exit;
        }
    }
    else{
          echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
          exit;
    }
}
else{
  echo "<script type='text/javascript'> document.location = 'login.html'; </script>";
  exit;
}

}
?>