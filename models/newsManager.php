<?php
    function getNews ($nbe) : array
    {
        global $bdd;
        $requete = $bdd -> prepare("SELECT * FROM news ORDER BY dat DESC LIMIT 3");
        $requete -> execute();
        
        $resultat = $requete -> fetchall(PDO::FETCH_ASSOC);
        return $resultat;

    }
?>