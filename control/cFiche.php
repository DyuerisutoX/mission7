<?php

    if(isset($action) && $action == "fiche")
    {

        if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
        {
            //$view = "vues/vPage403.php";
            header("location:index.php?action=403");
        }

        if (isset($_GET['sec']) || isset($_GET['init']))
        {

            if (isset($_GET['sec']))
            {
                $sec = $_GET['sec'];
                $from = "?action=sec&codeSect=$sec";
            }

            else if (isset($_GET['init']))
            {
                $init = $_GET['init'];
                $from = "?action=init&lettr=$init";
            }

            if (isset($_GET['codeStag']))
            {
                include "./models/stagiairesManager.php";
    
                $retour = "<a href=\"index.php$from\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";
                $tabStagiaires = getListeStag();
                $compte = 0;


    
                foreach ($tabStagiaires as $stag)  //$a,b,c,d ==> plus efficaces que d'ecrire $section[0][0] ect...
                {//Créer des cartes pour chaques valeurs dans le tableau

                    $codeStag = $stag['codeSta'];
                    $codeSect = $stag['codeSec'];
                    $nom = $stag['nomSta'];
                    $prenom = $stag['preSta'];
                    $dateBirth = formatDate($stag['datNaisSta']);
                    $ville = $stag['villeSta'];
                    $noTel = $stag['gsmSta'];
                    $mail = $stag['mailSta'];
                    $interne = $stag['interneSta'];
                    $photo = strtolower($nom). "_" .strtolower($prenom);

                    
            
                    if ($_GET['codeStag'] == $codeStag)
                    {
        
                        $profil = 
                        
                        "<div class=\"container mt-5 mb-5\">
                            <div class=\"row\">
                                <div id=\"dispo\" class=\"col-md-6 offset-md-3\">
            
                                    <img id=\"identity\" src=\"medias/photos/".strtolower($codeSect)."/$photo.jpg\" alt=\"$photo\">
            
                                    <h4>$nom $prenom</h4>

                                    <ul class=\"timeline\">
                                        <li>
                                            Code Stagiaire: $codeStag
                                        </li>

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

                        break;
                    }

                    else
                    {
                        $compte++;                        
                    }
            
                }

                if ($compte == count($tabStagiaires))
                {
                    header("location:index.php?action=404");
                }
    
                $header = "Fiche Stagiaire";
                $view = "vues/vFiche.php";
    
            }

            else
            {
                header("location:index.php$from");
            }
    
        }


        else
        {
            header("location:index.php?action=trombi");
        }



        
    }
        
?>