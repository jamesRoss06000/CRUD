<?php
require_once("connection.php");

if(isset($_POST["Titre"],$_POST["Prix"],$_POST["DateDeSortie"],$_POST["Genre"],$_POST["Origine"],$_POST["Mode"],$_POST["Connexion"])){    
$Titre = $_POST["Titre"];
$Prix = $_POST["Prix"];
$DateDeSortie = $_POST["DateDeSortie"];
$Genre = $_POST["Genre"];
$Origine = $_POST["Origine"];
$Mode = $_POST["Mode"];
$Connexion = $_POST["Connexion"];
$PlateformeArray = $_POST["Plateforme"];
$Plateforme = implode(",", $PlateformeArray);

$sql = "INSERT INTO `jeuxvideo`(`Id`, `Titre`, `Prix (Euros)`, `Date de Sortie`, `Genre`, `Origine`, `Mode`, `Connexion`, `Plateforme`) VALUES (NULL,'".$Titre."','".$Prix."','".$DateDeSortie."','".$Genre."','".$Origine."','".$Mode."','".$Connexion."','".$Plateforme."')";
$add = $conn->prepare($sql);
$add->execute();
header('Location: index.php');
}