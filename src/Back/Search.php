<?php
//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

// Check if search term is present in POST request
if (isset($_POST["searchTerm"])) {
    $searchTerm = $_POST["searchTerm"];

    $recipeDao = new RecipeDAO($db);
    $recipes = $recipeDao->search($searchTerm);

    echo json_encode(array('recipes' =>($recipes)));
}
?>