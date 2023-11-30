<DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/MainMenu.css">
</head>

<?php
    require_once __DIR__ . '/../Web/Header.php';
?>

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
                <div class="mainmenu-inthenews-container-recipes-primary">
                    <div class="mainmenu-inthenews-container-recipes-primary-recipe">
                        <h3>Tarte au citron meringuée Principal</h3>
                    </div>
                </div>
                <!-- OTHER RECIPES -->
                <div class="mainmenu-inthenews-container-recipes-secondary">
                    <div class="mainmenu-inthenews-container-recipes-secondary-recipe">
                        <h3>Tarte au citron meringuée Secondaire 1</h3>
                    </div>
                    <div class="mainmenu-inthenews-container-recipes-secondary-recipe">
                        <h3>Tarte au citron meringuée Secondaire 2</h3>
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
                <div class="mainmenu-recipeoftheday-container-recipe">
                    <h3>Tarte au citron meringuée - 1</h3>
                </div>
            </div>
            <div class="mainmenu-recipeoftheday-container-recipe">
                <!-- RECIPE -->
                <div class="mainmenu-recipeoftheday-container-recipe">
                    <h3>Tarte au citron meringuée - 2</h3>
                </div>
            </div>
            <div class="mainmenu-recipeoftheday-container-recipe">
                <!-- RECIPE -->
                <div class="mainmenu-recipeoftheday-container-recipe">
                    <h3>Tarte au citron meringuée - 3</h3>
                </div>
            </div>            
        </div>
    </div>
</div>

