<main id="academie-heroique" class="main-content project">
    <section class="content-section">
        <input id="nav-project-home" class="nav-project" type="radio" name="project-navigation" checked>
        <input id="nav-project-manage" class="nav-project" type="radio" name="project-navigation">
        <input id="nav-project-display" class="nav-project" type="radio" name="project-navigation">

        <div class="project_navigation">
            <h1 class="title title-primary">Mes Projets</h1>

            <nav>
                <label id="nav-label-project-home" for="nav-project-home">Projet</label>
                <label id="nav-label-project-manage" for="nav-project-manage">Gestion de Projet</label>
                <label id="nav-label-project-display" for="nav-project-display">Visuel</label>
            </nav>
        </div>

        <div id="project-home">
            <h1 class="title title-project">ACADÉMIE - HÉROIQUE <img src="/SASS/Images/checked.png"></h1>

            <img class="showcase" src="../Public/Projets/showcase_auacademy.png">

            <div class="specifications">
                <span class="tag tag-end-project">Terminé en avril 2022</span>
                <h2 class="title title-secondary">Cahier des charges</h2>

                <div class="specifications-list">
                    <div class="specification context">
                        <h3 class="title title-secondary">Contexte du projet</h3>

                        <p>
                            Nous travaillons pour un manga réputé qui souhaite être adapté en jeu vidéo, son thème est
                            une académie rempli de Héros. Nous devons le réadapter sous forme de jeu textuel.
                        </p>
                    </div>

                    <div class="specification purpose">
                        <h3 class="title title-secondary">Objectif du projet</h3>

                        <p>
                            L’objectif est de réaliser un script en Python, ayant comme but d’utiliser les fonctions,
                            les conditions, les listes et les dictionnaires sous forme d’un jeu textuel jouable via le
                            terminal.
                        </p>
                    </div>

                    <div class="specification deployment">
                        <h3 class="title title-secondary">Déploiement</h3>

                        <p>
                            Le projet n’est pas en ligne.
                        </p>
                    </div>

                    <div class="specification documents">
                        <h3 class="title title-secondary">Documents</h3>

                        <div class="documents-list">
                            <a class="file" href="#">
                                <i class="fa-solid fa-file-lines"></i>
                                <label>Cahier des charges</label>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="realisations">
                <h2 class="title title-secondary">Réalisation</h2>

                <div class="realisations-list">
                    <div class="realisation condition">
                        <h3 class="title title-secondary">Conditions de réalisation</h3>

                        <p>
                            Dans un premier temps, nous devons réfléchir au contexte et à l’histoire tout en sachant
                            qu’il faut respecter une suite logique de chaque événement pouvant se produire dans
                            l’académie.
                            <br><br>
                            Ensuite, avant de pouvoir jouer, il faut créer son personnage en rentrant ces informations :
                            pouvoirs, nom, prénom, age. Le personnage peut : observer, manger, demander, combattre
                            selon les différentes pièces où il se situe.
                            <br><br>
                            Enfin, le personnage peut se déplacer dans les pièces, et avoir des interactions
                            différentes selon chaque pièces de l’académie. Le but étant de finir le jeu.
                        </p>
                    </div>

                    <div class="realisation testing-phase">
                        <h3 class="title title-secondary">Phase de Test</h3>

                        <div class="phase-list">
                            <div class="phase">
                                <div class="phase-step">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <i class="fa-solid fa-arrow-rotate-left"></i>
                                    <span>Tests unitaires</span>
                                </div>

                                <label class="phase-process">Réalisation de test pour chaque composants du code</label>
                            </div>

                            <div class="phase">
                                <div class="phase-step">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <i class="fa-regular fa-user"></i>
                                    <span>Tests utilisateurs</span>
                                </div>

                                <label class="phase-process">Demande de feedback à un utilisateur pour adapter le code par la suite</label>
                            </div>

                            <div class="phase">
                                <div class="phase-step">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <i class="fa-solid fa-car-side"></i>
                                    <span>Tests fonctionnels</span>
                                </div>

                                <label class="phase-process">Vérification du script par rapport au cahier des charges</label>
                            </div>

                            <div class="phase">
                                <div class="phase-step">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <i class="fa-regular fa-copy"></i>
                                    <span>Tests d'intégration</span>
                                </div>

                                <label class="phase-process">Vérification pour que chaque parties du code fonctionnent ensembles</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="project-manage">
            <h1 class="title title-project">ACADÉMIE - HÉROIQUE <img src="/SASS/Images/checked.png"></h1>

            <!-- RESSOURCES -->
            <div class="ressources">
                <h2 class="title title-secondary">Ressources numériques</h2>

                <div class="ressources-list">
                    <div class="ressource">
                        <h3 class="title title-secondary">Technologies</h3>

                        <div class="technology-list">
                            <div class="technology">
                                <img class="skill-icn" src="/SASS/Images/python.png">
                                <label>Python</label>
                            </div>
                        </div>
                    </div>

                    <div class="ressource">
                        <h3 class="title title-secondary">Environnement de développement</h3>

                        <div class="technology-list">
                            <div class="technology">
                                <img class="skill-icn" src="/SASS/Images/visual_studio_code.png">
                                <label>Visual Studio</label>
                            </div>
                        </div>
                    </div>

                    <div class="ressource">
                        <h3 class="title title-secondary">Système de suivi</h3>

                        <div class="technology-list">
                            <div class="technology">
                                <img class="skill-icn" src="/SASS/Images/github.png">
                                <label>GitHub</label>
                            </div>

                            <div class="technology discord">
                                <i class="fa-brands fa-discord"></i>
                                <label>Discord</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- MANAGING PROJECT -->
            <div class="manages">
                <h2 class="title title-secondary">Gestion de projet</h2>

                <div class="manages-list">
                    <div class="manage">
                        <h3 class="title title-secondary">Gestion temporelle</h3>

                        <div class="completion-time">
                            <div class="ctn-key-value">
                                <div class="key">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    <i class="fa-regular fa-clock"></i>
                                    <span>Temps de réalisation :</span>
                                </div>

                                <p class="value">
                                    3 semaines
                                    <br>
                                    (Du 20 octobre 2022 au 9 novembre 2022)
                                </p>
                            </div>

                            <span>Le délais de réalisation a bien été respecté.</span>
                        </div>
                    </div>

                    <div class="manage">
                        <h3 class="title title-secondary">Informations supplémentaires</h3>

                        <div class="more-information">
                            <div class="ctn">
                                <i class="fa-regular fa-user"></i>
                                <span>Projet en individuel</span>
                            </div>

                            <div class="ctn">
                                <i class="fa-solid fa-diagram-project"></i>
                                <span>Projet BTS 1</span>
                            </div>

                            <div class="source">
                                <span class="key">Source :</span>
                                <span class="value">Mickaël Hubert - Exercice Python Billeterie </span>
                            </div>
                        </div>
                    </div>

                    <div class="manage">
                        <h3 class="title title-secondary">Compétences</h3>

                        <div class="skill">
                            <span>Travail en autonomie</span>
                            <span>Script Python</span>
                            <span>Gestion de temps</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="project-display">
            <h1 class="title title-project">ACADÉMIE - HÉROIQUE <img src="/SASS/Images/checked.png"></h1>

            <div class="code-snippet">
                <h2 class="title title-secondary">Extrait de code</h2>

                <div class="code-snippet-list">
                    <div class="snippet">
                        <img src="../Public/Projets/snippet_auacademy_1.png">
                    </div>

                    <div class="snippet">
                        <img src="../Public/Projets/snippet_auacademy_2.png">
                    </div>

                    <div class="snippet">
                        <img src="../Public/Projets/snippet_auacademy_3.png">
                    </div>
                </div>
            </div>

            <div class="project-visual">
                <h2 class="title title-secondary">Visuel du projet</h2>

                <div class="ctn-project-visual">

                </div>
            </div>
        </div>
    </section>
</main>