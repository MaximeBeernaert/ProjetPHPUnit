<?php

require_once('config.php');

class RecipeDAO
{
    private $bd;

    public function __construct($bd)
    {
        $this->bd = $bd;
    }
}
