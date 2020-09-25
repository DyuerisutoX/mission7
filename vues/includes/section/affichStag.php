<h2>Liste des stagiaires de <?php echo $_GET['sec']; ?>:</h2>
<br><br>

<table>

<tr>
    <th>Code Stagiaire</th>
    <th>Nom</th>
    <th>Prénom</th>
    <th>Interne</th>
</tr>

<?php 

    $stagiaires = getListeStag();

    foreach ($stagiaires as list($codeSect, $codeStag, $nom, $prenom, $dateBirth, $noTel, $ville, $mail, $interne, $photo))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
    {//Créer des cartes pour chaques valeurs dans le tableau
        if ($_GET['sec'] == $codeSect)
        {
            echo 
            "<tr>

                <td>$codeStag</td>
                <td><a href=\"#\" >$nom</a></td>
                <td><a href=\"#\" >$prenom</a></td>
                <td>$interne</td>
            
            </tr>";

        }

    }

?>

</table>
