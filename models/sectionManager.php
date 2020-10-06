<?php
    function getListeSec () : array
    {
        global $bdd;
        $requete = $bdd -> prepare("SELECT * FROM sections");
        $requete -> execute();
        
        $sections = $requete -> fetchall(PDO::FETCH_ASSOC);
        return $sections;

    }
?>