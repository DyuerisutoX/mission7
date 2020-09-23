<header class="bg-primary">

    <div class="container h-100">
      <div class="row h-100 align-items-center">

        <div class="col-lg-6">

          <h3 class="text-white mt-5 mb-2">Trombinoscope</h3>

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

            <p>Pour vous déconnecter :<br>
                ↓↓↓
            </p>

          <form action="control/destroy.php">
            <input id="deconnexion" class="btn-primary btn-lg" type="submit" value="Déconnexion">
          </form>

        
        </div>

        <div class="col-lg-6">

            <img id="aLaUne" src="medias/img/aLaUne.png" alt="alaune">

        </div>



      </div>
    </div>

</header>
