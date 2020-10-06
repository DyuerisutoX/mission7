<?php
    //Démarre une session
    session_start();

    //Include de la bdd
    include "models/data.php";

    //Include de fonctions
    include "vues/mesFonctions.php";

    //Verifie la valeur de "action"
    if (isset($_GET['action']))
    {
        //Stocke la valeur de $_GET['action'] dans une var
        $action = $_GET['action'];

        //Verifie la valeur de "erreur"
        if (isset($_GET['error']))
        {
            //Stocke la valeur de $_GET['error'] dans une var
            $erreur = $_GET['error'];
        }

    }

    //Si $action vaut une de ces valeurs, charger le controlleur adéquate
    switch ($action)
    {
        case "accueil":
        include "control/cAcc.php";
        break;

        case "trombi":
        include "control/cTrombi.php";
        break;

        case "connex":
        include "control/cLogin.php";
        break;

        case "deconn":
        include "control/cDestroy.php";
        break;

        case "sec":
        include "control/cSection.php";
        break;    

        case "init":
        include "control/cInit.php";
        break;

        case "fiche":
        include "control/cFiche.php";
        break;

        case "403" :
        include "control/cP403.php";
        break;

        case "404" :
        include "control/cP404.php";
        break;
    
        default:
        include "control/cAcc.php";
        break;

    }

    //Afficher la vue issue du controleur
    include $view;

?>