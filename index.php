<?php
    session_start();
    // include "models/data.php";

    // echo $_GET['action'];

    if (isset($_GET['action']))
    {
        $action = $_GET['action'];

        if (isset($_GET['error']))
        {
            $erreur = $_GET['error'];
        }

    }

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


    include $view;
    // echo $action;
    // echo $error;

    // echo $view;
    // echo $_GET['action'];

    // echo "
    // Valeur \$_SESSION['valEmail'].....(" .$_SESSION["valEmail"]. ")<br>
    // Valeur \$_SESSION['valPassword'].....(" .$_SESSION["valPassword"]. ")<br>
    // Valeur \$_SESSION['valName'].....(" .$_SESSION["valName"]. ")<br>";

?>