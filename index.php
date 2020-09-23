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

  <title>Business Frontpage - Start Bootstrap Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
    <?php
        include "vues/includes/nav.php";
    ?>
  <!-- Header -->

    <?php
        include "vues/includes/header.php";
    ?>

  <!-- Page Content -->
  <div class="container">

        <div class="row">

            <?php
                include "vues/includes/zoneA.php";
            ?>

            <?php
                include "vues/includes/zoneB.php";
            ?>

        </div>

        <!-- /.row -->

        <?php
            include "vues/includes/news.php";
        ?>

        <!-- /.row -->

  </div>
  <!-- /.container -->

    <?php
        include "vues/includes/footer.php";
    ?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Supprimer ↓ -->
  <!-- <script src="js/rdHeureDate.js"></script> -->


</body>

</html>