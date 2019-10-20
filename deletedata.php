<?php
require_once("connection.php");

$gameId =$_GET['id'];
$sql = "DELETE FROM `jeuxvideo` WHERE `Id`='$gameId'";
$req = $conn->prepare($sql);
$req->execute(); 
header("Location: index.php")
?>
