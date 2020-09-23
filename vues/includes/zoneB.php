<div class="col-md-4 mb-5">

    <h2>Se connecter</h2>

    <hr>

    <form id="saisie" action="control/login.php" method="POST">
        <label>Entrer votre email:</label><br />

        <input type="email" id="email" name="email" placeholder="exemple@gmail.com" size="25" required><br /><br />

        <label>Mot de passe:</label><br />

        <input type="password" id="pass" name="password" size="25" required><br /><br />

        <input type ="submit" value ="Se connecter"/>
    </form>

    <br>

    <p id="msgKO">
        <?php

            if (!isset( $_SESSION["msgErreur"]))
            {

            }

            else
            {               
                echo $_SESSION["msgErreur"];
                unset($_SESSION["msgErreur"]); 
            }
        ?>
    </p>

</div>
