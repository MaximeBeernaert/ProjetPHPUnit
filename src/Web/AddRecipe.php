<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une recette</title>
    <link rel="stylesheet" href="../Style/AddRecipe.css">
</head>

<?php

//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

//Include class
require_once("../Classes/recipe.php");

//Create DAO connexion
$recipeDAO = new RecipeDAO($db);

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are filled
    if (
        !empty($_POST['nom_recette']) && !empty($_POST['difficulte']) && !empty($_POST['description'])
        && !empty($_POST['temps_realisation']) && !empty($_POST['categorie'])
    ) {
        // Check if the format of the duration is valid
        $tempsRealisation = $_POST['temps_realisation'];

        if (preg_match('/(\d+)(h(\d+)min)?/', $tempsRealisation, $matches)) {
            $heures = intval($matches[1]); // Convert the part corresponding to the hours to an integer
            $minutes = isset($matches[3]) ? intval($matches[3]) : 0; // Convert the part corresponding to the minutes to an integer, or set it to 0 if it doesn't exist

            // Format the duration to be stored in the database
            $tempsFormatSQL = sprintf("%02d:%02d:00", $heures, $minutes);

            //Format for category
            $categorie = $_POST['categorie'];

            switch ($categorie) {
                case "entree":
                    $categorie = 1;
                    break;
                case "plat":
                    $categorie = 2;
                    break;
                case "dessert":
                    $categorie = 3;
                    break;
            }

            // Get the values from the form and store them in variables
            $nomRecette = $_POST['nom_recette'];
            $difficulte = $_POST['difficulte'];
            $description = $_POST['description'];
            $photoRecette = $_POST['photo_recette'];

            // Create a new recipe object
            $recipe = new Recipe("", "", "", "", "", "");

            // Set the values of the recipe object
            $recipe->setName($nomRecette);
            $recipe->setDifficulty($difficulte);
            $recipe->setDescription($description);
            $recipe->setTime($tempsFormatSQL);
            $recipe->setImage($photoRecette);
            $recipe->setIdCategory($categorie);

            // Call the create method from the DAO
            $recipeDAO->create($recipe);

            // Display a success message
            echo "<p>La recette a été ajoutée avec succès !</p>";
        } else {
            // Display an error message if the format of the duration is not valid
            echo "<p>Le format de la durée de réalisation n'est pas valide</p>";
        }
    } else {
        // Display an error message if a required field is empty
        echo "<p>Tous les champs du formulaire doivent être remplis.</p>";
    }
}
?>

<body>

    <?php include 'Header.php' ?>

    <div class="addrecipe-container">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h2>Ajouter une nouvelle recette</h2>
            <label for="nom_recette">Nom de la recette :</label>
            <input type="text" id="nom_recette" name="nom_recette" required>

            <label for="difficulte">Difficulté (de 1 à 5) :</label>
            <input type="number" id="difficulte" name="difficulte" min="1" max="5" required>

            <label for="description">Description :</label>
            <textarea id="description" name="description" required></textarea>

            <label for="temps_realisation">Temps de réalisation :</label>
            <input type="time" id="temps_realisation" name="temps_realisation" required>

            <label for="photo_recette">Illustration (URL) :</label>
            <input type="url" id="photo_recette" name="photo_recette" accept="image/*" required>

            <label for="categorie">Catégorie :</label>
            <select id="categorie" name="categorie" required>
                <option value="">Sélectionnez une catégorie</option>
                <option value="entree">Entrée</option>
                <option value="plat">Plat</option>
                <option value="dessert">Dessert</option>
            </select>

            <input type="submit" value="Ajouter la recette">
        </form>
    </div>
</body>

</html>