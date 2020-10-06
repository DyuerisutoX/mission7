<?php

    include "models/usersManager.php";



    //page de contrôle de login
    // session_start();
    $_SESSION["valEmail"] = $_POST["email"];                //Enregistre la valeur de l'input email dans une variable session
    $_SESSION["valPassword"] = $_POST["password"];          //Enregistre la valeur de l'input password dans une variable session

    $tabLogin = getLogin();

    foreach ($tabLogin as $login)                //$i = 0; $i < count($login); $i++
    {
        $email = $login["log"];
        $pwd = $login["pwd"];
        $role = $login["rol"];
        $nom = $login["nom"];

        if ($_SESSION["valEmail"] == $email)
        //Si valeur de la variable SESSION["valEmail"] correspond aux valeur du tableau login
        {
            $_SESSION["valName"] = $nom; 
            $_SESSION["role"] = $role;      //Stocke la valeur du nom dans une variable SESSION ["valName"]
            break;

        }


    }

    if ($_SESSION["valEmail"] == $email && $_SESSION["valPassword"] == $pwd)
    {//Si valeur de la variable SESSION["valEmail"] et SESSION["valPassword"] correspond aux valeur du tableau login
        header ("location:index.php?action=trombi");
    }

    else
    {
        session_unset();
        header ("location:index.php?action=accueil&error=1");
    }
?>