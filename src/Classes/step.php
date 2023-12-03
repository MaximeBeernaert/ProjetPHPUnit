<?php

// This class aims to create a step for a recipe

class Step
{
    private $id;
    private $idRecipe;
    private $number;
    private $description;

    public function __construct($id, $idRecipe, $number, $description)
    {
        $this->id = $id;
        $this->idRecipe = $idRecipe;
        $this->number = $number;
        $this->description = $description;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdRecipe()
    {
        return $this->idRecipe;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdRecipe($idRecipe)
    {
        $this->idRecipe = $idRecipe;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}
