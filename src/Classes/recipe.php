<?php

// This class is used to create a recipe

class Recipe
{
    private $id;
    private $name;
    private $difficulty;
    private $description;
    private $time;
    private $image;
    private $idCategory;

    public function __construct($id, $name, $difficulty, $description, $time, $idCategory)
    {
        $this->id = $id;
        $this->name = $name;
        $this->difficulty = $difficulty;
        $this->description = $description;
        $this->time = $time;
        $this->idCategory = $idCategory;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName() 
    {
        return $this->name;
    }

    public function getDifficulty()
    {
        return $this->difficulty;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getTime()
    {
        return $this->time;
    }

    public function getImage() 
    {
        return $this->image;
    }

    public function getIdCategory()
    {
        return $this->idCategory;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function setName($name) 
    {
        $this->name = $name;
    }

    public function setDifficulty($difficulty) 
    {
        $this->difficulty = $difficulty;
    }

    public function setDescription($description) 
    {
        $this->description = $description;
    }

    public function setTime($time) 
    {
        $this->time = $time;
    }

    public function setImage($image) 
    {
        $this->image = $image;
    }

    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
    }
}

?>