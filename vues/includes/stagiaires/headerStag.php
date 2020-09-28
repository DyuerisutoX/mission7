<header class="bg-primary">

    <div class="container h-100">
      <div class="row h-100 align-items-center">

        <div class="col-lg-12">

          <h3 class="text-white mt-5 mb-2">Stagiaires</h3>

          <p class="lead mb-5 text-white-50">
                <?php   //Afficher le nom d'utilisateur
                date_default_timezone_set("Indian/Reunion");

                    switch(true)
                    {
                        case strftime("%R") < 12:
                        echo "Bonjour " .$_SESSION["valName"];
                        break;

                        case strftime("%R") < 18:
                        echo "Bon après-midi " .$_SESSION["valName"];
                        break;

                        default:
                        echo "Bonsoir " .$_SESSION["valName"];
                    }

                ?>
            </p>

            <div id="zoneBtn">

              <?php 
                    include "control/retour.php";

                    echo "<a id=\"retourFrom\" class=\"btn btn-primary btn-lg\" href=\"$from\">Retour</a>";


                    // echo "<a id=\"retourFrom\" class=\"btn btn-primary btn-lg\" href=\"#\">Retour</a>";
                    

                    // function retour()
                    // {
                    //     if ($test == "section")
                    //     {
                    //         header ("location:../section.php?sec=".$_GET['from']);
                    //     }
                
                    //     else if ($test == "init")
                    //     {
                    //         header ("location:../initiales.php?=".$_GET['from']);
                    //     }
                    // }
                
                    

              ?>


                

                <form action="control/destroy.php">
                  <input id="deconnexion" class="btn-primary btn-lg" type="submit" value="Déconnexion">   <!-- Déconnexion: direction vers fichier destroy.php -->
                </form>

            
            </div>

        
        </div>

      </div>
    </div>

</header>
