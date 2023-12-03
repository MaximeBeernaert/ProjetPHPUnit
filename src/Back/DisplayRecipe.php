<?php
//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

// Check if search term is present in POST request
if (isset($_POST["recipe"])) {
    $recipe = $_POST["recipe"];

    $categoryDAO = new RecipeDAO($db);
    $recipe = $categoryDAO->read($recipe);
    echo json_encode(array('recipe' => ($recipe)));
}

if (isset($_POST["ingredients"])) {
    $recipeId = $_POST["ingredients"];

    $categoryDAO = new IngredientDAO($db);
    $ingredients = $categoryDAO->readByRecipeId($recipeId);
    echo json_encode(array('ingredients' => ($ingredients)));
}

if (isset($_POST["steps"])) {
    $recipeId = $_POST["steps"];

    $stepDAO = new StepsDAO($db);
    $steps = $stepDAO->readStepsByRecipeId($recipeId);
    echo json_encode(array('steps' => ($steps)));
}

?>