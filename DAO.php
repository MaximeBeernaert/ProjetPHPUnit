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
