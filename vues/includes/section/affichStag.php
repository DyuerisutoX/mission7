<h2>Liste des stagiaires de <?php echo strtoupper($nomSect); ?>:</h2>
<br><br>

<table>

<tr>
    <th>Code Stagiaire</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Interne</th>
    <th>Photo</th>
</tr>

<?php 

    // $stagiaires = getListeStag();

    foreach ($tabStagiaires as $stag)  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
    {//Créer des cartes pour chaques valeurs dans le tableau

        $codeStag = $stag['codeSta'];
        $codeSect = $stag['codeSec'];
        $nom = $stag['nomSta'];
        $prenom = $stag['preSta'];
        $interne = $stag['interneSta'];
        $photo = strtolower($nom). "_" .strtolower($prenom);


        if ($nomSect == $codeSect || $nomSect == strtolower($codeSect))
        {
            echo 
            "<tr>

                <td>$codeStag</td>
                <td><a href=\"index.php?action=fiche&sec=$codeSect&codeStag=$codeStag\" >$nom</a></td>
                <td><a href=\"index.php?action=fiche&sec=$codeSect&codeStag=$codeStag\" >$prenom</a></td>
                <td>$interne</td>
                <td><a href=\"index.php?action=fiche&sec=$codeSect&codeStag=$codeStag\" ><img id=\"mini\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\"></a></td>
            
            </tr>";

        }



    }


?>

</table>
