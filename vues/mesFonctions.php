<?php
    //Fonction pour formater la date
    function formatDate($d)
    {
        return strftime("%d/%m/%y", strtotime($d));

    }

?>