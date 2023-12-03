# Projet PHPUnit

Ce projet est un exemple de configuration et d'utilisation de PHPUnit pour des tests unitaires et d'intégration en PHP.

## Lancement du projet


### Étape 1 : Récupération du projet

- Clonez le projet depuis Git, rendez-vous dans le répertoire du projet et exécutez la commande suivante :

```bash
git clone https://github.com/MaximeBeernaert/ProjetPHPUnit.git
```

``` bash
cd ProjetPHPUnit
```


### Étape 2 : Installation de PHPUnit

- Pour installer PHPUnit, exécutez la commande suivante :

```bash
composer require --dev phpunit/phpunit
```


### Étape 3 : Configuration de la base de données

- Exécutez les scripts `DB-PHPUNIT.sql` et `inserts.sql` pour configurer la base de données avec les données nécessaires.


### Étape 4 : Configuration de phpunit.xml

- Utilisez le fichier `phpunit.xml` pour définir les paramètres de l'environnement et les tests à exécuter. Voici un exemple de configuration :

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit colors="true" bootstrap="vendor/autoload.php">
    <php>
        <env name="DB_CONNECTION" value="mysql"/>
        <env name="DB_HOST" value="127.0.0.1"/>
        <env name="DB_PORT" value="3306"/>
        <env name="DB_DATABASE" value="projetphpunit"/>
        <env name="DB_USERNAME" value="your_username"/>
        <env name="DB_PASSWORD" value="your_pw"/>
    </php>
    <testsuites>
        <testsuite name="Application Test Suite">
            <directory>./tests/Unit</directory>
            <directory>./tests/integration</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

- Remplacez `your_username` et `your_pw` par vos identifiants de base de données.


### Étape 5 : Exécution des tests avec PHPUnit

- Pour exécuter les tests, utilisez la commande suivante :

```bash
./vendor/bin/phpunit
```

### Étape 6 : Excécution du projet en local

- Utilisez votre serveur local (XAMPP, MAMP, WAMP...) pour exécuter le projet, pensez à changer le chemin d'accès ou a déposer le projet dans le dossier de votre serveur local.