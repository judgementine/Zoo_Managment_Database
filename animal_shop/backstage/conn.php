<?php


header("Content-type: text/html; charset=utf-8");

$conn=@mysqli_connect("zoo-database.c3gzznnyeksn.us-east-2.rds.amazonaws.com
","admin","T3Am9Pasw0rd$") or die("数据库操作失败".mysqli_error());
mysqli_select_db($conn, "dbname") or die("数据库操作失败".mysqli_error());
mysqli_query($conn, 'set names utf8');