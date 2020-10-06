<div class="col-md-4 mb-5">

    <?php
        if ((isset($_SESSION["valEmail"])) && (isset($_SESSION["valPassword"])))
        {   //Message de session si co au site
            include "sessionCo.php";
        }

        else
        {   //Formulaire de co
            include "formConnex.php";
        }
    ?>

    <br><br>

    <!-- Message d'erreur de co ou d'expiration -->
    <p id="msgKO">
        <?php
            echo $msgErreur;
        ?>
    </p>


</div>
