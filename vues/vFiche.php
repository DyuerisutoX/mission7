<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fiche Stagiaire</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/ficheStag.css" rel="stylesheet">

  <!-- Script jquery -->
  <script src="vendor/jquery/jquery.js"></script>


</head>

<body>

    <!-- Header -->

    <?php
        include "includes/headerComm.php";
    ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Affiche profil du stagiaires -->

        <?php
            echo $profil;
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