<DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php
        define('INCLUDED', true);
        require_once('Header.php');
        ?>
        <link rel="stylesheet" href="../Style/displayRecipe.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <div class="recipemenu">
        <div class="recipemenu-title">
            <div class="recipemenu-title-text" id="recipemenu-title-text">
                <!-- Title -->
            </div>
        </div>
        <div class="recipemenu-image">
            <div class="recipemenu-image-content" id="recipemenu-image-text">
                <img class="recipemenu-image-content-img" id="recipemenu-image-content-img" src="" alt="">
            </div>
        </div>
        <div class="recipemenu-info">
            <div class="recipemenu-info-text" id="recipemenu-info-text">
                <div class="recipemenu-info-text-difficulty" id="recipemenu-info-text-difficulty">
                    <!-- Difficulty -->
                </div>
                <div class="recipemenu-info-text-slash" id="recipemenu-info-text-slash">
                    -
                </div>
                <div class="recipemenu-info-text-time" id="recipemenu-info-text-time">
                    <!-- Time -->
                </div>
            </div>
        </div>
        <div class="recipemenu-ingredients">
            <div class="recipemenu-ingredients-title" id="recipemenu-ingredients-title">
                Ingredients
            </div>
            <div class="recipemenu-ingredients-list" id="recipemenu-ingredients-list">
                <!-- Ingredients -->
            </div>
        </div>
        <div class="recipemenu-steps">
            <div class="recipemenu-steps-title" id="recipemenu-steps-title">
                Etapes
            </div>
            <div class="recipemenu-steps-list" id="recipemenu-steps-list">
                <!-- Steps -->
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            const currentUrl = window.location.href;

            // Get search term from URL
            let params = (new URL(document.location)).searchParams;
            getRecipe(params.get("recipeId"));
            getIngredientsByRecipeId(params.get("recipeId"));
            getStepsByRecipeId(params.get("recipeId"));
        });

        function getRecipe(recipeId) {
            let recipe = recipeId;
            // Do AJAX request when user types in search bar
            $.ajax({
                url: '../Back/DisplayRecipe.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    recipe
                },
                async: true,
                success: function(data) {
                    var recipe = data.recipe;
                    document.getElementById("recipemenu-title-text").innerHTML = recipe.name;
                    document.getElementById("recipemenu-image-content-img").src = recipe.image;
                    document.getElementById("recipemenu-image-content-img").alt = recipe.name;

                    document.getElementById("recipemenu-info-text-difficulty").innerHTML = "Difficulté : " + recipe.difficulty;
                    document.getElementById("recipemenu-info-text-time").innerHTML = "Temps : " + recipe.time;
                }
            });
        }

        function getIngredientsByRecipeId(recipeId) {
            let ingredients = recipeId;
            // Do AJAX request when user types in search bar
            $.ajax({
                url: '../Back/DisplayRecipe.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    ingredients
                },
                async: true,
                success: function(data) {

                    data.ingredients.forEach(ingredient => {
                        const cardIngredient = document.createElement("div");
                        cardIngredient.classList.add("recipemenu-ingredients-list-ingredient");

                        const cardIngredientName = document.createElement("div");
                        cardIngredientName.classList.add("recipemenu-ingredients-list-ingredient-name");

                        const cardIngredientQuantity = document.createElement("div");
                        cardIngredientQuantity.classList.add("recipemenu-ingredients-list-ingredient-quantity");

                        const cardIngredientImage = document.createElement("div");
                        cardIngredientImage.classList.add("recipemenu-ingredients-list-ingredient-image");

                        const cardIngredientImageImg = document.createElement("img");
                        cardIngredientImageImg.classList.add("recipemenu-ingredients-list-ingredient-image-img");

                        cardIngredientName.innerHTML = ingredient.name;

                        cardIngredientQuantity.innerHTML = ingredient.quantity;

                        cardIngredientImageImg.src = ingredient.image;
                        cardIngredientImageImg.alt = ingredient.name;

                        cardIngredientImage.appendChild(cardIngredientImageImg);

                        cardIngredient.appendChild(cardIngredientImage);

                        cardIngredient.appendChild(cardIngredientName);
                        cardIngredient.appendChild(cardIngredientQuantity);

                        document.getElementById("recipemenu-ingredients-list").appendChild(cardIngredient);
                    });


                }
            });
        }

        function getStepsByRecipeId(recipeId) {
            let steps = recipeId;
            // Do AJAX request when user types in search bar
            $.ajax({
                url: '../Back/DisplayRecipe.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    steps
                },
                async: true,
                success: function(data) {

                    data.steps.forEach(step => {
                        const cardstep = document.createElement("div");
                        cardstep.classList.add("recipemenu-steps-list-step");

                        const cardstepNumber = document.createElement("div");
                        cardstepNumber.classList.add("recipemenu-steps-list-step-number");

                        const cardstepDescription = document.createElement("div");
                        cardstepDescription.classList.add("recipemenu-steps-list-step-description");

                        const cardstepSlash = document.createElement("div");
                        cardstepSlash.classList.add("recipemenu-steps-list-step-slash");

                        cardstepNumber.innerHTML = step.number;

                        cardstepDescription.innerHTML = step.description;

                        cardstepSlash.innerHTML = "-";


                        cardstep.appendChild(cardstepNumber);
                        cardstep.appendChild(cardstepSlash);
                        cardstep.appendChild(cardstepDescription);

                        document.getElementById("recipemenu-steps-list").appendChild(cardstep);
                    });

                }
            });

        }
    </script>