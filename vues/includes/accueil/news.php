<div class="row">
    <?php

        //Créer les news sous forme de cartes bootstrap
        foreach($tabNews as $news)
        {
            //Créer des vars pour stocker les valeurs de la bdd
            $date = formatDate($news['dat']);
            $titre = $news['titre'];
            $texte = $news['lib'];

            echo " 
            <div class='col-md-4 mb-5'>
                <div class='card h-100'>
                    <img class='card-img-top' src='https://placehold.it/300x200' alt=''>
        
                    <div class='card-body'>
                        <h4 class='card-title'>$titre : $date</h4>
                        <p class='card-text'>$texte</p>
                    </div>
        
                    <div class='card-footer'>
                        <a href='#' class='btn btn-primary'>Find Out More!</a>
                    </div>
                </div>
            </div>";

        }

    ?>
      
</div>