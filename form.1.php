<?php
require_once("dataInput.php");
?>
<!-- MODAL LOGO BUTTON -->
<div id="my-modal" class="modal fade ">
    <div id="formDiv" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add Game</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="html.php" method="post">
                    <div class="form-group col-md-12">
                        <input name="Titre" type="text" class="form-control" id="Titre" placeholder="Titre">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Prix" type="text" class="form-control" id="Prix" placeholder="Prix">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="DateDeSortie" type="date" class="form-control" id="DateDeSortie" placeholder="DateDeSortie">
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
                        <input name="Origine" type="text" class="form-control" id="Origine" placeholder="Origine">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Mode" type="text" class="form-control" id="Mode" placeholder="Mode">
                    </div>
                    <div class="form-group col-md-12">
                        <input name="Connexion" type="text" class="form-control" id="Connexion" placeholder="Connexion">
                    </div>
                    <div class="form-check">
                        <div class="col-md-4">
                            <input name="Plateforme[]" type="checkbox" class="form-check-input" id="Plateformexb" value="XBOX">XBOX</div>
                        <div class="col-md-4">
                            <input name="Plateforme[]" type="checkbox" class="form-check-input" id="Plateformeps" value="PS4">PS4</div>
                        <div class="col-md-4">
                            <input name="Plateforme[]" type="checkbox" class="form-check-input" id="Plateformepc" value="PC">PC</div>
                    </div>
                    <button type="submit" class="btn btn-success">Add Game To Database</button>
                    <button type="cancel" class="btn btn-danger">Cancel</button>
                </form>
            </div>
        </div>
    </div>
</div>