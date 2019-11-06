<?php
$user = getenv('USERNAME');
$pass = getenv('PASSWORD');

$dbServerName = "remotemysql.com";
$dbUserName = $user;
$dbPassword = $pass;
$dbName = 'TnuAWjwlHS';

$conn = new PDO('mysql:host=remotemysql.com;dbname=TnuAWjwlHS', $dbUserName, $dbPassword);

// $dbServerName = "localhost";
// $dbUserName = "root";
// $dbPassword = "";
// $dbName = "jeuxvideo";