<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Jura:wght@300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&family=Lato:wght@100&display=swap" rel="stylesheet">
    <script src="script.js" defer></script>
    <script src="regex.js" defer></script>
    <title>THE X</title>
</head>
<body>

    <!-- HEADER LOGO + NAV-->
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <img src="images/ppega.jpeg" alt="Logo" id="logo">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#portofolio__ancre">Portofolio</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#contact__ancre">AnyQuestions?</a>
                        </li>
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Downloads
                        </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="images/onlinecv.pdf" target="_blank">Curriculum Vitae</a></li>
                    </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- FIRST SECTION 'PRESENTATION'-->
        <section>
            <div class="section__presentation section__presentation--color">
                <h1 class="name">XAVIER MAILLOT</h1>
                <hr>
                <div class="presentation__container">
                    <div class="presentation__photo">
                    </div>
                    <div class="presentation__description">
                        <p>WEB</p>
                        <p>DEVELOPER</p>
                        <p>&</p>
                        <p>MOBILE</p>
                        <p>WEB</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECOND SECTION 'PORTOFOLIO' -->
        <section>
            <!-- BOULES ANIMATION ILY -->
            <div class="portofolio--color">
                <div class="boules__decoration">
                    <div class="boule">I</div>
                    <div class="boule boule__size">&#x2764;</div>
                    <div class="boule">L</div>
                    <div class="boule">U</div>
                    <div class="boule">V</div>
                    <div class="boule boule__size">&#x2764;</div>
                    <div class="boule">U</div>
                </div>
                <!-- PORTOFOLIO -->
                <h1 id="portofolio__ancre" class="portofolio__title">PORTOFOLIO</h1>
                <div class="portofolio__container">
                    <div class="portofolio">
                        <a href="https://github.com/xavmllt/astronomy_project" target="_blank"><img src="images/astronomy.png" alt="Page d'accueil ASTRONOMY"></a>
                    </div>
                    <div class="portofolio">
                        <a href="https://github.com/xavmllt/astronomy_project" target="_blank"><img src="images/orangenebula.png" alt="Orange NEBULA"></a>
                    </div>
                    <div class="portofolio">
                        <img src="images/imc.png" alt="IMC project">
                    </div>
                </div>
            </div>

        <!-- THIRD SECTION 'FORM' -->
        <section>
            <h2 id="contact__ancre" class="section__form--title">CONTACT ME</h2>
            <div class="section__form">
                <form action="" method="post" id="form">
                    <div class="form__input">
                        <h3 class="form__title">HERE &#x21E3;</h3>
                        <label for="nom">Last Name :</label>
                        <input type="text" name="nom" id="nom" required>
                        <label for="prenom">First Name :</label>
                        <input type="text" name="prenom" id="prenom" required>
                        <label for="email">E-Mail :</label>
                        <input type="email" name="email" id="email" required>
                        <label for="tel">Phone :</label>
                        <input type="tel" name="tel" id="tel" required>
                        <input type="submit" value="Send">
                    </div>
                    <div class="form__textarea">
                        <textarea name="textarea" id="textarea" cols="30" rows="10" placeholder="any message.."></textarea>
                    </div>  
                </form>
            </div>
        </section>
    </main>

    <!-- FOOTER PART -->
    <footer>
        <div class="contenu-footer">
            <div class="bloc footer-services">
                <h3>What I do ?</h3>
                <ul class="liste-services">
                    <li>Website Design</li>
                    <li>Web Development</li>
                    <li>Database Management</li>
                    <li>Database Integration</li>
                </ul>
            </div>
            <div class="bloc footer-contact">
                <h3>Keep in touch !</h3>
                <p>FRANCE</p>
            </div>
            <div class="bloc footer-medias">
                <h3>Social medias</h3>
                <ul class="liste-medias">
                    <li><a href="https://github.com/xavmllt" target="_blank"><img src="images/GitHub-Mark.png" alt="Github">&ensp; Github</a></li>
                    <li><a href="https://www.linkedin.com/in/jean-françois-xavier-maillot-485906294/" target="_blank"><img src="images/logo-linkedin-noir-et-blanc.webp" alt="Linkedin">&ensp; Linkedin</a></li>
                </ul>
            </div>
        </div>
        <div id="marque">&copy;THE X TOUT DROITS RÉSERVÉS</div>
    </footer>

    <?php
    include_once('connexionbdd.php');
    ?>
</body>
</html>