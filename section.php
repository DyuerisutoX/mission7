<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>
      <?php
        if(!(isset($_SESSION["valEmail"])) && !(isset($_SESSION["valPassword"])))
        {//Si on force l'entrer de la page en dur 
            echo "ERREUR login";
        }

        else
        {
          echo "Section";
        }
      ?>
    
  </title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/styleSect.css" rel="stylesheet">

  <!-- Script jquery -->
  <script src="vendor/jquery/jquery.js"></script>


</head>

<body>

  <?php   //cas d'erreur ==> retour vers index.php
      if( ! (isset ($_SESSION["valEmail"]) ) && !(isset ($_SESSION["valPassword"]) ) )
      {//Si on force l'entrer de la page en dur 
        include "vues/includes/trombi/erreurLogin.php";
      }

      else
      {

  ?>

        <!-- Header -->

          <?php
              include "vues/includes/section/headerSect.php";
          ?>

          <!-- Page Content -->
        <div class="container">

        <h1> 

            <?php 

                include "vues/includes/section/titresSections.php";
            ?>

        </h1>


      <!-- /.row -->

      <?php
        //   include "vues/includes/trombi/rechSection.php";
      ?>

      <?php
        //   include "vues/includes/trombi/rechInitiales.php";
      ?>


      <!-- /.row -->

      </div>
      <!-- /.container -->

      <?php
        //   include "vues/includes/footer.php";
      ?>

<?php
  }
?>


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/main.js"></script>


</body>

</html>