<!doctype html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portefolio">
    <title>Portfolio | Mael</title>
    <link rel="icon" href="SASS/Images/logo.png">

    <!--    STYLESHEET    -->
    <link href="Stylesheet/style.css" rel="stylesheet">

    <!--    FONT-AWESOME CDN    -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" rel="stylesheet">

    <!--    JQUERY    -->
    <script src="SASS/JS/vendor/jquery-3.6.0.min.js"></script>

    <!--    TOASTR    -->
    <link href="Stylesheet/vendor/toastr.min.css" rel="stylesheet">
    <script src="SASS/JS/vendor/toastr.min.js"></script>
</head>

<body>
    <header class="header">
        <input id="trigger-menu" type="checkbox">

        <ul>
            <a href="accueil" class="link-menu">Accueil</a>
            <a href="entreprise" class="link-menu">Entreprise</a>
            <a href="realisation_professionelles" class="link-menu">Réalisations Professionelles</a>
            <a href="veille_technologique" class="link-menu">Veille technologique</a>
            <a href="contact" class="link-menu">Contact</a>
            <li onclick="TriggerMenu()"><i id="close-menu" class="fa-solid fa-caret-up"></i></li>
        </ul>

        <div id="ctn-header-cta">
            <i class="fa-solid fa-moon"></i>
            <i id="open-menu" class="fa-solid fa-bars" onclick="TriggerMenu()"></i>
        </div>
    </header>
        
        <?php  include "View/".$this->view.".view.php" ?>

    <script type="text/javascript">
        function TriggerMenu()
        {
            let trigger = $("#trigger-menu");

            if(trigger.is(":checked"))
                trigger.prop("checked", false);
            else
                trigger.prop("checked", true);
        }
    </script>
</body>

</html>