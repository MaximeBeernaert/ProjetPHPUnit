<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/SearchMenu.css">
</head>

<?php
    require_once __DIR__ . '/../Web/Header.php';
?>


<div class="searchmenu">
    <div class="searchmenu-terms" id="searchmenu-terms">

    </div>
    <div class="searchmenu-results">
        
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const currentUrl = window.location.href;

        // Get search term from URL
        let params = (new URL(document.location)).searchParams;
        if((params.get("searchTerm"))!== undefined){
            let searchTerm = params.get("searchTerm");
            document.getElementById("searchInput").value = searchTerm;
            // Get searched results with AJAX
            searchTerms(searchTerm);
        }
        
        // Listener to search terms
        $('#searchInput').on('input', function() {
            var searchTerm = $(this).val();
            if(searchTerm.length <= 0) {
                return;
            }else{
                history.replaceState('', '', '/src/Web/Search.php?searchTerm='+searchTerm+'');
                searchTerms(searchTerm);
            }
        });
        
    });

    function searchTerms(searchTerm) {
        // Do AJAX request when user types in search bar
        $.ajax({
            url: '../Back/Search.php',
            method: 'POST',
            dataType: 'json',
            data: {
                searchTerm
            },        
            async:      true,
            success: function(data) {
                console.log(data.recipes);
                document.getElementById("searchmenu-terms").innerHTML = searchTerm;
                
                // Clear previous results
                while (document.querySelector(".searchmenu-results").firstChild) {
                    document.querySelector(".searchmenu-results").firstChild.remove();
                }

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
        card.classList.add("searchmenu-results-result-container");

        const cardImage = document.createElement("div");
        cardImage.classList.add("searchmenu-results-result-container-image");

        const cardImageImg = document.createElement("img");
        // cardImageImg.src = recipe.image;
        cardImageImg.alt = recipe.name;
        cardImage.classList.add("searchmenu-results-result-container-image-img");


        const cardInfo = document.createElement("div");
        cardInfo.classList.add("seachmenu-results-result-container-title");
        cardInfo.innerHTML = recipe.name;

        cardImage.appendChild(cardImageImg);
        card.appendChild(cardImage);
        card.appendChild(cardInfo);

        document.querySelector(".searchmenu-results").appendChild(card);
    }
</script>