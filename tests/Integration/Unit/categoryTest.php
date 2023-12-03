<?php

use PHPUnit\Framework\TestCase;

require_once 'DAO.php';
require_once 'config.php';

require_once('./src/Classes/category.php');

class CategoryTest extends TestCase
{
    public function testGetId(): void
    {
        $category = new Category(1, 'Category 1');

        // Assert that the getId method returns the correct id
        $this->assertEquals(1, $category->getId());
    }

    public function testGetName(): void
    {
        $category = new Category(1, 'Category 1');

        // Assert that the getName method returns the correct name
        $this->assertEquals('Category 1', $category->getName());
    }

    public function testGetImage(): void
    {
        $category = new Category(1, 'Category 1');
        $category->setImage('image.jpg');

        // Assert that the getImage method returns the correct image
        $this->assertEquals('image.jpg', $category->getImage());
    }

    public function testSetId(): void
    {
        $category = new Category(1, 'Category 1');
        $category->setId(2);

        // Assert that the setId method sets the correct id
        $this->assertEquals(2, $category->getId());
    }

    public function testSetName(): void
    {
        $category = new Category(1, 'Category 1');
        $category->setName('Category 2');

        // Assert that the setName method sets the correct name
        $this->assertEquals('Category 2', $category->getName());
    }

    public function testSetImage(): void
    {
        $category = new Category(1, 'Category 1');
        $category->setImage('image.jpg');

        // Assert that the setImage method sets the correct image
        $this->assertEquals('image.jpg', $category->getImage());
    }
}
