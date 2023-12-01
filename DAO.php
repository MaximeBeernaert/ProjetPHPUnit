<?php

require_once('config.php');

//CRUD for category table
class CategoryDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //Create a new category
    public function create(Category $category)
    {
        try {
            $name = $category->getName();

            $sql = "INSERT INTO category (name) VALUES (:name)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during category creation: " . $e->getMessage();
        }
    }

    //Read a category
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM category WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during category reading: " . $e->getMessage();
        }
    }

    //Update a category
    public function update(Category $category)
    {
        try {
            $id = $category->getId();
            $name = $category->getName();

            $sql = "UPDATE category SET name = :name WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during category update: " . $e->getMessage();
        }
    }

    //Delete a category
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM category WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during category deletion: " . $e->getMessage();
        }
    }
}

//CRUD for ingredient table
class IngredientDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //Create a new ingredient
    public function create(Ingredient $ingredient)
    {
        try {
            $name = $ingredient->getName();
            $price = $ingredient->getPrice();

            $sql = "INSERT INTO ingredient (name, price) VALUES (:name, :price)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during ingredient creation: " . $e->getMessage();
        }
    }

    //Read an ingredient
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM ingredient WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during ingredient reading: " . $e->getMessage();
        }
    }

    //Update an ingredient
    public function update(Ingredient $ingredient)
    {
        try {
            $id = $ingredient->getId();
            $name = $ingredient->getName();
            $price = $ingredient->getPrice();

            $sql = "UPDATE ingredient SET name = :name, price = :price WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':price', $price);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during ingredient update: " . $e->getMessage();
        }
    }

    //Delete an ingredient
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM ingredient WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during ingredient deletion: " . $e->getMessage();
        }
    }

    //Read ingredients by recipe id
    public function readByRecipeId($id)
    {
        try {
            $sql = "SELECT i.id AS id, i.name AS name, i.price AS price, i.image AS image, a.quantité AS quantity
            FROM assocrecingr a
            JOIN ingredients i ON a.idIngredient = i.id
            WHERE a.idRecipe = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during ingredient reading: " . $e->getMessage();
        }
    }
}

//CRUD for recipes table
class RecipeDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //Create a new recipe
    public function create(Recipe $recipe)
    {
        try {
            $name = $recipe->getName();
            $difficulty = $recipe->getDifficulty();
            $description = $recipe->getDescription();
            $time = $recipe->getTime();
            $idCategory = $recipe->getIdCategory();

            $sql = "INSERT INTO recipes (name, difficulty, description, time, idCategory) VALUES (:name, :difficulty, :description, :time, :idCategory)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':difficulty', $difficulty);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':time', $time);
            $stmt->bindParam(':idCategory', $idCategory);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during recipe creation: " . $e->getMessage();
        }
    }

    //Read a recipe
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM recipes WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during recipe reading: " . $e->getMessage();
        }
    }

    //Update a recipe
    public function update(Recipe $recipe)
    {
        try {
            $id = $recipe->getId();
            $name = $recipe->getName();
            $difficulty = $recipe->getDifficulty();
            $description = $recipe->getDescription();
            $time = $recipe->getTime();
            $idCategory = $recipe->getIdCategory();

            $sql = "UPDATE recipes SET name = :name, difficulty = :difficulty, description = :description, time = :time, idCategory = :idCategory WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':difficulty', $difficulty);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':time', $time);
            $stmt->bindParam(':idCategory', $idCategory);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during recipe update: " . $e->getMessage();
        }
    }

    //Delete a recipe
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM recipes WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during recipe deletion: " . $e->getMessage();
        }
    }

    //Search recipes by name, ingredient or category
    public function search($searchTerm)
    {
        try {
            $sql = "SELECT r.id AS id, r.name AS name, r.difficulty AS difficulty, r.description AS description, r.time AS time, r.idCategory AS idCategory, c.name AS categoryName
            FROM recipes r
            JOIN categories c ON r.idCategory = c.id
            WHERE r.name LIKE :term
            OR r.id IN (SELECT idRecipe FROM assocrecingr WHERE idIngredient IN (SELECT id FROM ingredients WHERE name LIKE :term ))
            OR r.idCategory IN (SELECT id FROM categories WHERE name LIKE :term )";
            $stmt = $this->db->prepare($sql);

            $searchTerm = "%" . $searchTerm . "%";
            $stmt->bindParam(':term', $searchTerm);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (Exception $e) {
            echo "Error during recipe reading: " . $e->getMessage();
        }
    }

    public function getRecipeById($id)
    {
        try {
            $sql = "SELECT r.id AS id, r.name AS name, r.difficulty AS difficulty, r.description AS description, r.time AS time, r.idCategory AS idCategory, c.name AS categoryName, r.image AS image
            FROM recipes r
            JOIN categories c ON r.idCategory = c.id
            WHERE r.id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;

        } catch (Exception $e) {
            echo "Error during recipe reading: " . $e->getMessage();
        }
    }
}

