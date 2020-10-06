<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Sections</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/styleSect.css" rel="stylesheet">

  <!-- Script jquery -->
  <script src="vendor/jquery/jquery.js"></script>


</head>

<body>

    <!-- Header -->

    <?php
        include "includes/headerComm.php";
    ?>

    <!-- Corps principale de la page -->
    <div class="container">

        <h1> 

            <?php 
                //Affiche titre de la section
                echo $titre;
            ?>

        </h1>

        <!-- /.row -->

        <?php
            include "includes/section/bodySection.php";
        ?>

        <!-- /.row -->

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