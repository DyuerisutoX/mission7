<?php
    include "./data/stagiaires.php";
    
    if (isset($_GET['sec']))
    {

?>

    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dignissimos consequuntur quisquam at, soluta illum numquam totam beatae eligendi illo fugiat distinctio molestias id 
    veritatis eos animi dolorum optio labore.
    </p>

    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dignissimos consequuntur quisquam at, soluta illum numquam totam beatae eligendi illo fugiat distinctio molestias id 
    veritatis eos animi dolorum optio labore.
    </p>

    <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia dignissimos consequuntur quisquam at, soluta illum numquam totam beatae eligendi illo fugiat distinctio molestias id 
    veritatis eos animi dolorum optio labore.
    </p>

    <br>

    <div class="row">

        <?php

            $stagiaires = getListeStag();
            $read = 0;

            for($st = 0 ; $st < count($stagiaires) ; $st++)
            {
                if ($_GET['sec'] !== $stagiaires[$st][0] && $_GET['sec'] !== strtolower($stagiaires[$st][0]))
                {
                    $read += 1;
                }

            }

            if ($read == count($stagiaires))
            {
                include "aucunStag.php";
            }

            else
            {
                include 'affichStag.php';
            }

        ?>

    </div>

<?php
    }

    else
    {
        echo "<h1>Veuillez revenir en arrière.</h1>";
    }
?>