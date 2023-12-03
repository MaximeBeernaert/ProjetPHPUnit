<DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
        define('INCLUDED', true);
        require_once('Header.php');
        ?>
        <link rel="stylesheet" href="../Style/RecipesManager.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>

    <div class="managermenu">
        <div class="managermenu-add-recipe">
            <div class="managermenu-add-recipe-text clickable" onclick="window.location.href = '/src/Web/AddRecipe.php'">
                Ajouter une recette
            </div>
        </div>
        <div class="managermenu-list">

        </div>
    </div>


    <script>
        $(document).ready(function() {
            listAllRecipes();
        });

        function listAllRecipes() {
            var recipes = "recipes"
            $.ajax({
                url: '../Back/RecipesManager.php',
                method: 'POST',
                dataType: 'json',
                async: true,
                data: {
                    recipes
                },
                success: function(data) {
                    console.log(data.recipes);
                    var recipes = data.recipes;
                    recipes.forEach(recipe => {
                        recipeCard(recipe);
                    });
                }
            });
        }

        function recipeCard(recipe) {
            const card = document.createElement("div");
            card.classList.add("managermenu-list-recipe-container");
            card.classList.add("clickable");



            const cardImage = document.createElement("div");
            cardImage.classList.add("managermenu-list-recipe-container-image");

            const cardImageImg = document.createElement("img");
            cardImageImg.src = recipe.image;
            cardImageImg.alt = recipe.name;
            cardImageImg.classList.add("managermenu-list-recipe-container-image-img");
            cardImage.addEventListener("click", function(e) {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + recipe.id;
            });

            const cardInfo = document.createElement("div");
            cardInfo.classList.add("managermenu-list-recipe-container-title");
            cardInfo.innerHTML = recipe.name;

            const cardOptions = document.createElement("div");
            cardOptions.classList.add("managermenu-list-recipe-container-options");


            const cardDelete = document.createElement("div");
            cardDelete.classList.add("managermenu-list-recipe-container-delete");
            cardDelete.innerHTML = "Supprimer";
            cardDelete.setAttribute("onclick", "deleteRecipe(" + recipe.id + ")");

            const cardUpdate = document.createElement("div");
            cardUpdate.classList.add("managermenu-list-recipe-container-update");
            cardUpdate.innerHTML = "Modifier";
            cardUpdate.setAttribute("onclick", "window.location.href = '/src/Web/AddRecipe.php?recipeId=" + recipe.id + "'");

            cardImage.appendChild(cardImageImg);
            card.appendChild(cardImage);
            card.appendChild(cardInfo);
            cardOptions.appendChild(cardUpdate);
            cardOptions.appendChild(cardDelete);
            card.appendChild(cardOptions);

            document.querySelector(".managermenu-list").appendChild(card);
        }

        function deleteRecipe(recipeId) {
            let id = recipeId;
            $.ajax({
                url: '../Back/RecipesManager.php',
                method: 'POST',
                dataType: 'json',
                async: true,
                data: {
                    id
                },
                success: function(data) {
                    window.location.href = "/src/Web/RecipesManager.php";
                }
            });


        }
    </script>