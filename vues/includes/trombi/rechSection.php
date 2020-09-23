<?php
    include "./data/liSections.php";
?>

<h2 id="tiSect">Rechercher les stagiaires par sections: </h2><br>

<div class="row">

    <?php 

        foreach ($section as list($a, $b, $c, $d))
        {
            echo "<div class=\"col-md-4 mb-5\">
            <div class=\"card h-100\">
                <img class=\"card-img-top\" src=\"https://placehold.it/300x200\" alt=\"\">
                
                <div class=\"card-body\">
                    <h4 class=\"card-title\">" .$b. "</h4>
                        <p lass=\"card-text\">
                        <ul>
                            <li>Code Section: " .$a. "</li>
                            <li>Date de début: " .$c. "</li>
                            <li>Nbre Stagiaires: " .$d. "</li>
                        </ul>
                        </p>
                </div>
    
                <div class=\"card-footer\">
                    <a href=\"#\" class=\"btn btn-primary\">Check This!</a>
                </div>
    
            </div>
        </div>";
        }

    ?>

</div>