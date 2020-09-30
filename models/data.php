<?php

    function getLogin () : array
    {
        return 
        [
            ["nicolaslawshun@gmail.com", "Nicolas", "azerty"],
            ["dyuerisutox974@gmail.com", "Yugi", "magician"],
            ["luffy1010@hotmail.com", "Luffy", "onepiece"],
            ["toto@gmail.com", "Toto", "t"]
        ];    

    }

    function getListeSec() : array
    {
        return 
        [
            ["DWWM", "Développeur Web et Web Mobile", "12/03/20", 14, "dwwm"],
            ["TSSR", "Technicien Supérieur en Systèmes et Réseau", "20/07/19", 16, "tssr"],
            ["DW", "Designer Web", "15/08/19", 15, "dw"],
            ["DC", "Digital Codeur", "29/09/19", 14, "dc"],
            ["DR", "Digital Repair", "05/10/19", 15, "dr"],
            ["SR", "Serveur(se) en Restauration", "31/08/20", 17, "sr"]

        ];
    }

    function getInitiales() : array
    {
        return ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];

    }

    function getListeStag() : array
    {
        return 
        [
            ["DWWM", "AF203", "Mark D.", "Littlefield", "01/03/1975", "248-588-0351", "Chicago", "MarkDLittlefield@jourrapide.com", "Oui", "dwwm_01"],
            ["DWWM", "AF505", "Louvenia D.", "Vigue", "11/03/1986", "478-987-7877", "New-York", "LouveniaDVigue@rhyta.com", "Non", "dwwm_02"],
            ["DWWM", "AF954", "Bret V.", "Reber", "17/01/1971", "Moristown", "973-539-9301", "BretVReber@dayrep.com", "Non","dwwm_03"],
            ["DWWM", "AF621", "Ernest", "Faucher", "27/02/1995", "Amiens", "03.01.41.38.38", "ErnestFaucher@jourrapide.com", "Oui","dwwm_04"],
            ["TSSR", "AF362", "Trinette", "Lamoureux", "20/10/1983", "Lyon", "04.72.28.01.91", "TrinetteLamoureux@jourrapide.com", "Non","tssr_01"],
            ["DC", "AF033", "Mireille", "Gaudreau", "08/07/196", "Paris", "01.87.21.93.12", "MireilleGaudreau@jourrapide.com ", "Non","dc_01"]

        ];
    }

    function getNews($latest) : array
    {
        if ($latest == 3)
        {
            return 
            [
                ["One Piece", "Le roi des pirates, çe sera moi !"],
                ["Yu-Gi-Oh!", "C'est l'heure du Duel !"],
                ["Naruto", "Je ne renonçerais pas à mon rêve de devenir Hokage"]
            ];
    
        }

        else if ($latest == 2)
        {
            return 
            [
                ["One Piece", "Le roi des pirates, çe sera moi !"],
                ["Yu-Gi-Oh!", "C'est l'heure du Duel !"]
            ];
        }
    }




?>

