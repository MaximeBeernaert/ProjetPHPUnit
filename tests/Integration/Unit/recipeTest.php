<?php

use PHPUnit\Framework\TestCase;

require_once 'DAO.php';
require_once 'config.php';

require_once('./src/Classes/recipe.php');

class RecipeTest extends TestCase
{
    public function testGetId(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getId method returns the correct id
        $this->assertEquals(1, $recipe->getId());
    }

    public function testGetName(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getName method returns the correct name
        $this->assertEquals('Recipe 1', $recipe->getName());
    }

    public function testGetDifficulty(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getDifficulty method returns the correct difficulty
        $this->assertEquals('Easy', $recipe->getDifficulty());
    }

    public function testGetDescription(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getDescription method returns the correct description
        $this->assertEquals('Description 1', $recipe->getDescription());
    }

    public function testGetTime(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getTime method returns the correct time
        $this->assertEquals(30, $recipe->getTime());
    }

    public function testGetImage(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getImage method returns the correct image
        $this->assertNull($recipe->getImage());
    }

    public function testGetIdCategory(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getIdCategory method returns the correct idCategory
        $this->assertEquals(1, $recipe->getIdCategory());
    }

    public function testGetDate(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');

        // Assert that the getDate method returns the correct date
        $this->assertEquals('2022-01-01', $recipe->getDate());
    }

    public function testSetId(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setId(2);

        // Assert that the setId method sets the correct id
        $this->assertEquals(2, $recipe->getId());
    }

    public function testSetName(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setName('Recipe 2');

        // Assert that the setName method sets the correct name
        $this->assertEquals('Recipe 2', $recipe->getName());
    }

    public function testSetDifficulty(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setDifficulty('Medium');

        // Assert that the setDifficulty method sets the correct difficulty
        $this->assertEquals('Medium', $recipe->getDifficulty());
    }

    public function testSetDescription(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setDescription('New description');

        // Assert that the setDescription method sets the correct description
        $this->assertEquals('New description', $recipe->getDescription());
    }

    public function testSetTime(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setTime(45);

        // Assert that the setTime method sets the correct time
        $this->assertEquals(45, $recipe->getTime());
    }

    public function testSetImage(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setImage('new_image.jpg');

        // Assert that the setImage method sets the correct image
        $this->assertEquals('new_image.jpg', $recipe->getImage());
    }

    public function testSetIdCategory(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setIdCategory(2);

        // Assert that the setIdCategory method sets the correct idCategory
        $this->assertEquals(2, $recipe->getIdCategory());
    }

    public function testSetDate(): void
    {
        $recipe = new Recipe(1, 'Recipe 1', 'Easy', 'Description 1', 30, 1, '2022-01-01');
        $recipe->setDate('2022-02-01');

        // Assert that the setDate method sets the correct date
        $this->assertEquals('2022-02-01', $recipe->getDate());
    }
}
