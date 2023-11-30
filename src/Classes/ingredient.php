<?php

// This class is used to create an ingredient

class Ingredient
{
    private $id;
    private $name;
    private $price;
    private $image;
    private $quantity;

    public function __construct($id, $name, $price, $image, $quantity)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->image = $image;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
