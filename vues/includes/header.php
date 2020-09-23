<header class="bg-primary py-5 mb-5">

    <div class="container h-100">
      <div class="row h-100 align-items-center">

        <div class="col-lg-6">

          <h1 id="msg" class="display-4 text-white mt-5 mb-2">

            <?php   //Afficher le nom d'utilisateur
              date_default_timezone_set("Indian/Reunion");
               switch(true)
               {
                   case strftime("%R") < 12:
                   echo "Bonjour";
                   break;

                   case strftime("%R") < 18:
                   echo "Bon après-midi";
                   break;

                   default:
                   echo "Bonsoir";
               }
            ?>

          </h1>

          <p id="zoneDateEtHeure"class="lead mb-5 text-white-50">
          <?php
                setlocale(LC_TIME, 'french');    // indique que PHP doit envoyer des mots en français (ex : date)
                //date_default_timezone_set("Indian/Reunion");

                strftime("%e %B %Y");

                if (strftime("%e") !== "1")   // ajoute "er" en exposant quand la date indique le premier
                {
                  echo "Nous sommes le " .strftime("%e %B %Y") . ", ";
                  //var_dump(strftime($dateT2));
                }
                else
                {
                  echo strftime("%e<sup>er</sup> %B %Y") . ", ";
                }
          
                echo " et il est " .strftime("%R") . "<br>";

              ?>
          </p>

        </div>

        <div class="col-lg-6">

          <img id="aLaUne" src="medias/img/aLaUne.png" alt="alaune">

        </div>


      </div>
    </div>

</header>