//CRUD for step of recipe table
class StepsDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //Create a new step
    public function create(Step $step)
    {
        try {
            $idRecipe = $step->getIdRecipe();
            $number = $step->getNumber();
            $description = $step->getDescription();

            $sql = "INSERT INTO steps (idRecipe, number, description) VALUES (:idRecipe, :number, :description)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':idRecipe', $idRecipe);
            $stmt->bindParam(':number', $number);
            $stmt->bindParam(':description', $description);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during step creation: " . $e->getMessage();
        }
    }

    //Read a step
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM steps WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during step reading: " . $e->getMessage();
        }
    }

    //Update a step
    public function update(Step $step)
    {
        try {
            $id = $step->getId();
            $idRecipe = $step->getIdRecipe();
            $number = $step->getNumber();
            $description = $step->getDescription();

            $sql = "UPDATE steps SET idRecipe = :idRecipe, number = :number, description = :description WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':idRecipe', $idRecipe);
            $stmt->bindParam(':number', $number);
            $stmt->bindParam(':description', $description);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during step update: " . $e->getMessage();
        }
    }

    //Delete a step
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM steps WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during step deletion: " . $e->getMessage();
        }
    }

    //Read steps by recipe id
    public function readByRecipeId($id)
    {
        try {
            $sql = "SELECT * FROM steps WHERE idRecipe = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during step reading: " . $e->getMessage();
        }
    }
}

//CRUD for association recipe-ingredient table
class AssocrecingrDAO
{
    private $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    //Create a new association
    public function create(Assocrecingr $assocrecingr)
    {
        try {
            $idRecipe = $assocrecingr->getIdRec();
            $idIngredient = $assocrecingr->getIdIngr();

            $sql = "INSERT INTO assocrecingr (idRecipe, idIngredient) VALUES (:idRecipe, :idIngredient)";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':idRecipe', $idRecipe);
            $stmt->bindParam(':idIngredient', $idIngredient);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during association creation: " . $e->getMessage();
        }
    }

    //Read an association
    public function read($id)
    {
        try {
            $sql = "SELECT * FROM assocrecingr WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            return $result;
        } catch (Exception $e) {
            echo "Error during association reading: " . $e->getMessage();
        }
    }

    //Update an association
    public function update(Assocrecingr $assocrecingr)
    {
        try {
            $id = $assocrecingr->getId();
            $idRecipe = $assocrecingr->getIdRec();
            $idIngredient = $assocrecingr->getIdIngr();

            $sql = "UPDATE assocrecingr SET idRecipe = :idRecipe, idIngredient = :idIngredient WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':idRecipe', $idRecipe);
            $stmt->bindParam(':idIngredient', $idIngredient);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during association update: " . $e->getMessage();
        }
    }

    //Delete an association
    public function delete($id)
    {
        try {
            $sql = "DELETE FROM assocrecingr WHERE id = :id";
            $stmt = $this->db->prepare($sql);

            $stmt->bindParam(':id', $id);
            $stmt->execute();

            return true;
        } catch (Exception $e) {
            echo "Error during association deletion: " . $e->getMessage();
        }
    }
}
