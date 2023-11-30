<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Style/Header.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../Style/SearchBar.css">
</head>

<div class="header">
    <!-- TOP PART OF HEADER -->
    <div class="header-main">
        <!-- CSS LIST OF CATEGORIES -->
        <div class="header-main-left">
            <div class="header-main-categorylist">
                <h3>Categories</h3>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>   

function searchTerms($terms, e) {
    e.preventDefault();
    console.log('hey');
    if($terms.length >= 0) {
        console.log("/src/Web/Search.php?searchTerm=" + $terms);
        window.location.href = "/src/Web/Search.php?searchTerm=" + $terms; 

    }else{
        console.log("No terms");
    }
}
</script>