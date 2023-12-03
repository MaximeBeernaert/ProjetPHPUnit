<DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php require_once('Header.php'); ?>
        <link rel="stylesheet" href="../Style/MainMenu.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    </head>

    <div class="mainmenu">
        <!-- Category 'IN THE NEWS' -->
        <div class="mainmenu-inthenews">
            <div class="mainmenu-inthenews-container">

                <!-- TITLE -->
                <div class="mainmenu-inthenews-container-title">
                    <h2>À LA UNE</h2>
                </div>
                <!-- RECIPES -->
                <div class="mainmenu-inthenews-container-recipes">
                    <!-- FIRST RECIPE -->
                    <div class="mainmenu-inthenews-container-recipes-primary" id="mainmenu-inthenews-container-recipes-primary">
                        <input type="hidden" id="mainmenu-inthenews-container-recipes-primary-id-1">
                        <div class="mainmenu-inthenews-container-recipes-primary-recipe">
                            <div class="mainmenu-inthenews-container-recipes-primary-recipe-image-container">
                                <div class="mainmenu-inthenews-container-recipes-primary-recipe-image">
                                    <img id="mainmenu-inthenews-container-recipes-primary-recipe-image-img">
                                    <div id="mainmenu-inthenews-container-recipes-primary-recipe-image-text" class="overlay-text-1"></div>
                                </div>
                            </div>
                            <div class="mainmenu-inthenews-container-recipes-primary-recipe-info">
                                <div class="mainmenu-inthenews-container-recipes-primary-recipe-info-left">
                                    <div id="mainmenu-inthenews-container-recipes-primary-recipe-info-left-time" class="mainmenu-inthenews-container-recipes-primary-recipe-info-left-time"></div>
                                </div>
                                <div class="mainmenu-inthenews-container-recipes-primary-recipe-info-right">
                                    <div id="mainmenu-inthenews-container-recipes-primary-recipe-info-right-difficulty" class="mainmenu-inthenews-container-recipes-primary-recipe-info-right-difficulty"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- OTHER RECIPES -->
                    <div class="mainmenu-inthenews-container-recipes-secondary">
                        <div class="mainmenu-inthenews-container-recipes-secondary-recipe" id="mainmenu-inthenews-container-recipes-secondary-recipe-1">
                            <input type="hidden" id="mainmenu-inthenews-container-recipes-secondary-recipe-id-1">
                            <div class="mainmenu-inthenews-container-recipes-secondary-recipe-image-container">
                                <div class="mainmenu-inthenews-container-recipes-secondary-recipe-image">
                                    <img id="mainmenu-inthenews-container-recipes-secondary-recipe-image-1-img">
                                    <div id="mainmenu-inthenews-container-recipes-secondary-recipe-image-1-text" class="overlay-text-2"></div>
                                </div>
                            </div>
                        </div>
                        <div class="mainmenu-inthenews-container-recipes-secondary-recipe" id="mainmenu-inthenews-container-recipes-secondary-recipe-2">
                            <input type="hidden" id="mainmenu-inthenews-container-recipes-secondary-recipe-id-2">
                            <div class="mainmenu-inthenews-container-recipes-secondary-recipe-image-container">
                                <div class="mainmenu-inthenews-container-recipes-secondary-recipe-image">
                                    <img id="mainmenu-inthenews-container-recipes-secondary-recipe-image-2-img">
                                    <div id="mainmenu-inthenews-container-recipes-secondary-recipe-image-2-text" class="overlay-text-2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- Category 'RECIPE OF THE DAY' -->
        <div class="mainmenu-recipeoftheday">
            <div class="mainmenu-recipeoftheday-container">
                <!-- TITLE -->
                <div class="mainmenu-recipeoftheday-container-title">
                    <h2>Recette du jour</h2>
                </div>
                <div class="mainmenu-recipeoftheday-container-recipe">
                    <!-- RECIPE -->
                    <div class="mainmenu-recipeoftheday-container-recipe" id="mainmenu-recipeoftheday-container-recipe-1">
                        <input type="hidden" id="mainmenu-recipeoftheday-container-recipe-id-1">
                        <div class="mainmenu-recipeoftheday-container-recipe-image-container">
                            <div class="mainmenu-recipeoftheday-container-recipe-image">
                                <img id="mainmenu-recipeoftheday-container-recipe-image-img-1">
                            </div>
                        </div>
                        <div class="mainmenu-recipeoftheday-container-recipe-info">
                            <div id="mainmenu-recipeoftheday-container-recipe-info-1-title"></div>
                            <div class="mainmenu-recipeoftheday-container-recipe-info-text">
                                <div id="mainmenu-recipeoftheday-container-recipe-info-1-time"></div>
                                <div id="mainmenu-recipeoftheday-container-recipe-info-1-difficulty"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainmenu-recipeoftheday-container-recipe">
                    <!-- RECIPE -->
                    <div class="mainmenu-recipeoftheday-container-recipe" id="mainmenu-recipeoftheday-container-recipe-2">
                        <input type="hidden" id="mainmenu-recipeoftheday-container-recipe-id-2">
                        <div class="mainmenu-recipeoftheday-container-recipe-image-container">
                            <div class="mainmenu-recipeoftheday-container-recipe-image">
                                <img id="mainmenu-recipeoftheday-container-recipe-image-img-2">
                            </div>
                        </div>
                        <div class="mainmenu-recipeoftheday-container-recipe-info">
                            <div id="mainmenu-recipeoftheday-container-recipe-info-2-title"></div>
                            <div class="mainmenu-recipeoftheday-container-recipe-info-text">
                                <div id="mainmenu-recipeoftheday-container-recipe-info-2-time"></div>
                                <div id="mainmenu-recipeoftheday-container-recipe-info-2-difficulty"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mainmenu-recipeoftheday-container-recipe">
                    <!-- RECIPE -->
                    <div class="mainmenu-recipeoftheday-container-recipe" id="mainmenu-recipeoftheday-container-recipe-3">
                        <input type="hidden" id="mainmenu-recipeoftheday-container-recipe-id-3">
                        <div class="mainmenu-recipeoftheday-container-recipe-image-container">
                            <div class="mainmenu-recipeoftheday-container-recipe-image">
                                <img id="mainmenu-recipeoftheday-container-recipe-image-img-3">
                            </div>
                        </div>
                        <div class="mainmenu-recipeoftheday-container-recipe-info">
                            <div id="mainmenu-recipeoftheday-container-recipe-info-3-title"></div>
                            <div class="mainmenu-recipeoftheday-container-recipe-info-text">
                                <div id="mainmenu-recipeoftheday-container-recipe-info-3-time"></div>
                                <div id="mainmenu-recipeoftheday-container-recipe-info-3-difficulty"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        getMainMenuRecipes();
        addCardListener();

        function getMainMenuRecipes() {
            // This can be changed to the owner's liking, to show different recipes in the main menu ! change the id 
            var arrayRecipes = {
                'INTHENEWS-PRIMARY': 1,
                'INTHENEWS-SECONDARY-1': 2,
                'INTHENEWS-SECONDARY-2': 3,
                'RECIPEOFTHEDAY-1': 1,
                'RECIPEOFTHEDAY-2': 2,
                'RECIPEOFTHEDAY-3': 3
            };
            $.ajax({
                url: '../Back/MainMenu.php',
                method: 'POST',
                dataType: 'json',
                data: {
                    arrayRecipes
                },
                async: true,
                success: function(data) {
                    // Display results from the call as recipes cards

                    // In the news primary
                    document.getElementById("mainmenu-inthenews-container-recipes-primary-id-1").value = data.arrayRecipes['INTHENEWS-PRIMARY'].id;

                    document.getElementById("mainmenu-inthenews-container-recipes-primary-recipe-image-img").src = data.arrayRecipes['INTHENEWS-PRIMARY'].image;

                    document.getElementById("mainmenu-inthenews-container-recipes-primary-recipe-image-img").alt = data.arrayRecipes['INTHENEWS-PRIMARY'].name;
                    document.getElementById("mainmenu-inthenews-container-recipes-primary-recipe-image-text").innerHTML = data.arrayRecipes['INTHENEWS-PRIMARY'].name;

                    document.getElementById("mainmenu-inthenews-container-recipes-primary-recipe-info-left-time").innerHTML = "Durée de préparation : " + data.arrayRecipes['INTHENEWS-PRIMARY'].time;
                    document.getElementById("mainmenu-inthenews-container-recipes-primary-recipe-info-right-difficulty").innerHTML = "Difficulté : " + data.arrayRecipes['INTHENEWS-PRIMARY'].difficulty;

                    // In the news secondary 1
                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-id-1").value = data.arrayRecipes['INTHENEWS-SECONDARY-1'].id;

                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-image-1-img").src = data.arrayRecipes['INTHENEWS-SECONDARY-1'].image;

                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-image-1-img").alt = data.arrayRecipes['INTHENEWS-SECONDARY-1'].name;
                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-image-1-text").innerHTML = data.arrayRecipes['INTHENEWS-SECONDARY-1'].name;

                    // In the news secondary 2
                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-id-2").value = data.arrayRecipes['INTHENEWS-SECONDARY-2'].id;

                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-image-2-img").src = data.arrayRecipes['INTHENEWS-SECONDARY-2'].image;

                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-image-2-img").alt = data.arrayRecipes['INTHENEWS-SECONDARY-2'].name;
                    document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-image-2-text").innerHTML = data.arrayRecipes['INTHENEWS-SECONDARY-2'].name;

                    // Recipe of the day 1
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-id-1").value = data.arrayRecipes['RECIPEOFTHEDAY-1'].id;

                    document.getElementById("mainmenu-recipeoftheday-container-recipe-image-img-1").src = data.arrayRecipes['RECIPEOFTHEDAY-1'].image;

                    document.getElementById("mainmenu-recipeoftheday-container-recipe-image-img-1").alt = data.arrayRecipes['RECIPEOFTHEDAY-1'].name;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-1-title").innerHTML = data.arrayRecipes['RECIPEOFTHEDAY-1'].name;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-1-time").innerHTML = "Durée de préparation : " + data.arrayRecipes['RECIPEOFTHEDAY-1'].time;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-1-difficulty").innerHTML = "Difficulté : " + data.arrayRecipes['RECIPEOFTHEDAY-1'].difficulty;

                    // Recipe of the day 2
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-id-2").value = data.arrayRecipes['RECIPEOFTHEDAY-2'].id;

                    document.getElementById("mainmenu-recipeoftheday-container-recipe-image-img-2").src = data.arrayRecipes['RECIPEOFTHEDAY-2'].image;

                    document.getElementById("mainmenu-recipeoftheday-container-recipe-image-img-2").alt = data.arrayRecipes['RECIPEOFTHEDAY-2'].name;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-2-title").innerHTML = data.arrayRecipes['RECIPEOFTHEDAY-2'].name;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-2-time").innerHTML = "Durée de préparation : " + data.arrayRecipes['RECIPEOFTHEDAY-2'].time;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-2-difficulty").innerHTML = "Difficulté : " + data.arrayRecipes['RECIPEOFTHEDAY-2'].difficulty;

                    // Recipe of the day 3
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-id-3").value = data.arrayRecipes['RECIPEOFTHEDAY-3'].id;

                    document.getElementById("mainmenu-recipeoftheday-container-recipe-image-img-3").src = data.arrayRecipes['RECIPEOFTHEDAY-3'].image;

                    document.getElementById("mainmenu-recipeoftheday-container-recipe-image-img-3").alt = data.arrayRecipes['RECIPEOFTHEDAY-3'].name;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-3-title").innerHTML = data.arrayRecipes['RECIPEOFTHEDAY-3'].name;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-3-time").innerHTML = "Durée de préparation : " + data.arrayRecipes['RECIPEOFTHEDAY-3'].time;
                    document.getElementById("mainmenu-recipeoftheday-container-recipe-info-3-difficulty").innerHTML = "Difficulté : " + data.arrayRecipes['RECIPEOFTHEDAY-3'].difficulty;

                },
                error: function(data) {
                    console.log(data);
                }
            });
        }


        function addCardListener() {
            document.getElementById("mainmenu-inthenews-container-recipes-primary").onclick = function() {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + document.getElementById("mainmenu-inthenews-container-recipes-primary-id-1").value;
            };

            document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-1").onclick = function() {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-id-1").value;
            };

            document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-2").onclick = function() {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + document.getElementById("mainmenu-inthenews-container-recipes-secondary-recipe-id-2").value;
            };

            document.getElementById("mainmenu-recipeoftheday-container-recipe-1").onclick = function() {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + document.getElementById("mainmenu-recipeoftheday-container-recipe-id-1").value;
            };

            document.getElementById("mainmenu-recipeoftheday-container-recipe-2").onclick = function() {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + document.getElementById("mainmenu-recipeoftheday-container-recipe-id-2").value;
            };

            document.getElementById("mainmenu-recipeoftheday-container-recipe-3").onclick = function() {
                window.location.href = "/src/Web/displayRecipe.php?recipeId=" + document.getElementById("mainmenu-recipeoftheday-container-recipe-id-3").value;
            };

        }
    </script>