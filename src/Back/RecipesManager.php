<?php
//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

// Check if search term is present in POST request
if (isset($_POST["recipes"])) {
    $recipes = $_POST["recipes"];

    $RecipeDAO = new RecipeDAO($db);
    $recipes = $RecipeDAO->readAll();
    echo json_encode(array('recipes' => ($recipes)));
}

if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $RecipeDAO = new RecipeDAO($db);
    $recipes = $RecipeDAO->delete($id);
    echo json_encode(array('recipes' => ($recipes)));
}

?>