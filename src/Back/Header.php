<?php
//Include DAO & connexion
require_once("../../config.php");
require_once("../../DAO.php");

// Check if search term is present in POST request
if (isset($_POST["categories"])) {
    $categories = $_POST["categories"];

    $categoryDAO = new CategoryDAO($db);
    $categories = $categoryDAO->readAll();

    echo json_encode(array('categories' => ($categories)));
}
