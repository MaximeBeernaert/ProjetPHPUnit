<?php

// This class aims to associate a recipe with an ingredient

class AssocRecIngr
{
    private $idRec;
    private $idIngr;

    public function __construct($idRec, $idIngr)
    {
        $this->idRec = $idRec;
        $this->idIngr = $idIngr;
    }

    public function getIdRec()
    {
        return $this->idRec;
    }

    public function getIdIngr()
    {
        return $this->idIngr;
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



?>