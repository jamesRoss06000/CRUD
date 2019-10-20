<?php
require_once("connection.php");

$gameId = $_GET['id'];

if (!empty($_POST)) {
    // print_r($_POST);
    $Titre = $_POST["Titre"];
    $Prix = $_POST["Prix"];
    $DateDeSortie = $_POST["DateDeSortie"];
    $Genre = $_POST["Genre"];
    $Origine = $_POST["Origine"];
    $Mode = $_POST["Mode"];
    $Connexion = $_POST["Connexion"];
    $PlateformeArray = $_POST["Plateforme"];
    $Plateforme = implode(",", $PlateformeArray);

    $conn = new PDO('mysql:host=localhost;dbname=jeuxvideo', $dbUserName, $dbPassword);
    $sql = "UPDATE `jeuxvideo`\n"
        . "SET `Titre`=:Titre, `Prix (Euros)`=:Prix, `Date de Sortie`=:DateDeSortie, `Genre`=:Genre,\n"
        . "`Origine`=:Origine, `Mode`=:Mode, `Connexion`=:Connexion, `Plateforme`=:Plateforme\n"
        . "WHERE `Id` = :Id";

    $add = $conn->prepare($sql);
    $add->bindParam(":Titre", $Titre);
    $add->bindParam(":Prix", $Prix);
    $add->bindParam(":DateDeSortie", $DateDeSortie);
    $add->bindParam(":Genre", $Genre);
    $add->bindParam(":Origine", $Origine);
    $add->bindParam(":Mode", $Mode);
    $add->bindParam(":Connexion", $Connexion);
    $add->bindParam(":Plateforme", $Plateforme);
    $add->bindParam(":Id", $gameId);
    $add->execute();
    header('Location: index.php');
    exit;
}
$sqlSelect = "SELECT * FROM `jeuxvideo` WHERE `Id`='$gameId'";
$req = $conn->prepare($sqlSelect);
$req->execute();
$gameInfo = $req->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- <div id="my-modal" class="modal fade"> -->
    <div id="formDiv" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modify Game</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="modifydata.php?id=<?php echo $gameId ?>" method="post" class="modal-content">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <input name="Titre" type="text" class="form-control" id="Titre" placeholder="Titre" value="<?php echo $gameInfo["Titre"]; ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Prix" type="text" class="form-control" id="Prix" placeholder="Prix" value="<?php echo $gameInfo["Prix (Euros)"]; ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="DateDeSortie" type="date" class="form-control" id="DateDeSortie" placeholder="DateDeSortie" value="<?php echo $gameInfo["Date de Sortie"]; ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <select name="Genre" id="myGenre" class="form-control" placeholder="Genre">
                            <option value="RPG">RPG</option>
                            <option value="FPS">FPS</option>
                            <option value="MMO">MMO</option>
                            <option value="Action">Action</option>
                            <option value="Sport">Sport</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Origine" type="text" class="form-control" id="Origine" placeholder="Origine" value="<?php echo $gameInfo["Origine"]; ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Mode" type="text" class="form-control" id="Mode" placeholder="Mode" value="<?php echo $gameInfo["Mode"]; ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Connexion" type="text" class="form-control" id="Connexion" placeholder="Connexion" value="<?php echo $gameInfo["Connexion"]; ?>">
                    </div>
                    <?php
                    $pl = explode(",", $gameInfo["Plateforme"]);
                    ?>
                    <div class="form-check">
                        <div class="col-md-4">
                            <input name="Plateforme[]" type="checkbox" class="form-check-input" id="Plateformexb" value="XBOX" <?php if(in_array("XBOX", $pl)) echo "checked"; ?>>XBOX
                        </div>
                        <div class="col-md-4">
                            <input name="Plateforme[]" type="checkbox" class="form-check-input" id="Plateformeps" value="PS4" <?php if(in_array("PS4", $pl)) echo "checked"; ?>>PS4
                        </div>
                        <div class="col-md-4">
                            <input name="Plateforme[]" type="checkbox" class="form-check-input" id="Plateformepc" value="PC" <?php if(in_array("PC", $pl)) echo "checked"; ?>>PC
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Modify Game Details</button>
                    <button type="cancel" class="btn btn-danger">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>