<?php
$dbServerName = "localhost";
$dbUserName = "root";
$dbPassword = "";
$dbName = "jeuxvideo";

// $conn = mysqli_connect($dbServerName, $dbUserName, $dbPassword, $dbName);
$conn = new PDO('mysql:host=localhost;dbname=jeuxvideo', $dbUserName, $dbPassword);
$sql = "SELECT * FROM jeuxvideo";
$result = $conn->prepare($sql);
$request = $result->execute();

// print_r($request);

echo "<table border='1' id='myTable'>";
echo "<thead><tr><th>Id</th><th>Titre</th><th>Prix<th>Date de Sortie</th><th>Genre</th><th>Origine</th><th>Mode</th><th>Connexion</th><th>Plateforme</th><th>Delete Game</th><th>Modify Game</th></tr></thead>\n";
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    echo "<tr>";
    foreach ($row as $key => $value) {
        echo "<td>$value</td>";
    }
    echo "<td><a class='btn btn-danger btn-md' href='deletedata.php?id=".$row['Id']."'>Delete</a></td>";
    echo "<td><a class='btn btn-warning btn-modal btn-md' href='modifydata.php?id=".$row['Id']."'>Modify</a></td>";
    echo "</tr>";
}
echo "</table>";