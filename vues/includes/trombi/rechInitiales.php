<h2 id="tiSect">Rechercher les stagiaires par initiales: </h2><br>

<?php

    foreach ($initiales as $values)
    {//Affiche toutes les valeurs du tableau initiales
        echo "<a id=\"initiales\" class=\"btn btn-primary\" href=\"index.php?action=init&lettr=$values\">".$values."</a> ";
    }
?>