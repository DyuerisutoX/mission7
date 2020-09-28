<?php
    include "./data/stagiaires.php";
    
    if (isset($_GET['sec']))
    {
        $body = strtoupper($_GET['sec']);

        switch($body)
        {
            case ('DWWM'):
            include "desc/dwwm.php";
            break;

            case ('TSSR'):
            include "desc/tssr.php";
            break;

            case ('DW'):
            include "desc/dw.php";
            break;

            case ('DC'):
            include "desc/dc.php";
            break;

            case ('DR'):
            include "desc/dr.php";
            break;

            case ('SR'):
            include "desc/sr.php";
            break;

            default:
            break;
        }

?>

    <br>

    <div class="row">

        <?php

            $stagiaires = getListeStag();
            $read = 0;

            for($st = 0 ; $st < count($stagiaires) ; $st++)
            {
                if ($_GET['sec'] !== $stagiaires[$st][0] && $_GET['sec'] !== strtolower($stagiaires[$st][0]))
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