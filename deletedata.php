<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "jeuxvideo";

// $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
$conn = new PDO('mysql:host=localhost;dbname=jeuxvideo', $dbUserName, $dbPassword);

$gameId =$_GET['id'];
$sql = "DELETE FROM `jeuxvideo` WHERE `Id`='$gameId'";
$req = $conn->prepare($sql);
$req->execute(); 
header("Location: html.php")
?>
