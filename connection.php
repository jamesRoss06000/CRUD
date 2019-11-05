<?php
$user = getenv('USERNAME');
$pass = getenv('PASSWORD');

$dbServerName = "remotemysql.com";
$dbUserName = $user;
$dbPassword = $pass;
$dbName = $user;

// $dbServerName = "remotemysql.com";
// $dbUserName = "TnuAWjwlHS";
// $dbPassword = "SaXj67gCa7";
// $dbName = "TnuAWjwlHS";

$conn = new PDO('mysql:host=remotemysql.com;dbname=TnuAWjwlHS', $dbUserName, $dbPassword);

// $dbServerName = "localhost";
// $dbUserName = "root";
// $dbPassword = "";
// $dbName = "jeuxvideo";

// $conn2 = new PDO('mysql:host=localhost;dbname=jeuxvideo', $dbUserName, $dbPassword);