<?php
    include "./data/initiales.php";
?>

<h2 id="tiSect">Rechercher les stagiaires par initiales: </h2><br>

<?php
    foreach ($initiales as $values)
    {
        echo "<a id=\"initiales\" class=\"btn btn-primary\" href=\"trombi.php\">".$values."</a> ";
    }
?>