<!-- Titre pour l'initiale choisi -->
<h2>Liste des stagiaires commençant par: <?php echo $lettre; ?>:</h2>
<br><br>

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

    foreach ($tabStagiaires as $stag)
    {//Créer des lignes de tableau
     //Vars pour stocker la val de la bdd

        $codeStag = $stag['codeSta'];
        $codeSect = $stag['codeSec'];
        $nom = $stag['nomSta'];
        $prenom = $stag['preSta'];
        $interne = $stag['interneSta'];
        $photo = strtolower($nom). "_" .strtolower($prenom);

        if ($lettre == substr($nom, 0, 1) || $lettre == strtolower(substr($nom, 0, 1)))
        {//Affiche tous les stagiaires dont la 1ere lettre du nom correspond à notre $_GET['lettr']
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
