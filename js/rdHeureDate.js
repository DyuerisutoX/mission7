$(document).ready(function ()
{
    const tabMois = new Array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');

    const dateHeureLocale = new Date();
    const jour = dateHeureLocale.getDate();
    const mois = tabMois[dateHeureLocale.getMonth()];
    const annee = dateHeureLocale.getFullYear();
    let heures = dateHeureLocale.getHours();
    let minutes = dateHeureLocale.getMinutes();
    let messageAccueil = "";

    switch (true)
    {
        case heures < 12:
            messageAccueil = "Bonjour !";
            break;

        case heures < 18:
            messageAccueil = "Bonne après-midi !";
            break;

        default:
            messageAccueil = "Bonsoir !";
    }

    heures = heures > 9 ? heures : "0" + heures;
    minutes = minutes > 9 ? minutes : "0" + minutes;

    if (jour !== "1")   // ajoute "er" en exposant quand la date indique le premier
    {

        $("#msg").append(messageAccueil);

        $("#zoneDateEtHeure").append(`
            Nous sommes le : ${jour} ${mois} ${annee}, et il est ${heures}:${minutes} sur votre navigateur<br>
        `);
    }
    else
    {
        $("#zoneDateEtHeure").append(`
        Nous sommes le : ${jour} ${mois} ${annee}, et il est ${heures}:${minutes} sur votre navigateur<br>
        `);
    }
});
