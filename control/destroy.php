<?php   
    session_start(); //to ensure you are using same session
    
        unset($_SESSION["valEmail"]); 
        unset($_SESSION["valPassword"]); 
        session_destroy(); //destroy the session

    header("location:/mission7/index.php"); //to redirect back to "index.php" after logging out
    exit();
?>