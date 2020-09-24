<?php
    //Inclut le fichier data: liste des section
    include "./data/liSections.php";
?>

<h2 id="tiSect">Rechercher les stagiaires par sections: </h2><br>

<div class="row">


    <table>

        <tr>
            <th>Code Section</th>
            <th>Formation</th>
            <th>Date de début</th>
            <th>Nbre Stagiaires</th>
            <th>Icones</th>
        </tr>

        <?php 

            $section = getListeSec();

            foreach ($section as list($codeSect, $libelleSect, $dateDeb, $nbreStag, $ico))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
            {//Créer des cartes pour chaques valeurs dans le tableau
                echo "
                    <tr>
                    
                        <td><a href=\"section.php?sec=$codeSect\" >$codeSect</a></td>
                        <td>$libelleSect</td>
                        <td>$dateDeb</td>
                        <td>$nbreStag</td>
                        <td><img id=\"icons\" src=\"medias/icoSect/$ico.svg\" alt=\"$ico\"</td>
                    
                    </tr>
                ";
            }

        ?>

    </table>


</div>