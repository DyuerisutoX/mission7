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


            foreach ($section as list($codeSect, $libelleSect, $dateDeb, $nbreStag, $ico))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
            {//Créer des cartes pour chaques valeurs dans le tableau
                
                for ($a = 0; $a <count($stagiaires); $a++)
                {
                    if ($codeSect == $stagiaires[$a][0])
                    {
                        $nbreStag = $nbreStag + 1;
                    }
                }

                echo "
                    <tr>
                    
                        <td><a href=\"index.php?action=sec&codeSect=$codeSect\" >$codeSect</a></td>
                        <td>$libelleSect</td>
                        <td>$dateDeb</td>
                        <td>$nbreStag</td>
                        <td><img id=\"icons\" src=\"medias/icoSect/$ico.svg\" alt=\"$ico\"></td>
                    
                    </tr>
                ";
            }

            
            // $section[0][3] = "24";
            // echo $section[0][3];

        ?>

    </table>


</div>