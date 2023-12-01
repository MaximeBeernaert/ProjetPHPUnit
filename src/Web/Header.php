<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/Header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Style/SearchBar.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<div class="header">
    <!-- TOP PART OF HEADER -->
    <div class="header-main">
        <!-- CSS LIST OF CATEGORIES -->
        <div class="header-main-left">
            <div id="header-main-categorylist" class="header-main-categorylist" onclick="showCategories()">
                <div class="header-main-categorylist-text">Categories</div>
            </div>
            <!-- LOGO (return to main menu) -->
            <div class="header-main-logo">
                <h3>Logo</h3>
            </div>
        </div>

        <!-- SEARCHBAR BUTTON -->
        <div class="search-container">
            <!-- Search Bar -->
            <div class="wrap">
                <div class="search">
                    <input type="text" class="searchTerm" placeholder="Rechercher une recette, un ingrédient ou une catégories..." id="searchInput">
                    <button type="submit" class="searchButton" onclick="searchTerms(document.getElementById('searchInput').value, this)">
                        <i class="fa fa-search"></i>
                        </form>
                </div>
            </div>
        </div>

        <!-- LOGIN -->
        <div class="header-main-login">
            <h3>Connexion</h3>
        </div>
    </div>

    <!-- BOTTOM PART OF HEADER -->
    <div class="header-secondary">
        <div class="header-secondary-container">
            <div class="header-secondary-container-news">
                <h3>Actus</h3>

            </div>
            <div class="header-secondary-container-fastrecipe">
                <h3>Recettes très très rapides</h3>

            </div>
            <div class="header-secondary-container-bestrecipes">
                <h3>Meilleures notes</h3>

            </div>
            <div class="header-secondary-container-seerecipes">
                <h3>Gérer les recettes</h3>
            
            </div>
        </div>
    </div>
</div>


<script>   



$(document).ready(function() {
    document.addEventListener("click", function (e) {
        var c = document.getElementById('categories-result-container');
        if(c) { c.remove();};
    });
});

// Listener to search terms, send user to search page
function searchTerms($terms, e) {
    if($terms.length >= 0) {
        console.log("/src/Web/Search.php?searchTerm=" + $terms);
        window.location.href = "/src/Web/Search.php?searchTerm=" + $terms; 

    }else{
        console.log("No terms");
    }
}

// show a list of categories to be forwarded to
function showCategories(){
    var categories='categories';
    $.ajax({
        url: '../Back/Header.php',
        method: 'POST',
        dataType: 'json',
        data: {
            categories
        },
        async:      true,
        success: function(data) {
            console.log(data.categories);

            const listContainer = document.createElement("div");
            listContainer.classList.add("categories-result-container");
            listContainer.setAttribute("id", "categories-result-container");

            const list = document.createElement("div");
            list.classList.add("categories-result-container-list");

            data.categories.forEach(category => {
                const listItem = document.createElement("div");
                listItem.classList.add("categories-result-container-list-item");
                listItem.setAttribute("onclick", "window.location.href = '/src/Web/Category.php?category=" + category.name + "';");
                listItem.innerHTML = category.name;
                list.appendChild(listItem);
            });

            listContainer.appendChild(list);
            document.getElementById("header-main-categorylist").appendChild(listContainer);

        }
    });


}


</script>