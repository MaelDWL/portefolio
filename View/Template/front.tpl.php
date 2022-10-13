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
    <nav class="menu">
        <input id="trigger-menu" type="checkbox">

        <span class="name-menu">Mael DEWULF</span>

        <ul>
            <div class="parent-menu-ctn">
                <a href="accueil" class="link-menu accueil-menu">Accueil</a>

                <div class="sub-menu-ctn sub-accueil">
                    <a class="link-menu" href="accueil">Présentation</a>
                    <a class="link-menu" href="a_propos">À propos</a>
                </div>
            </div>

            <a href="entreprise" class="link-menu">Entreprise</a>
            <a href="realisations_professionelles" class="link-menu">Projets</a>
            <a href="veille_technologique" class="link-menu">Veille technologique</a>
            <a href="contact" class="link-menu">Contact</a>
            <li class="close-menu-cta" onclick="TriggerMenu()"><i id="close-menu" class="fa-regular fa-circle-xmark"></i></li>
        </ul>
    </nav>

    <header class="header">
        <div id="ctn-header-cta">
            <i id="switch-light" class="fa-solid fa-moon"></i>
            <i id="open-menu" class="fa-solid fa-bars" onclick="TriggerMenu()"></i>
        </div>
    </header>
        
    <?php  include "View/".$this->view.".view.php" ?>

    <footer class="footer">
        <div id="social-ctn">
            <a href=""><i class="fa-brands fa-discord"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
            <a href=""><i class="fa-brands fa-github"></i></a>
        </div>

        <span>Copyright © 2022 Mael DEWULF</span>
    </footer>

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