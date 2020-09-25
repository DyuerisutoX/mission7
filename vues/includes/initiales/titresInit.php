<?php 

include "./data/initiales.php";

if(isset($_GET['init']))
{
    $lettre = $_GET['init'];
    $initiales = getInitiales();

    for ($l = 0; $l < count($initiales); $l++)
    {
        if ($lettre == $initiales[$l])
        {

            echo "Vous avez chosi la lettre $initiales[$l] <br>";
            break;
        }
    }

    if ($l == count($initiales))
    {
        $l;
        echo "Initiales inexistante";
            
    }
    
}

else
{
    echo "Vous n'avez pas selectionner de lettre en particulier.";
}
?>
