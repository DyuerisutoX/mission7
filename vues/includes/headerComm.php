<!-- Header commun -->
<header class="bg-primary">
  <div class="container h-100">
    <div class="row h-100 align-items-center">

      <div class="col-lg-12">

        <h3 class="text-white mt-5 mb-2"><?php echo $header; ?></h3>

        <p class="lead mb-5 text-white-50">

          <?php   //Afficher le nom d'utilisateur, phrase varie suivant l'heure
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
            //Affiche le bouton retour
            echo $retour;

          ?>

          <!-- Bouton déconnexion -->
          <a id="deconnexion" href="index.php?action=deconn" class="btn btn-primary btn-lg">Deconnexion</a>

        </div>      

      </div>

    </div>
  </div>
</header>
