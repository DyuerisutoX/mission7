<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Trombinoscope</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/styleTrombi.css" rel="stylesheet">

</head>

<body>

    <!-- Header -->

    <?php
        include "includes/headerComm.php";
    ?>

        <!-- Page Content -->
    <div class="container">


      <!-- /.row -->

      <?php
          include "vues/includes/trombi/rechSection.php";
      ?>

      <?php
          include "vues/includes/trombi/rechInitiales.php";
      ?>


      <!-- /.row -->

      </div>
      <!-- /.container -->

      <?php
        include "includes/footerComm.php";
        ?>



  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Supprimer ↓-->
  <!-- <script src="js/rdHeureDate.js"></script> -->


</body>

</html>

