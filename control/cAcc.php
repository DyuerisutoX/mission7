<?php

    //Si notre $_GET['action'] vaut accueil
    if (isset($action) && $action == "accueil")
    {

        // inclusion de newsManager pour recuperer le tableau des news
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

        strftime("%e %B %Y");

        if (strftime("%e") !== "1")   // ajoute "er" en exposant quand la date indique le premier
        {
          $heure = "Nous sommes le " .strftime("%e %B %Y") . ", ";
        }
        else
        {
          $heure = strftime("%e<sup>er</sup> %B %Y") . ", ";
        }
  
        $heure.= " et il est " .strftime("%R") . "<br>";

        //Var qui recupere les valeurs de news
        $tabNews = getNews(3);

        //Si on a un $_GET['erreur']
        if(isset($action) && isset($erreur))
        {
            //Cas où la connexion à échoué
            if ($action == "accueil" && $erreur == 1)
            {
                $msgErreur = "Identifiants ou mot de passe incorrects";
                $view = "vues/vAccueil.php";
            }
            //Cas où la session à expiré
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

        //Affiche le contenu de accueil dans le fichier index
        else
        {
            $msgErreur = "";
            $view = "vues/vAccueil.php";

        }

    }

    //Si la saisie de action est accueil ou bien une autre valeur quelquonque, la page se redirige vers accueil
    else
    {
        header("location:index.php?action=accueil");
    }
        
?>