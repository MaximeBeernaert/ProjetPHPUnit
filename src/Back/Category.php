<?php
//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

// Check if search term is present in POST request
if (isset($_POST["name"])) {
    $name = $_POST["name"];

    $categoryDAO = new CategoryDAO($db);
    $recipes = $categoryDAO->getRecipesByCategory($name);
    echo json_encode(array('recipes' =>($recipes)));
}
?>