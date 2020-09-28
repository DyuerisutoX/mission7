<?php

    if(isset($_GET['sec']))
    {
    $from = "section.php?sec=" .$_GET['sec'];
    }

    else if (isset($_GET['init']))
    {
    $from = "initiales.php?init=" .$_GET['init'];
    }

?>