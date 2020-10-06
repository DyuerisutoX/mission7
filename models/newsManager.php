<?php
    function getNews ($nbe) : array
    {//Tableau des news
        global $bdd;
        //Récupère toutes les données concernant la table news
        $requete = $bdd -> prepare("SELECT * FROM news ORDER BY dat DESC LIMIT 3");
        $requete -> execute();
        
        //Stocke sous la forme d'un tableau
        $resultat = $requete -> fetchall(PDO::FETCH_ASSOC);
        return $resultat;

    }
?>