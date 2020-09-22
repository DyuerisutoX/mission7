<?php

    include "../data/login.php";

    //page de contrôle de login
    session_start();
    $_SESSION["valEmail"] = $_POST["email"];
    $_SESSION["valPassword"] = $_POST["password"];


    foreach ($login as list($a, $b, $c))
    {
        if ($_SESSION["valEmail"] == $a)
        {
            $_SESSION["valName"] = $b;
            $_SESSION["testI"] = $i;

            header ("location:testSessionV2.php");
        }

        if ($i > count($login))
        {
            header ("location:testErreur.php");;
        }

        $i++;
    }

    // foreach ($login as list($a))
    // {
    //     echo "\$login[$i] A: $a<br>";
    //     $i++;
    // }

    // echo "Valeur variable \$i = " .$i;

    
?>