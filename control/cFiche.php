<?php

    if(isset($action) && $action == "fiche")
    {

        if (!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
        {
            //Direction vers la page 403
            header("location:index.php?action=403");
        }

        //Test si on à un $_GET['sec'] ou bien un $_GET[''ini dans l'url]
        if (isset($_GET['sec']) || isset($_GET['init']))
        {
            //Suivant les cas, notre bouton retour se redirige vers section ou bien initiales
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

            //Vérifie si $_GET['codeStag'] possède une valeur
            if (isset($_GET['codeStag']))
            {
                include "./models/stagiairesManager.php";
                
                //Valeur du bouton retour
                $retour = "<a href=\"index.php$from\" id=\"retour\" class=\"btn btn-primary btn-lg\" >Retour</a>";
                $tabStagiaires = getListeStag();
                $compte = 0;

                foreach ($tabStagiaires as $stag)
                {
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

                    
                    //Si $_GET['codeStag'] correspond au code stagiaire du tableau
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

                //Si on saisie une valeur erroné dans l'url
                if ($compte == count($tabStagiaires))
                {//Redirection vers la page 404
                    header("location:index.php?action=404");
                }
    
                //Stocke le titre de l'header et le cheminement de la vue fiche
                $header = "Fiche Stagiaire";
                $view = "vues/vFiche.php";
    
            }

            //Si code stagiaire inexistant dans l'url, retourne vers section ou bien initiales
            else
            {
                header("location:index.php$from");
            }
    
        }

        //Si un seul parametre dans l'url, action = fiche, retourne vers trombi
        else
        {
            header("location:index.php?action=trombi");
        }
        
    }
        
?>