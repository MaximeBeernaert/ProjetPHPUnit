<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette</title>
    <link rel="stylesheet" href="displayRecipe.css">
</head>

<!-- DB call to retrive recipe, ingrediant and step -->
<?php

//Include DAO & connexion
require_once("config.php");
require_once("DAO.php");

//Create DAO connexion
$recipeDao = new RecipeDAO($db);
$ingredientDao = new IngredientDAO($db);
$stepsDao = new StepsDAO($db);

//Retrive recipe id from URL
$id = $_GET['id'];

//Retrive recipe from id
$recipe = $recipeDao->read($id);




?>

<body>

    <!-- Include Header -->
    <!-- TODO -->

    <!-- Display chooseen recipe -->
    <div class="recipe-container">

        <!-- Title of the recipe -->
        <div class="recipe-title">
            <h1>Titre de la recette</h1>
        </div>

        <!-- Recipe info -->
        <div class="recipe-info">

            <!-- Recipe IMG -->
            <div class="recipe-info-img">
                IMAGE DE LA RECETTE
            </div>

            <!-- Recipe text : time todo, price etc -->
            <div class="recipe-info-text">
                TEMPS
                PRIX
            </div>

        </div>

        <!-- Recipe ingredients & step -->
        <div class="recipe-doing">

            <!-- Recipe ingredients -->
            <div class="recipe-ingredients-list">
                INGREDIENTS1
                INGREDIENTS2
                INGREDIENTS3
            </div>

            <!-- Recipe steps -->
            <div class="recipe-steps">
                STEPS1
                STEPS2
                STEPS3
            </div>

        </div>
</body>

</html>