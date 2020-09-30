<!-- <h2>Liste des stagiaires commençant par: <?php echo $lettre; ?>:</h2>
<br><br>
 -->
<table>

<tr>
    <th>Section</th>
    <th>Code Stagiaire</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Interne</th>
    <th>Photo</th>
</tr>

<?php 

    foreach ($stagiaires as list($codeSect, $codeStag, $nom, $prenom, $dateBirth, $noTel, $ville, $mail, $interne, $photo))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
    {//Créer des cartes pour chaques valeurs dans le tableau
        if ($lettre == substr($nom, 0, 1) || $lettre == strtolower(substr($nom, 0, 1)))
        {
            echo 
            "<tr>

                <td>$codeSect</td>
                <td>$codeStag</td>
                <td><a href=\"index.php?action=fiche&init=$lettre&codeStag=$codeStag\" >$nom</a></td>
                <td><a href=\"index.php?action=fiche&init=$lettre&codeStag=$codeStag\" >$prenom</a></td>
                <td>$interne</td>
                <td><a href=\"index.php?action=fiche&init=$lettre&codeStag=$codeStag\" ><img id=\"mini\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\"></a></td>
            
            </tr>";

        }

    }

?>

</table>
