<?php

use PHPUnit\Framework\TestCase;

require_once 'DAO.php';
require_once 'config.php';

require_once('./src/Classes/ingredient.php');

class IngredientTest extends TestCase
{
    public function testGetId(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);

        // Assert that the getId method returns the correct id
        $this->assertEquals(1, $ingredient->getId());
    }

    public function testGetName(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);

        // Assert that the getName method returns the correct name
        $this->assertEquals('Ingredient 1', $ingredient->getName());
    }

    public function testGetPrice(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);

        // Assert that the getPrice method returns the correct price
        $this->assertEquals(10.99, $ingredient->getPrice());
    }

    public function testGetImage(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);

        // Assert that the getImage method returns the correct image
        $this->assertEquals('image.jpg', $ingredient->getImage());
    }

    public function testGetQuantity(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);

        // Assert that the getQuantity method returns the correct quantity
        $this->assertEquals(5, $ingredient->getQuantity());
    }

    public function testSetId(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);
        $ingredient->setId(2);

        // Assert that the setId method sets the correct id
        $this->assertEquals(2, $ingredient->getId());
    }

    public function testSetName(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);
        $ingredient->setName('Ingredient 2');

        // Assert that the setName method sets the correct name
        $this->assertEquals('Ingredient 2', $ingredient->getName());
    }

    public function testSetPrice(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);
        $ingredient->setPrice(9.99);

        // Assert that the setPrice method sets the correct price
        $this->assertEquals(9.99, $ingredient->getPrice());
    }

    public function testSetImage(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);
        $ingredient->setImage('new_image.jpg');

        // Assert that the setImage method sets the correct image
        $this->assertEquals('new_image.jpg', $ingredient->getImage());
    }

    public function testSetQuantity(): void
    {
        $ingredient = new Ingredient(1, 'Ingredient 1', 10.99, 'image.jpg', 5);
        $ingredient->setQuantity(10);

        // Assert that the setQuantity method sets the correct quantity
        $this->assertEquals(10, $ingredient->getQuantity());
    }
}
