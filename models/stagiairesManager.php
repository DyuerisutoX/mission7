<?php
    function getListeStag () : array
    {
        global $bdd;
        $requete = $bdd -> prepare("SELECT * FROM stagiaires");
        $requete -> execute();
        
        $stagiaires = $requete -> fetchall(PDO::FETCH_ASSOC);
        return $stagiaires;

    }
?>