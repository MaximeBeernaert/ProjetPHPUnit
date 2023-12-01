<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une recette</title>
    <link rel="stylesheet" href="../Style/AddRecipe.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/habibmhamadi/multi-select-tag@2.0.1/dist/css/multi-select-tag.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<?php

//Inclure php 
require_once("../../AddRecipeBack.php");

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

            <!-- Display ingredients from DB -->
            <label for="ingredients">Liste des ingrédients nécessaires :</label>
            <select id="ingredients" name="ingredients[]" multiple required>
                <script>
                    // Appel AJAX pour obtenir les données des ingrédients
                    function getIngredients() {
                        let action = 'getIngredients';
                        $.ajax({
                            url: '../../AddRecipeBack.php',
                            method: 'POST',
                            dataType: 'json',
                            data: {
                                action
                            },
                            async: true,
                            success: function(data) {
                                console.log(data);
                                addOptionsToSelect(data.ingredients); // Utiliser data.ingredients pour créer les options
                            },
                            error: function(xhr, textStatus, errorThrown) {
                                console.log('La requête AJAX a échoué.');
                                console.log(xhr);
                                console.log(textStatus);
                                console.log(errorThrown);
                            }
                        });
                    }

                    // Fonction pour ajouter des options à l'élément select
                    function addOptionsToSelect(ingredients) {
                        let select = $('#ingredients');

                        // Parcours des données renvoyées par l'AJAX pour créer et ajouter des options
                        ingredients.forEach(function(ingredient) {
                            let newOption = $('<option>', {
                                value: ingredient.id,
                                text: ingredient.name
                            });
                            select.append(newOption);
                        });
                    }

                    // Appel de la fonction pour récupérer les données des ingrédients lors du chargement de la page
                    $(document).ready(function() {
                        getIngredients();
                    });
                </script>
            </select>

            <script src="../../multi-select-tag.js"></script>

            <script>
                new MultiSelectTag('ingredients') // id of the select tag
            </script>

            <!-- Display chossen ingredients for quantity chose -->
            <br>
            <label for="quantite">Entrez les quantités pour chaque ingrédient :</label>
            <?php
            // Retrieve the selected ingredients in the form when user make a modification
            foreach ($selectedIngredientsObject as $ingredient) { ?>
                <div>
                    <p>Nom: <?php echo $ingredient->getName(); ?></p>
                    <label for="quantity_<?php echo $ingredient->getId(); ?>">Quantité:</label>
                    <input type="number" id="quantity_<?php echo $ingredient->getId(); ?>" name="quantities[]" value="0">
                    <input type="hidden" name="ingredient_ids[]" value="<?php echo $ingredient->getId(); ?>">
                </div>
                <hr>
            <?php } ?>


            <!-- Step -->
            <div id="etapes">
                <!-- Ici seront ajoutés les champs d'input d'étapes de préparation -->
            </div>
            <button id="ajouterEtape">Ajouter une étape</button>



            <input type="submit" value="Ajouter la recette">
        </form>
        <div class="confirmation-message <?php echo $confirmationClass; ?> <?php echo !empty($confirmationMessage) ? 'show' : ''; ?>">
            <?php echo $confirmationMessage; ?>
        </div>
    </div>
</body>

</html>

<script>
    // Display confirmation message
    const confirmationMessage = document.querySelector('.confirmation-message');
    if (confirmationMessage) {
        if (confirmationMessage.classList.contains('show')) {
            setTimeout(() => {
                confirmationMessage.classList.remove('show');
                confirmationMessage.classList.add('hide');
                // Animation
                setTimeout(() => {
                    confirmationMessage.style.display = 'none';
                }, 500);
            }, 5000);
        }
    }

    //Add new step
    let compteurEtapes = 1;
    const maxEtapes = 20;

    document.getElementById('ajouterEtape').addEventListener('click', function() {
        if (compteurEtapes <= maxEtapes) {
            const divEtapes = document.getElementById('etapes');
            const label = document.createElement('label');
            label.for = 'etapePreparation[]';
            label.textContent = 'Étape n°' + compteurEtapes;
            const nouvelInput = document.createElement('input');
            nouvelInput.type = 'text';
            nouvelInput.name = 'etapePreparation[]'; // Utilisez un tableau si vous prévoyez de soumettre les données
            nouvelInput.placeholder = "Précisez l'étape " + compteurEtapes + " de la préparation";
            nouvelInput.required = true;
            divEtapes.appendChild(label);
            divEtapes.appendChild(nouvelInput);

            const boutonSupprimer = document.createElement('button');
            boutonSupprimer.textContent = 'Supprimer';
            boutonSupprimer.type = 'button';
            boutonSupprimer.addEventListener('click', function() {
                if (compteurEtapes > 1) {
                    compteurEtapes--;
                    divEtapes.removeChild(label);
                    divEtapes.removeChild(nouvelInput);
                    divEtapes.removeChild(boutonSupprimer);
                    divEtapes.removeChild(document.createElement('br')); // Supprime également le saut de ligne
                }
            });
            divEtapes.appendChild(boutonSupprimer);
            divEtapes.appendChild(document.createElement('br')); // Ajoute un saut de ligne pour séparer les étapes
            compteurEtapes++;
        } else {
            alert('Vous avez atteint le nombre maximum d\'étapes');
        }
    });
</script>