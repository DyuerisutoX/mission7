<?php
    //Inclut le fichier data: initiales.php
    include "./data/initiales.php";
?>

<h2 id="tiSect">Rechercher les stagiaires par initiales: </h2><br>

<?php

    $initiales = getInitiales();

    foreach ($initiales as $values)
    {//Affiche toutes les valeurs du tableau initiales
        echo "<a id=\"initiales\" class=\"btn btn-primary\" href=\"trombi.php\">".$values."</a> ";
    }
?>