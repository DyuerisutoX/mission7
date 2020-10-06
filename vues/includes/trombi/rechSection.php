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


            foreach ($tabSection as $sec)
            {//Créer des lignes pour chaques valeurs dans le tableau stagiaires
                //Créer les var qui vont accueillir les données de notre tables stagiaires issu de la BDD

                $codeSect = $sec["codeSec"];
                $libelleSect = $sec["libSec"];
                $dateDeb = formatDate($sec["dateDebSec"]);
                $ico = strtolower($codeSect);
                $nbreStag = 0;

                //COmpte le nombre de stagiaires dans chaque sections
                for ($a = 0; $a < count($tabStagiaires); $a++)
                {
                    if ($codeSect == $tabStagiaires[$a]['codeSec'])
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

        ?>

    </table>


</div>