

<?php   
    
    if (isset($_SESSION["valEmail"])  && isset($_SESSION["valPassword"] ))
    {//Si valeur de la variable SESSION["valEmail"] et SESSION["valPassword"] correspond aux valeur du tableau login
        session_unset();
        session_destroy(); //destroy the session
    
    
        header("location:index.php?action=acc"); //to redirect back to "index.php" after logging out
        // exit();
    }
?>