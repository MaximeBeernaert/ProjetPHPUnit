<?php

// This class aims to associate a recipe with an ingredient

class AssocRecIngr
{
    private $id;
    private $idRec;
    private $idIngr;
    private $quantity;

    public function __construct($id, $idRec, $idIngr, $quantity)
    {
        $this->id = $id;
        $this->idRec = $idRec;
        $this->idIngr = $idIngr;
        $this->quantity = $quantity;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getIdRec()
    {
        return $this->idRec;
    }

    public function getIdIngr()
    {
        return $this->idIngr;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setIdRec($idRec)
    {
        $this->idRec = $idRec;
    }

    public function setIdIngr($idIngr)
    {
        $this->idIngr = $idIngr;
    }

    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }
}
