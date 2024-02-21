<?php
$servername = 'localhost';
$username = 'root';
$password = '';
try {
    //On établit la connexion
    $connexion = new PDO("mysql:host=$servername;", $username, $password);
    //Définir les modes d'erreurs et d'exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //on va affecter notre requete sql à une variable
    $sql = "CREATE DATABASE luisimmo CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql);
}
//On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
catch(PDOException $e) {
    date_default_timezone_set("Europe/Paris");
    setlocale(LC_TIME,"fr_FR");
    $fichier = fopen("error.log","a+");
    fwrite($fichier, date("d/m/Y H:i:s : ").$e->getMessage(). "\n");
    fclose($fichier);
}

//les variables de connexion
$servername = 'localhost';
$dbname = 'luisimmo';
$username = 'root';
$password = '';
try {
    //On établit la connexion
    $connexion = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    //Définir les modes d'erreurs et d'exceptions
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connexion->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    //on va affecter notre requete sql à une variable
    $sql = "CREATE TABLE users (
        id INT(5) AUTO_INCREMENT PRIMARY KEY,
        civilite VARCHAR(5) NOT NULL,
        prenom	VARCHAR(70) NOT NULL,
        nom	VARCHAR(70) NOT NULL,
        mail VARCHAR(100) NOT NULL,
        mdp	VARCHAR(200) NOT NULL,
        telephone VARCHAR(10) NOT NULL,
        adresse	VARCHAR(170)NOT NULL,
        codePostal INT(5) NOT NULL,
        ville VARCHAR(50) NOT NULL,
        usserole VARCHAR(50)
        )CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql);
   
    // table de bien 
    $sql1 = "CREATE TABLE bien (
        idbien INT(5) AUTO_INCREMENT PRIMARY KEY,
        typedebien VARCHAR(50) NOT NULL,
        nbrdepiece VARCHAR(70) NOT NULL,
        typedepiece	VARCHAR(70) NOT NULL,
        surface_bien VARCHAR(100) NOT NULL,
        surface_terrain	VARCHAR(200) NOT NULL,
        typedevente VARCHAR(200) NOT NULL,
        idusers INT(50) NOT NULL
        )CHARACTER SET utf8 COLLATE utf8_bin";
    //on execute la requete sql
    $connexion->exec($sql1);
}
//On capture les exceptions si une exception est lancée et on affiche les informations relatives à celle-ci
catch(PDOException $e) {
    $fichier = fopen("error.log","a+");
    fwrite($fichier, date("d/m/Y H:i:s : ").$e->getMessage(). "\n");
    fclose($fichier);
}

?>