<?php

require_once('config.php');

// DAO = Data Access Object


//CRUD for category table
class CategoryDAO
{
    private $bd;

    public function __construct($bd)
    {
        $this->bd = $bd;
    }

    //Create a new category
    public function create(Category $category)
    {
        try {
            $name = $category->getName();

            $sql = "INSERT INTO category (name) VALUES (:name)";
            $stmt = $this->bd->prepare($sql);

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
            $stmt = $this->bd->prepare($sql);

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
            $stmt = $this->bd->prepare($sql);

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
            $stmt = $this->bd->prepare($sql);

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
    private $bd;

    public function __construct($bd)
    {
        $this->bd = $bd;
    }
}

//CRUD for recipes table
class RecipeDAO
{
    private $bd;

    public function __construct($bd)
    {
        $this->bd = $bd;
    }
}

//CRUD for step of recipe table
class StepsDAO
{
    private $bd;

    public function __construct($bd)
    {
        $this->bd = $bd;
    }
}

//CRUD for association recipe-ingredient table
class AssocrecingrDAO
{
    private $bd;

    public function __construct($bd)
    {
        $this->bd = $bd;
    }
}
