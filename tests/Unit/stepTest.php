<?php

use PHPUnit\Framework\TestCase;

require_once 'DAO.php';
require_once 'config.php';

require_once('./src/Classes/step.php');

class StepTest extends TestCase
{
    public function testGetId(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');

        // Assert that the getId method returns the correct id
        $this->assertEquals(1, $step->getId());
    }

    public function testGetIdRecipe(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');

        // Assert that the getIdRecipe method returns the correct idRecipe
        $this->assertEquals(1, $step->getIdRecipe());
    }

    public function testGetNumber(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');

        // Assert that the getNumber method returns the correct number
        $this->assertEquals(1, $step->getNumber());
    }

    public function testGetDescription(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');

        // Assert that the getDescription method returns the correct description
        $this->assertEquals('Step 1', $step->getDescription());
    }

    public function testSetId(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');
        $step->setId(2);

        // Assert that the setId method sets the correct id
        $this->assertEquals(2, $step->getId());
    }

    public function testSetIdRecipe(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');
        $step->setIdRecipe(2);

        // Assert that the setIdRecipe method sets the correct idRecipe
        $this->assertEquals(2, $step->getIdRecipe());
    }

    public function testSetNumber(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');
        $step->setNumber(2);

        // Assert that the setNumber method sets the correct number
        $this->assertEquals(2, $step->getNumber());
    }

    public function testSetDescription(): void
    {
        $step = new Step(1, 1, 1, 'Step 1');
        $step->setDescription('Step 2');

        // Assert that the setDescription method sets the correct description
        $this->assertEquals('Step 2', $step->getDescription());
    }
}
