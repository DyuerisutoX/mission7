<?php
    include "./data/stagiaires.php";
    
    if (isset($_GET['init']))
    {

?>

    <div class="row">

        <?php

            $stagiaires = getListeStag();
            // $initiales = getListeStag();
            $read = 0;

            for($st = 0 ; $st < count($stagiaires) ; $st++)
            {
                if ($_GET['init'] !== substr($stagiaires[$st][2],0,1) && $_GET['init'] !== strtolower( substr($stagiaires[$st][2],0,1)))
                {
                    $read += 1;
                }

            }

            if ($read == count($stagiaires))
            {
                include "aucunStag.php";
            }

            else
            {
                include 'affichStag.php';
            }

        ?>

    </div>

<?php
    }

    else
    {
        echo "<h1>Veuillez revenir en arrière.</h1>";
    }
?>