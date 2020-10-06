<?php

    if (isset($action) && $action == "accueil")
    {

        // include "models/data.php";
        include "models/newsManager.php";

        date_default_timezone_set("Indian/Reunion");
        switch(true)
        {
            case strftime("%R") < 12:
            $serveur ="Bonjour";
            break;

            case strftime("%R") < 18:
            $serveur ="Bon après-midi";
            break;

            default:
            $serveur ="Bonsoir";
        }
        
        setlocale(LC_TIME, 'french');    // indique que PHP doit envoyer des mots en français (ex : date)
        //date_default_timezone_set("Indian/Reunion");

        strftime("%e %B %Y");

        if (strftime("%e") !== "1")   // ajoute "er" en exposant quand la date indique le premier
        {
          $heure = "Nous sommes le " .strftime("%e %B %Y") . ", ";
          //var_dump(strftime($dateT2));
        }
        else
        {
          $heure = strftime("%e<sup>er</sup> %B %Y") . ", ";
        }
  
        $heure.= " et il est " .strftime("%R") . "<br>";

        $tabNews = getNews(3);

        if(isset($action) && isset($erreur))
        {

            if ($action == "accueil" && $erreur == 1)
            {
                $msgErreur = "Identifiants ou mot de passe incorrects";
                $view = "vues/vAccueil.php";
            }

            else if ($action == "accueil" && $erreur == 2)
            {
                $msgErreur = "Session déconnecté ou expiré";
                $view = "vues/vAccueil.php";
            }

            else
            {
                header("location:index.php?action=acc");
            }

        
        }

        else
        {
            $msgErreur = "";
            $view = "vues/vAccueil.php";

        }

    }

    else
    {
        header("location:index.php?action=accueil");
    }
        
?>