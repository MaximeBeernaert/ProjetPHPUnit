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
        <div class="wrap">
            <div class="search">
                <input type="text" class="searchTerm" placeholder="Rechercher une recette, un ingrédient ou une catégories...">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
</body>

</html>