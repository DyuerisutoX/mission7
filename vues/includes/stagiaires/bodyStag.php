<?php 

    include "./data/stagiaires.php";

    if (isset($_GET['codeStag']))
    {
        
        $stagiaires = getListeStag();

        foreach ($stagiaires as list($codeSect, $codeStag, $nom, $prenom, $dateBirth, $noTel, $ville, $mail, $interne, $photo))  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
        {//Créer des cartes pour chaques valeurs dans le tableau
            if ($_GET['codeStag'] == $codeStag)
            {

                echo "<div class=\"container mt-5 mb-5\">
                <div class=\"row\">
                    <div id=\"dispo\" class=\"col-md-6 offset-md-3\">

                        <img id=\"identity\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\">

                        <h4>$nom $prenom</h4>
                        <ul class=\"timeline\">
                            <li>
                                Section: $codeSect
                            </li>

                            <li>
                                Date de naissance: $dateBirth
                            </li>

                            <li>
                                GSM: $noTel
                            </li>

                            <li>
                                Ville: $ville
                            </li>

                            <li>
                                Mail: $mail
                            </li>

                            <li>
                                Interne: $interne
                            </li>



                        </ul>
                    </div>
                </div>
            </div>";
            }
    
        }
    

        // for($st = 0 ; $st < count($stagiaires) ; $st++)
        //     {
        //         if ($_GET['codeStag'] == $stagiaires[$st][1])
        //         {
        //             var_dump ($stagiaires[$st]);
        //             break;
        //         }

        //         // else
        //         // {
        //         //     echo var_dump ($stagiaires[$st][1]). \"<br><br>\";
        //         // }

        //     }

                        // echo "
                // <img id=\"identity\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\">

                // <ul>
                //    <li>Code Stagiaires: $codeStag</li>
                //    <li>Nom: $nom</li>
                //    <li>Prénom: $prenom</li>
                //    <li>Date de naissance: $dateBirth</li>
                //    <li>GSM: $noTel</li>
                //    <li>Ville: $ville</li>
                //    <li>Mail: $mail</li>
                //    <li>Internat: $interne</li>
                // </ul>";


    
    }


?>
