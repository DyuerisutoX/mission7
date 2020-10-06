<?php
    function getListeSec () : array
    {//Tableau des sesctions
        global $bdd;

        //Idem que pour news, et tous les autres fichiers managers
        $requete = $bdd -> prepare("SELECT * FROM sections");
        $requete -> execute();
        
        $sections = $requete -> fetchall(PDO::FETCH_ASSOC);
        return $sections;

    }
?>