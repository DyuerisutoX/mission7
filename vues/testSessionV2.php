<?php
    //page de menu qui test l'existence des var de session
    //et affiche soit le menu, soit un message d'erreur
    session_start();
    include "../data/login.php";
    

?>


<p>Connexion OK</p>
<form action="testDestroy.php">
    <input type="submit" value="Déconnexion">
</form>


<?php
    echo $_SESSION["valName"]. "<br>";
    echo $_SESSION["testI"]. "<br>";


?>
