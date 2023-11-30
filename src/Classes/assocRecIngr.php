<?php

// This class aims to associate a recipe with an ingredient

class AssocRecIngr
{
    private $id;
    private $idRec;
    private $idIngr;

    public function __construct($id, $idRec, $idIngr)
    {
        $this->id = $id;
        $this->idRec = $idRec;
        $this->idIngr = $idIngr;
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
}
