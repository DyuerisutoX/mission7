<?php
    function getLogin () : array
    {
        global $bdd;
        $requete = $bdd -> prepare("SELECT * FROM users");
        $requete -> execute();
        
        $data = $requete -> fetchall(PDO::FETCH_ASSOC);
        return $data;

    }
?>