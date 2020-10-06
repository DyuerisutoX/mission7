<?php

    $hostname = "localhost";
    $dbname = "trombinoscope";
    $username = "root";
    $password = "";

    try
    {
        $bdd = New PDO("mysql:host=$hostname;dbname=$dbname;charset=UTF8", $username, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    
    catch(PDOException $e)
    {
        // $e = "Erreur connexion BDD";
        die("Echec de la connexion à la BDD: ......(" .$e->getMessage(). ")");
    }
    


?>

