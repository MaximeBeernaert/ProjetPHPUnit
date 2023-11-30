<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Style/search.css">
</head>

<body>
    <!-- Include Header -->
    <?php include("header.php"); ?>

    <div class="search-container">
        <!-- Search Bar -->
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Rechercher une recette, un ingrédient ou une catégories..." id="searchInput">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                    </form>
            </div>
        </div>
        <div class="search-result" id="searchResults">
            <!-- Display search result -->

        </div>
    </div>

</body>

</html>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchInput').on('input', function() {
            var searchTerm = $(this).val();

            // Effectuer une requête AJAX lorsque l'utilisateur saisit quelque chose
            $.ajax({
                url: 'Search.php',
                method: 'POST',
                data: {
                    searchTerm
                },
                success: function(data) {
                    $('#searchResults').html(data);
                }
            });
        });
    });
</script>

<?php

//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

//Include class
require_once("../Classes/recipe.php");

// Vérifier si le terme de recherche est présent dans la requête POST
if (isset($_POST["searchTerm"])) {
    $searchTerm = $_POST["searchTerm"];

    $recipeDao = new RecipeDAO($db);
    $recipes = $recipeDao->search($searchTerm);

    //Create recipe object
    foreach ($recipes as $recipe) {
        $recipe = new Recipe($recipe["id"], $recipe["name"], $recipe["description"], $recipe["picture"], $recipe["difficulty"], $recipe["time"], $recipe["nb_people"], $recipe["id_category"], $recipe["id_user"]);
        print_r($recipe);
    }
}
?>