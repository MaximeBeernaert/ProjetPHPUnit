<?php

//Include the class to test
require_once('./DAO.php');

//Include the class to test
require_once('./src/Classes/assocRecIngr.php');
require_once('./src/Classes/category.php');
require_once('./src/Classes/ingredient.php');
require_once('./src/Classes/recipe.php');
require_once('./src/Classes/step.php');

use PHPUnit\Framework\TestCase;

class DAOTest extends TestCase
{
    private $pdo;
    private $userDAO;

    // DAOs properties to test
    private $assocRecIngr;
    private $categories;
    private $ingredients;
    private $recipes;
    private $steps;

    protected function setUp(): void
    {
        $this->configureDatabase();
        $this->assocRecIngr = new AssocrecingrDAO($this->pdo);
        $this->categories = new CategoryDAO($this->pdo);
        $this->ingredients = new IngredientDAO($this->pdo);
        $this->recipes = new RecipeDAO($this->pdo);
        $this->steps = new StepsDAO($this->pdo);
    }

    private function configureDatabase(): void
    {
        $this->pdo = new PDO('sqlite::memory:');

        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->pdo->exec('
            CREATE TABLE assocrecingr (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                idRecipe INTEGER,
                idIngredient INTEGER,
                quantité TEXT
            );
            CREATE TABLE categories (
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              name TEXT,
              image TEXT
            );
            CREATE TABLE ingredients (
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              name TEXT,
              price FLOAT,
              image TEXT,
              quantity TEXT
            );
            CREATE TABLE recipes (
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              name TEXT,
              difficulty TEXT,
              description TEXT,
              time INTEGER,
              image TEXT,
              idCategory INTEGER
            );
            CREATE TABLE steps (
              id INTEGER PRIMARY KEY AUTOINCREMENT,
              idRecipe INTEGER,
              number INTEGER,
              description TEXT
            )');
    }

    //
    //GET ALL TESTS
    //

    public function testGetAllAssocRecIngr(): void
    {
        //Create a new assocrecingr
        $assocrecingr = new Assocrecingr(1, 1, 1, "1kg");

        //Push the assocrecingr to the database
        $this->assocRecIngr->create($assocrecingr);

        //Try to read assocrecingr by id
        $result = $this->assocRecIngr->read($assocrecingr->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM assocrecingr WHERE id = :id');
        $stmt->execute(['id' => $assocrecingr->getId()]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Assertion
        $this->assertEquals($assocrecingr->getId(), $result['id']);
        $this->assertEquals($assocrecingr->getIdRec(), $result['idRecipe']);
        $this->assertEquals($assocrecingr->getIdIngr(), $result['idIngredient']);
        $this->assertEquals($assocrecingr->getQuantity(), $result['quantité']);
    }

    public function testGetAllCategories(): void
    {
        //Creating a new category
        $category = new Category(1, "name", "image");

        //Push the category to the database
        $this->categories->create($category);

        //Try to read category by id
        $result = $this->categories->read($category->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM categories WHERE id = :id');
        $stmt->execute(['id' => $category->getId()]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Assertion
        $this->assertEquals($category->getId(), $result['id']);
        $this->assertEquals($category->getName(), $result['name']);
        $this->assertEquals($category->getImage(), $result['image']);
    }

    public function testGetAllIngredients(): void
    {
        $ingredient = new Ingredient(1, "name", 1.0, "image", "1kg");

        $this->ingredients->create($ingredient);

        $result = $this->ingredients->read($ingredient->getId());

        $this->assertEquals($ingredient->getId(), $result['id']);
        $this->assertEquals($ingredient->getName(), $result['name']);
        $this->assertEquals($ingredient->getPrice(), $result['price']);
        $this->assertEquals($ingredient->getImage(), $result['image']);
        $this->assertEquals($ingredient->getQuantity(), $result['quantity']);
    }


    public function testGetAllRecipes(): void
    {
        //Create a new recipe
        $recipe = new Recipe(1, "platName", "difficulty", "description", "01:00:00", "url", 1);

        //Push the recipe to the database
        $this->recipes->create($recipe);

        //Try to read recipe by id
        $result = $this->recipes->read($recipe->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM recipes WHERE id = :id');
        $stmt->execute(['id' => $recipe->getId()]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Assertion
        $this->assertEquals($recipe->getId(), $result['id']);
        $this->assertEquals($recipe->getName(), $result['name']);
        $this->assertEquals($recipe->getDifficulty(), $result['difficulty']);
        $this->assertEquals($recipe->getDescription(), $result['description']);
        $this->assertEquals($recipe->getTime(), $result['time']);
        $this->assertEquals($recipe->getImage(), $result['image']);
        $this->assertEquals($recipe->getIdCategory(), $result['idCategory']);
    }

    public function testGetAllSteps(): void
    {
        //Create a new step
        $step = new Step(1, 1, 1, "test");

        //Push the step to the database
        $this->steps->create($step);

        //Try to read step by id
        $result = $this->steps->read($step->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM steps WHERE id = :id');
        $stmt->execute(['id' => $step->getId()]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        //Assertion
        $this->assertEquals($step->getId(), $result['id']);
        $this->assertEquals($step->getIdRecipe(), $result['idRecipe']);
        $this->assertEquals($step->getNumber(), $result['number']);
    }

    //
    //CREATE TESTS
    //

    public function testCreateAssocRecIngr(): void
    {
        //Create a new assocrecingr
        $newAssocRecIngr = new Assocrecingr(1, 1, 1, "1kg");

        //Push the assocrecingr to the database
        $this->assocRecIngr->create($newAssocRecIngr);

        //Try to read assocrecingr by id
        $result = $this->assocRecIngr->read($newAssocRecIngr->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM assocrecingr WHERE id = :id');
        $stmt->execute(['id' => $newAssocRecIngr->getId()]);

        //Assertion
        $this->assertEquals($newAssocRecIngr->getId(), $result['id']);
        $this->assertEquals($newAssocRecIngr->getIdRec(), $result['idRecipe']);
        $this->assertEquals($newAssocRecIngr->getIdIngr(), $result['idIngredient']);
        $this->assertEquals($newAssocRecIngr->getQuantity(), $result['quantité']);
    }

    public function testCreateCategories(): void
    {
        //Create a new category
        $newCategory = new Category(1, "name", "image");

        //Push the category to the database
        $this->categories->create($newCategory);

        //Try to read category by id
        $result = $this->categories->read($newCategory->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM categories WHERE id = :id');
        $stmt->execute(['id' => $newCategory->getId()]);

        //Assertion
        $this->assertEquals($newCategory->getId(), $result['id']);
        $this->assertEquals($newCategory->getName(), $result['name']);
        $this->assertEquals($newCategory->getImage(), $result['image']);
    }

    public function testCreateIngredients(): void
    {
        //Create a new ingredient
        $newIngredient = new Ingredient(1, "name", 1.0, "image", "1kg");

        //Push the ingredient to the database
        $this->ingredients->create($newIngredient);

        //Try to read ingredient by id
        $result = $this->ingredients->read($newIngredient->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM ingredients WHERE id = :id');

        //Assertion
        $this->assertEquals($newIngredient->getId(), $result['id']);
        $this->assertEquals($newIngredient->getName(), $result['name']);
        $this->assertEquals($newIngredient->getPrice(), $result['price']);
        $this->assertEquals($newIngredient->getImage(), $result['image']);
        $this->assertEquals($newIngredient->getQuantity(), $result['quantity']);
    }

    public function testCreateRecipes(): void
    {
        //Create a new recipe
        $newRecipe = new Recipe(1, "platName", "difficulty", "description", "01:00:00", "url", 1);

        //Push the recipe to the database
        $this->recipes->create($newRecipe);

        //Try to read recipe by id
        $result = $this->recipes->read($newRecipe->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM recipes WHERE id = :id');
        $stmt->execute(['id' => $newRecipe->getId()]);

        //Assertion
        $this->assertEquals($newRecipe->getId(), $result['id']);
        $this->assertEquals($newRecipe->getName(), $result['name']);
        $this->assertEquals($newRecipe->getDifficulty(), $result['difficulty']);
        $this->assertEquals($newRecipe->getDescription(), $result['description']);
        $this->assertEquals($newRecipe->getTime(), $result['time']);
        $this->assertEquals($newRecipe->getImage(), $result['image']);
        $this->assertEquals($newRecipe->getIdCategory(), $result['idCategory']);
    }

    public function testCreateSteps(): void
    {
        //Create a new step
        $newStep = new Step(1, 1, 1, "test");

        //Push the step to the database
        $this->steps->create($newStep);

        //Try to read step by id
        $result = $this->steps->read($newStep->getId());

        //Check if the read worked
        $stmt = $this->pdo->prepare('SELECT * FROM steps WHERE id = :id');
        $stmt->execute(['id' => $newStep->getId()]);

        //Assertion
        $this->assertEquals($newStep->getId(), $result['id']);
        $this->assertEquals($newStep->getIdRecipe(), $result['idRecipe']);
        $this->assertEquals($newStep->getNumber(), $result['number']);
        $this->assertEquals($newStep->getDescription(), $result['description']);
    }

    //
    //DELETE TESTS
    //

    // public function testDeleteAssocRecIngr(Assocrecingr $assocrecingr): void
    // {
    //     // put the exceptions here

    //     $result = $this->assocRecIngr->delete($assocrecingr);

    //     $this->assertNull($this->assocRecIngr->read($assocrecingr->getId()));
    // }

    // public function testDeleteCategories(Category $category): void
    // {
    //     // put the exceptions here

    //     $result = $this->categories->delete($category);

    //     $this->assertNull($this->categories->read($category->getId()));
    // }

    // public function testDeleteIngredients(Ingredient $ingredient): void
    // {
    //     // put the exceptions here

    //     $this->assertNull($this->ingredients->read($ingredient->getId()));
    // }

    // public function testDeleteRecipes(Recipe $recipe): void
    // {
    //     // put the exceptions here

    //     $result = $this->recipes->delete($recipe);

    //     $this->assertNull($this->recipes->read($recipe->getId()));
    // }

    // public function testDeleteSteps(Step $step): void
    // {
    //     // put the exceptions here

    //     $result = $this->steps->delete($step);

    //     $this->assertNull($this->steps->read($step->getId()));
    // }

    //
    //UPDATE TESTS
    //

    public function testUpdateAssocRecIngr(): void
    {

        $assocrecingr = new Assocrecingr(1, 1, 1, "1kg");

        $this->assocRecIngr->create($assocrecingr);
        $assocrecingr->setQuantity("2kg");
        $this->assocRecIngr->update($assocrecingr);
        $result = $this->assocRecIngr->read($assocrecingr->getId());

        $this->assertEquals($assocrecingr->getId(), $result['id']);
        $this->assertEquals($assocrecingr->getIdRec(), $result['idRecipe']);
        $this->assertEquals($assocrecingr->getIdIngr(), $result['idIngredient']);
    }

    public function testUpdateCategories(): void
    {
        $category = new Category(1, "test", "test");

        $this->categories->create($category);

        $category->setName("test2");

        $this->categories->update($category);

        $result = $this->categories->read($category->getId());

        $this->assertEquals($category->getId(), $result['id']);
        $this->assertEquals($category->getName(), $result['name']);
    }

    public function testUpdateIngredients(): void
    {
        // Create a new ingredient
        $ingredient = new Ingredient(1, "name", 1.0, "image", "1kg");

        // Add the ingredient to the database
        $this->ingredients->create($ingredient);

        // Get the ingredient from the database
        $retrievedIngredient = $this->ingredients->read($ingredient->getId());

        // Create an Ingredient instance with retrieved data
        $ingredientToUpdate = new Ingredient(
            $retrievedIngredient['id'],
            $retrievedIngredient['name'],
            $retrievedIngredient['price'],
            $retrievedIngredient['image'],
            $retrievedIngredient['quantity']
        );

        // Update the ingredient
        $ingredientToUpdate->setName("name2");
        $this->ingredients->update($ingredientToUpdate);

        // Get the updated ingredient from the database
        $updatedIngredient = $this->ingredients->read($ingredientToUpdate->getId());

        // Tests the updated ingredient
        $this->assertEquals($ingredientToUpdate->getId(), $updatedIngredient['id']);
        $this->assertEquals($ingredientToUpdate->getName(), $updatedIngredient['name']);
        $this->assertEquals($ingredientToUpdate->getPrice(), $updatedIngredient['price']);
        $this->assertEquals($ingredientToUpdate->getImage(), $updatedIngredient['image']);
        $this->assertEquals($ingredientToUpdate->getQuantity(), $updatedIngredient['quantity']);
    }



    public function testUpdateRecipes(): void
    {
        $recipe = new Recipe(1, "platName", "difficulty", "description", "01:00:00", "url", 1);

        $this->recipes->create($recipe);

        $recipe->setName("platName2");
        $this->recipes->update($recipe);

        $result = $this->recipes->read($recipe->getId());

        $this->assertEquals($recipe->getId(), $result['id']);
        $this->assertEquals($recipe->getName(), $result['name']);
        $this->assertEquals($recipe->getDifficulty(), $result['difficulty']);
        $this->assertEquals($recipe->getDescription(), $result['description']);
        $this->assertEquals($recipe->getTime(), $result['time']);
        $this->assertEquals($recipe->getImage(), $result['image']);
        $this->assertEquals($recipe->getIdCategory(), $result['idCategory']);
    }

    public function testUpdateSteps(): void
    {
        $step = new Step(1, 1, 1, "test");

        $this->steps->create($step);

        $step->setDescription("test2");
        $this->steps->update($step);

        $result = $this->steps->read($step->getId());

        $this->assertEquals($step->getId(), $result['id']);
        $this->assertEquals($step->getIdRecipe(), $result['idRecipe']);
        $this->assertEquals($step->getNumber(), $result['number']);
        $this->assertEquals($step->getDescription(), $result['description']);
    }
}
