<?php

//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

//Include class
require_once("../Classes/recipe.php");
require_once("../Classes/ingredient.php");
require_once("../Classes/step.php");
require_once("../Classes/assocRecIngr.php");

//Create DAO connexion
$recipeDAO = new RecipeDAO($db);
$ingredientDAO = new IngredientDAO($db);
$stepsDAO = new StepsDAO($db);
$assocRecIngrDAO = new AssocRecIngrDAO($db);

//Message of form status
$confirmationMessage = "";

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
            $heures = floor($matches[1]); // Partie entière des heures
            $minutes = isset($matches[3]) ? floor($matches[3]) : 0; // Partie entière des minutes si elles existent, sinon 0

            // Convertir les minutes en heures si elles dépassent 60
            $heures += floor($minutes / 60);
            $minutes = $minutes % 60;

            // Formatage du temps au format SQL
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
            $recipe = new Recipe("", "", "", "", "", "", "");

            // Set the values of the recipe object
            $recipe->setName($nomRecette);
            $recipe->setDifficulty($difficulte);
            $recipe->setDescription($description);
            $recipe->setTime($tempsFormatSQL);
            $recipe->setImage($photoRecette);
            $recipe->setIdCategory($categorie);

            // Call the create method from the DAO
            $recipeDAO->create($recipe);

            // Get the id of the recipe that has just been created
            $idRecipe = $recipeDAO->getLastId();

            // Get the values of the selected ingredients
            $ingredients = $_POST['ingredients'];

            $dataCount = count($ingredients);
            $half = $dataCount / 2;

            // Get the values of the quantities of the selected ingredients
            $idsIngredients = array_slice($ingredients, 0, $half); // Get the first half of the array
            $quantities = array_slice($ingredients, $half, $dataCount); // Get the second half of the array

            // Create ingredients object with their quantities
            for ($i = 0; $i < count($idsIngredients); $i++) {
                $ingredientId = $idsIngredients[$i];
                $quantity = $quantities[$i];

                //Convert quantity to string if is a number
                if (is_numeric($quantity)) {
                    $quantity = strval($quantity);
                }

                //Create a new assocRecIngr object
                $assocRecIngr = new AssocRecIngr("", $idRecipe, $ingredientId, $quantity);

                print_r($assocRecIngr);

                //Push the assocRecIngr in DB
                $assocRecIngrDAO->create($assocRecIngr);
            }

            // Get the steps from the form
            $steps = $_POST['etapePreparation'];

            // Create a new step object for each step
            foreach ($steps as $index => $description) {

                $etapePreparation = new Step("", "", "", "");

                $etapePreparation->setIdRecipe($idRecipe);
                $etapePreparation->setNumber($index + 1);
                $etapePreparation->setDescription($description);

                // Push the step in DB
                $stepsDAO->create($etapePreparation);
            }


            // Display a success message
            $confirmationMessage = "La recette a été ajoutée avec succès !";
            $confirmationClass = "success";
        } else {
            // Display an error message if the format of the duration is not valid
            $confirmationMessage = "Le format de la durée de réalisation n'est pas valide";
            $confirmationClass = "error";
        }
    } else {
        // Display an error message if a required field is empty
        $confirmationMessage = "Tous les champs doivent être remplis.";
        $confirmationClass = "error";
    }
}

if (isset($_POST['action'])) {
    $ingredientDAO = new IngredientDAO($db);
    $ingredients = $ingredientDAO->readAll();

    echo json_encode(array('ingredients' => $ingredients));
}
