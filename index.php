<?php
    session_start();
    // include "control/param.php";
    // $action = $_GET['action'];
    // $erreur = $_GET['error'];
    include "control/controlAcc.php";
    include $view;
    // include "accueil.php";
    // include $view;

    // if(isset($action) && isset($erreur))
    // {
    //     echo "Il y a quelque chose dans action qui est \$_GET['action'].......(" .$action. ")<br><br>";
    //     echo "Il y a quelque chose dans error qui est \$_GET['error'].......(" .$erreur. ")";
    // }

    // else
    // {
    //     echo "Il n'y a rien dans action. \$_GET['action'].......(" .$action. ")<br><br>";
    //     echo "Il n'y a rien dans error. \$_GET['error'].......(" .$erreur. ")";
    // }
    // echo $_GET['action'];
?>