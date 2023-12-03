<?php

use PHPUnit\Framework\TestCase;

require_once 'DAO.php';
require_once 'config.php';

require_once('./src/Classes/assocRecIngr.php');

class AssocRecIngrTest extends TestCase
{
    public function testGetId(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);

        // Assert that the getId method returns the correct id
        $this->assertEquals(1, $assocRecIngr->getId());
    }

    public function testGetIdRec(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);

        // Assert that the getIdRec method returns the correct recipe id
        $this->assertEquals(1, $assocRecIngr->getIdRec());
    }

    public function testGetIdIngr(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);

        // Assert that the getIdIngr method returns the correct ingredient id
        $this->assertEquals(1, $assocRecIngr->getIdIngr());
    }

    public function testGetQuantity(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);

        // Assert that the getQuantity method returns the correct quantity
        $this->assertEquals(10, $assocRecIngr->getQuantity());
    }

    public function testSetId(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);
        $assocRecIngr->setId(2);

        // Assert that the setId method sets the correct id
        $this->assertEquals(2, $assocRecIngr->getId());
    }

    public function testSetIdRec(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);
        $assocRecIngr->setIdRec(2);

        // Assert that the setIdRec method sets the correct recipe id
        $this->assertEquals(2, $assocRecIngr->getIdRec());
    }

    public function testSetIdIngr(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);
        $assocRecIngr->setIdIngr(2);

        // Assert that the setIdIngr method sets the correct ingredient id
        $this->assertEquals(2, $assocRecIngr->getIdIngr());
    }

    public function testSetQuantity(): void
    {
        $assocRecIngr = new AssocRecIngr(1, 1, 1, 10);
        $assocRecIngr->setQuantity(20);

        // Assert that the setQuantity method sets the correct quantity
        $this->assertEquals(20, $assocRecIngr->getQuantity());
    }
}
