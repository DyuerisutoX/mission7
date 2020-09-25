<?php 

include "./data/liSections.php";

if(isset($_GET['sec']))
{
    $nomSect = $_GET['sec'];
    $section = getListeSec();

    for ($s = 0; $s < count($section); $s++)
    {
        if ($nomSect == $section[$s][0])
        {

            echo "Bienvenue, vous êtes sur la page section ".$section[$s][1]. "<br>";
            break;
        }
    }

    if ($s == count($section))
    {
        $s;
        echo "Section inexistante";
            
    }
    
}

else
{
    echo "Vous n'avez pas selectionner de section en particulier.";
}
?>
