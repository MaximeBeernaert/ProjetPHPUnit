<DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/Category.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<?php
    require_once __DIR__ . '/../Web/Header.php';
?>

<div class="categorymenu">
    <div class="categorymenu-terms" id="categorymenu-terms">

    </div>
    <div class="categorymenu-results">
        
    </div>
</div>

<script>
    $(document).ready(function() {
        const currentUrl = window.location.href;

        // Get search term from URL
        let params = (new URL(document.location)).searchParams;
        getCategoryRecipes(params.get("category"));
    });

    function getCategoryRecipes(category) {
        let name = category;
        // Do AJAX request when user types in search bar
        $.ajax({
            url: '../Back/Category.php',
            method: 'POST',
            dataType: 'json',
            data: {
                name
            },
            async:      true,
            success: function(data) {            
                // Clear previous results
                // while (document.querySelector(".searchmenu-results").firstChild) {
                //     document.querySelector(".searchmenu-results").firstChild.remove();
                // }
                console.log(data.recipes)
                // Display results from the call as recipes cards
                var recipes = data.recipes;
                recipes.forEach(recipe => {
                    recipeCard(recipe);
                });
            }
        });
    }

    function recipeCard(recipe){       

        const card = document.createElement("div");
        card.classList.add("categorymenu-results-result-container");

        const cardImage = document.createElement("div");
        cardImage.classList.add("categorymenu-results-result-container-image");

        const cardImageImg = document.createElement("img");
        // cardImageImg.src = recipe.image;
        cardImageImg.alt = recipe.name;
        cardImage.classList.add("categorymenu-results-result-container-image-img");


        const cardInfo = document.createElement("div");
        cardInfo.classList.add("categorymenu-results-result-container-title");
        cardInfo.innerHTML = recipe.name;

        cardImage.appendChild(cardImageImg);
        card.appendChild(cardImage);
        card.appendChild(cardInfo);

        document.querySelector(".categorymenu-results").appendChild(card);
    }
</script>