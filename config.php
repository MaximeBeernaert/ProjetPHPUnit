<?php

// DataBase connection (change with your own values)
try {
    $hote = "127.0.0.1";
    $user = "phpunit";
    $password = "phpunit";
    $dbName = "projetphpunit";

    // Création d'une instance de PDO pour la connexion à la BDD
    $bd = new PDO("mysql:host=$hote;dbname=$dbName", $user, $password);

    // Configuration de PDO pour générer des exceptions en cas d'erreur
    $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'erreur de connexion, affiche un message d'erreur et arrête le script
    echo "Error during database connection: " . $e->getMessage();
    die();
}
