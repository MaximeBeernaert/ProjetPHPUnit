<?php
//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

// Check if search term is present in POST request
if (isset($_POST["arrayRecipes"])) {
    $arrayRecipes = $_POST["arrayRecipes"];

    $recipeDao = new RecipeDAO($db);
    foreach ($arrayRecipes as $key => $value) {
        $recipe = $recipeDao->getRecipeById($value);
        $arrayRecipes[$key] = $recipe;
    }
    echo json_encode(array('arrayRecipes' => ($arrayRecipes)));
}
