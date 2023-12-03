<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une recette</title>
    <?php
    define('INCLUDED', true);
    require_once('Header.php');
    require("../Back/AddRecipeBack.php");
    ?>
    <link rel="stylesheet" href="../Style/AddRecipe.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

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
                    // Fonction pour mettre à jour la liste des ingrédients sélectionnés
                    function updateSelectedIngredientsList() {
                        let selectedIngredients = $('#ingredients').val(); // Récupère les valeurs des options sélectionnées
                        const divQuantities = $('#quantities');
                        divQuantities.empty(); // Vide le contenu précédent

                        if (selectedIngredients && selectedIngredients.length > 0) {
                            selectedIngredients.forEach(function(ingredient) {
                                newIngredient();
                            });
                        } else {
                            divQuantities.text('Aucun ingrédient sélectionné');
                        }
                    }

                    // Appel AJAX pour obtenir les données des ingrédients
                    function getIngredients() {
                        let action = 'getIngredients';
                        $.ajax({
                            url: '../Back/AddRecipeBack.php',
                            method: 'POST',
                            dataType: 'json',
                            data: {
                                action
                            },
                            async: true,
                            success: function(data) {
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

                        // Écoute les changements dans la sélection des ingrédients
                        select.on('change', function() {
                            updateSelectedIngredientsList(); // Appelle la fonction pour mettre à jour la liste des ingrédients sélectionnés
                        });
                    }

                    // Appel de la fonction pour récupérer les données des ingrédients lors du chargement de la page
                    $(document).ready(function() {
                        getIngredients(); // Appel initial pour récupérer les ingrédients

                        // Événement de changement pour mettre à jour les quantités lorsque la sélection change
                        $('#ingredients').on('change', function() {
                            updateSelectedIngredientsList();
                        });
                    });
                </script>
            </select>

            <!-- Display quantities -->
            <div id="quantities">
            </div>

            <!-- Step -->
            <div id="etapes">
            </div>

            <!-- Add a new step -->
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

    // Add new ingredient
    function newIngredient() {
        const divIngredients = document.getElementById('quantities');
        divIngredients.innerHTML = ''; // Nettoyer le contenu précédent

        const selectedOptions = $('#ingredients option:selected');

        selectedOptions.each(function() {
            const label = document.createElement('label');
            label.for = $(this).val();
            label.textContent = $(this).text();

            const nouvelInput = document.createElement('input');
            nouvelInput.type = 'text';
            nouvelInput.name = 'ingredients[]'; // Utilisez un tableau si vous prévoyez de soumettre les données
            nouvelInput.placeholder = 'Indiquer la quantité de ' + $(this).text() + ' (unité, ml ou g)';
            nouvelInput.required = true;

            divIngredients.appendChild(label);
            divIngredients.appendChild(nouvelInput);
            divIngredients.appendChild(document.createElement('br')); // Ajoute un saut de ligne pour séparer les étapes
        });
    }
</script>