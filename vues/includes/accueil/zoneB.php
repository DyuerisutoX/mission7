<div class="col-md-4 mb-5">

    <?php
        if ((isset($_SESSION["valEmail"])) && (isset($_SESSION["valPassword"])))
        {
            include "sessionCo.php";
        }

        else
        {
            include "formConnex.php";
        }
    ?>

    <br>

    <!-- <h2>Se connecter</h2>

    <hr>

    <form id="saisie" action="index.php?action=connex" method="POST">
        <label>Entrer votre email:</label><br />

        <input type="email" id="email" name="email" placeholder="exemple@gmail.com" size="25" required><br /><br />

        <label>Mot de passe:</label><br />

        <input type="password" id="pass" name="password" size="25" required><br /><br />

        <input type ="submit" value ="Se connecter"/>
    </form> -->

    <br>

    <p id="msgKO">
        <?php
            echo $msgErreur;
        ?>
    </p>


</div>
