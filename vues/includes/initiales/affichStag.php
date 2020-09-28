<!-- <h2>Liste des stagiaires commençant par: <?php echo $_GET['init']; ?>:</h2>
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

    $stagiaires = getListeStag();

    foreach ($stagiaires as list($codeSect, $codeStag, $nom, $prenom, $dateBirth, $noTel, $ville, $mail, $interne, $photo))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
    {//Créer des cartes pour chaques valeurs dans le tableau
        if ($_GET['init'] == substr($nom, 0, 1) || $_GET['init'] == strtolower(substr($nom, 0, 1)))
        {
            echo 
            "<tr>

                <td>$codeSect</td>
                <td>$codeStag</td>
                <td><a href=\"ficheStag.php?init=".$_GET['init']."&codeStag=$codeStag\" >$nom</a></td>
                <td><a href=\"ficheStag.php?init=".$_GET['init']."&codeStag=$codeStag\" >$prenom</a></td>
                <td>$interne</td>
                <td><a href=\"ficheStag.php?init=".$_GET['init']."&codeStag=$codeStag\" ><img id=\"mini\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\"></a></td>
            
            </tr>";

        }

    }

?>

</table>
