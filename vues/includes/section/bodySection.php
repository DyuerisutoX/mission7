<?php
    // include "./data/stagiaires.php";
    
    // if (isset($_GET['sec']))
    // {
    //     $body = strtoupper($_GET['sec']);

    //     switch($body)
    //     {
    //         case ('DWWM'):
    //         include "desc/dwwm.php";
    //         break;

    //         case ('TSSR'):
    //         include "desc/tssr.php";
    //         break;

    //         case ('DW'):
    //         include "desc/dw.php";
    //         break;

    //         case ('DC'):
    //         include "desc/dc.php";
    //         break;

    //         case ('DR'):
    //         include "desc/dr.php";
    //         break;

    //         case ('SR'):
    //         include "desc/sr.php";
    //         break;

    //         default:
    //         break;
    //     }

?>

    <br>

    <div class="row">

        <?php

            include $body;

        ?>

    </div>

