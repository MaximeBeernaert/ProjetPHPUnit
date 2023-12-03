<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout d'une recette</title>
    <?php
    define('INCLUDED', true);
    require_once('Header.php');
    require("../Back/AddRecipe.php");
    ?>
    <link rel="stylesheet" href="../Style/AddRecipe.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>

<body>

    <div class="addrecipe-container">
        <form action="../Back/AddRecipe.php" method="post">
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
            <select id="categorie" name="categorie" required placeholder="Sélectionnez une catégorie">

            </select>

            <!-- Display ingredients from DB -->

            <div class="addrecipe-container-ingredients">
                <div class="addrecipe-container-ingredients-list" id="addrecipe-container-ingredients-list">
                    <!-- Will be filled by the button and function -->
                </div>
                <div class="addrecipe-container-ingredients-add-ingredient" onclick="addIngredient()">
                    Ajouter un ingredient
                </div>

            </div>

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

    $(document).ready(function() {
        let categoriesList = "categoriesList";

        $.ajax({
            url: '../Back/AddRecipe.php',
            method: 'POST',
            dataType: 'json',
            data: {
                categoriesList
            },
            async: true,
            success: function(data) {
                var categories = data.categories;
                categories.forEach(category => {
                    const categorie = document.createElement("option");
                    categorie.value = category.id;
                    categorie.innerHTML = category.name;
                    document.getElementById("categorie").appendChild(categorie);
                });
            }
        });
    });

    function addIngredient() {
        const container = document.getElementById("addrecipe-container-ingredients-list");

        const ingredient = document.createElement("div");
        ingredient.classList.add("addrecipe-container-ingredients-list-ingredient");

        const ingredientName = document.createElement("div");
        ingredientName.classList.add("addrecipe-container-ingredients-list-ingredient-name");

        const ingredientNameSelect = document.createElement("select");
        ingredientNameSelect.classList.add("addrecipe-container-ingredients-list-ingredient-name-select");
        ingredientNameSelect.placeholder = "Nom de l'ingrédient";
        ingredientNameSelect.name = "ingredientName[]";

        ingredientNameSelect.onchange = (e) => {
            console.log(e.target.value);
        }

        let ingredients = "ingredients";
        $.ajax({
            url: '../Back/AddRecipe.php',
            method: 'POST',
            dataType: 'json',
            data: {
                ingredients
            },
            async: true,
            success: function(data) {
                var ingredients = data.ingredients;
                ingredients.forEach(ingredient => {
                    const ingredientNameSelectOption = document.createElement("option");
                    ingredientNameSelectOption.value = ingredient.id;
                    ingredientNameSelectOption.innerHTML = ingredient.name;
                    ingredientNameSelect.appendChild(ingredientNameSelectOption);
                });
            }
        });

        ingredientName.appendChild(ingredientNameSelect);

        const ingredientQuantity = document.createElement("div");
        ingredientQuantity.classList.add("addrecipe-container-ingredients-list-ingredient-quantity");

        const ingredientQuantityInput = document.createElement("input");
        ingredientQuantityInput.classList.add("addrecipe-container-ingredients-list-ingredient-quantity-input");
        ingredientQuantityInput.placeholder = "Quantité";
        ingredientQuantityInput.name = "ingredientQuantity[]";

        const ingredientDelete = document.createElement("div");
        ingredientDelete.classList.add("addrecipe-container-ingredients-list-ingredient-delete");
        ingredientDelete.innerHTML = "X";
        ingredientDelete.onclick = (e) => {
            ingredient.remove();
        }

        ingredientQuantity.appendChild(ingredientQuantityInput);

        ingredient.appendChild(ingredientName);
        ingredient.appendChild(ingredientQuantity);

        ingredient.appendChild(ingredientDelete);

        container.appendChild(ingredient);



    }
</script>