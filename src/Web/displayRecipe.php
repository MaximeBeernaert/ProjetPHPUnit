<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recette</title>
    <link rel="stylesheet" href="../Style/displayRecipe.css">
</head>

<!-- DB call to retrive recipe, ingrediant and step -->
<?php

//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

//Include class
require_once("../Classes/recipe.php");
require_once("../Classes/ingredient.php");
require_once("../Classes/step.php");

//Create DAO connexion
$recipeDao = new RecipeDAO($db);
$ingredientDao = new IngredientDAO($db);
$stepsDao = new StepsDAO($db);

//Retrive recipe id from URL
$id = $_GET['recipeId']; //DEVONLY

//Retrive recipe from id
$recipe = $recipeDao->read($id);
//Create recipe object
$recipe = new Recipe($recipe["id"], $recipe["name"], $recipe["difficulty"], $recipe["description"], $recipe["time"], $recipe["image"], $recipe["idCategory"]);

//Retrive ingredient from recipe id
$ingredients = $ingredientDao->readByRecipeId($id);
//For each ingredient, create an object
foreach ($ingredients as $ingredient) {
    $ingredient = new Ingredient($ingredient["id"], $ingredient["name"], $ingredient["price"], $ingredient["image"], $ingredient["quantity"]);
}

//Retrive steps from recipe id
$steps = $stepsDao->readByRecipeId($id);
//For each step, create an object
foreach ($steps as $step) {
    $step = new Step($step["id"], $step["idRecipe"], $step["number"], $step["description"]);
}

?>

<body>

    <!-- Include Header -->
    <?php include("header.php"); ?>

    <!-- Display chooseen recipe -->
    <div class="recipe-container">

        <!-- Title of the recipe -->
        <div class="recipe-title">
            <?php echo $recipe->getName(); ?>
        </div>

        <!-- Recipe info -->
        <div class="recipe-info">

            <!-- Recipe IMG -->
            <div class="recipe-info-img">
                <img src="<?php echo $recipe->getImage(); ?>" alt="Image de la recette">
            </div>

            <!-- Recipe text : time todo, price etc -->
            <div class="recipe-info-text">
                <div class="recipe-info-text-time">
                    <?php echo $recipe->getTime(); ?>
                </div>
                <div class="recipe-info-text-difficulty">
                    <?php echo $recipe->getDifficulty(); ?>
                </div>

            </div>

        </div>

        <!-- Recipe ingredients & step -->
        <div class="recipe-doing">

            <!-- Recipe ingredients -->
            <div class="recipe-ingredients-list">
                <?php
                foreach ($ingredients as $ingredient) {
                    echo '<div>';
                    echo '<p><strong>Nom:</strong> ' . $ingredient['name'] . '</p>';
                    echo '<p><strong>Prix:</strong> ' . $ingredient['price'] . ' €</p>';
                    echo '<p><strong>Quantité:</strong> ' . $ingredient['quantity'] . '</p>';
                    echo '<img src="' . $ingredient['image'] . '" alt="' . $ingredient['name'] . '">';
                    echo '</div>';
                }
                ?>
            </div>

            <!-- Recipe steps -->
            <div class="recipe-steps">
                <?php
                foreach ($steps as $step) {
                    echo '<div>';
                    echo '<p><strong>Etape ' . $step['number'] . ':</strong> ' . $step['description'] . '</p>';
                    echo '</div>';
                }
                ?>
            </div>

        </div>
</body>

</html>