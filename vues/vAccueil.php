<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Accueil</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
    <?php
        include "includes/accueil/nav.php";
    ?>
  <!-- Header -->

    <?php
        include "includes/accueil/header.php";
    ?>

  <!-- Page Contenu -->
  <div class="container">

    <!-- Zone A: lorem -->
    <div class="row">

      <?php
        include "includes/accueil/zoneA.php";
      ?>
      <!-- Zone B: Form de connexion + zne msg Erreur -->
      <?php
        include "includes/accueil/zoneB.php";
      ?>

    </div>

    <!-- Zone News -->

    <?php
        include "includes/accueil/news.php";
    ?>

  </div>

  <!-- Footer -->

  <?php
    include "includes/footerComm.php";
  ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</body>

</html>