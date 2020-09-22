<?php

    //inclusion du tableau login
    include "../data/login.php";

    //page de contrôle de login
    session_start();
    $_SESSION["valEmail"] = $_POST["email"];                //Enregistre la valeur de l'input email dans une variable session
    $_SESSION["valPassword"] = $_POST["password"];          //Enregistre la valeur de l'input password dans une variable session

    for ($i = 0; $i < count($login); $i++)
    {
        if ($_SESSION["valEmail"] == $login[$i][0] && $_SESSION["valPassword"] == $login[$i][2])    
        //Si valeur de la variable SESSION["valEmail"] et SESSION["valPassword"] correspond aux valeur du tableau login
        {
            $_SESSION["valName"] = $login[$i][1];       //Stocke la valeur du nom dans une variable SESSION ["valName"]
            break;

        }


    }

    if ($_SESSION["valEmail"] == $login[$i][0] && $_SESSION["valPassword"] == $login[$i][2])
    {//Si valeur de la variable SESSION["valEmail"] et SESSION["valPassword"] correspond aux valeur du tableau login, redirection vers testSessionV2.php
        header ("location:testSessionV2.php");
    }

    else
    {
        header ("location:testErreur.php");
    }
?>