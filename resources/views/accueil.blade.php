<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OriCeft - Trouve ton chemin</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">
    <link rel="shortcut icon" href="../img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/accueil_responsive.css')}}">
</head>

<body>
    <!-- NAV -->
    <!-- <nav class="nav">
        <div class="nav-inner">
            <a href="#" class="nav-brand">Ori<span>ceft</span></a>
            <ul class="nav-links" id="navLinks">
                <li><a href="./accueil.html">Accueil</a></li>
                <li><a href="./index.html">Orientation</a></li>
                <li><a href="./filiere.html">Filières</a></li>
                <li><a href="./resultat.html">Résultats</a></li>
                <li><a href="./contact.html" class="active">Contact</a></li>
            </ul>
            <button class="burger" onclick="document.getElementById('navLinks').classList.toggle('open')">
                <svg viewBox="0 0 24 24" fill="none">
                    <line x1="3" y1="6" x2="21" y2="6" />
                    <line x1="3" y1="12" x2="21" y2="12" />
                    <line x1="3" y1="18" x2="21" y2="18" />
                </svg>
            </button>
        </div>
    </nav> -->
    <header>
        <div class="navbar">
            <div class="mklogo">
                <a href="accueil.html" class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="lucide lucide-graduation-cap h-7 w-7 text-primary-foreground">
                        <path
                            d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z">
                        </path>
                        <path d="M22 10v6"></path>
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                    </svg>
                    OriCeft
                </a>
            </div>
            <ul class="navlink">
                <li class="page-active"><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route('filiere')}}">Filières</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('equipe')}}">Equipes</a></li>
            </ul>
            <div class="links">
                <div class="trynow">
                   <a href="{{route('index')}}">commencer l'orientation</a>
                </div>
                <div class="hamburgerToogle">
                    <div class="trait"></div>
                </div>
            </div>
        </div>
    </header>
    <!-- barre de tache -->
    <main>
        <section class="hero">
            <div class="hero-inner">
                <div class="hero-content">
                    <span class="hero-tag"><i class="fas fa-compass" style="margin-right: 6px;"></i> Oriente Ton
                        Avenir</span>
                    <h1>Trouve ton chemin avec <span class="highlight">l'intelligence artificielle</span></h1>
                    <p>Notre quizz interactif intelligent analyse tes compétences et te guide vers les filières et
                        métiers
                        qui te correspondent vraiment.</p>
                    <div class="cta-group">
                        <a href="mainpageapp.html" class="btn btn-primary"><i class="fas fa-compass"
                                style="font-size: 1rem;"></i> Commencer le
                            Quizz</a>
                        <a href="filiere.html" class="btn btn-secondary"><i class="fas fa-gem"></i> Explorer les
                            Filières</a>
                    </div>
                </div>
                <div class="hero-illustration">
                    <div class="img"><img src="{{asset('img/OriceftStudents3.png') }}" alt="etudiant" width="450px"></div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-brain"></i></div>
                <h3>Analyse Intelligente</h3>
                <p>Notre IA analyse tes réponses en temps réel pour te proposer les meilleures orientations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Recommandations Précises</h3>
                <p>Découvre des filières et des métiers adaptés à ton profil unique et tes aspirations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-bolt"></i></div>
                <h3>Rapide et Efficace</h3>
                <p>Obtiens tes résultats instantanément et commence à explorer tes opportunités.</p>
            </div>
        </section>
        <!-- filieres -->
        <section class="infofilieres">
            <div class="contenu">
                <div class="xplore">
                    <h1>Explorer les filières</h1> <br>
                    <div class="msgfilieres-content">
                        <div class="msgfilieres">Découvrez les parcours qui corresspondent le mieux à votre profil parmi
                            l'enseignement <br> général et tèchnique. <div class="xplorefili"> <a
                                    href="filiere.html">Voir toutes les filières ></a></div>
                        </div>
                    </div>
                </div>
                <div class="container-card">
                    <div class="fili-card">
                        <div class="msgfili-active general-active">Enseignement général</div>
                        <div class="txtfili">
                            <h3>Science,Litérature & TI</h3>
                        </div>
                        <div class="msgfili">Pour ceux qui aspirent aux carrières médicales,juridiques, <br>
                            litteraires ou à la recherche fondamentisée.Des parcours riches en <br>
                            théorie et en culture</div>
                        <div class="deboucher-fili">
                            <ul>
                                <li>Medecine et Pharmacie</li>
                                <li>Avocat</li>
                                <li>Génie Logiciel & IA</li>
                            </ul>
                        </div>
                        <div class="xplorefili-btn btngeneral"><a href="filiere.html"
                                class="btn btn-primary">Explorer le général</a></div>
                    </div>
                    <div class="fili-card">
                        <div class="msgfili-active technic-active">Enseignement technique</div>
                        <div class="txtfili">
                            <h3>Ingenierie,Comptabilité </h3>
                        </div>
                        <div class="msgfili">Pour les esprits pratiques tournés vers l'innovation,l'informatique <br> le
                            génie civil ou les mètiers industriels à forte employabilité.</div>
                        <div class="deboucher-fili">
                            <ul>
                                <li>Expert comptable</li>
                                <li>Maintenance industrielle</li>
                                <li>Chaudraunier</li>
                            </ul>
                        </div>
                        <div class="xplorefili-btn"><a href="filiere.html" class="btn btn-secondary"> Explorer la
                                technique</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- action pour commencer ou voir les membres  -->
        <section class="go">
            <div class="container-go">
                <h2>Pret á découvrir votre avenir?</h2>
                <p>OriCeft(Orientation Cefti) 100% gratuit, <br> n'hésitez pas á commencer votre quizz!</p>
                <div class="go-or-contact">
                    <a href="démo.html" class="btn btn-primary"><i class="fas fa-play"></i> Voir la demo</a>
                    <a href="equipe.html" class="btn btn-secondary"><i class="fas fa-users"></i> voir les developpeurs </a>
                </div>
            </div>
        </section>
    </main>
    <!-- FOOTER -->
    <footer class="footer">
        <p><strong>Oriceft</strong> — Douala, Cameroun</p>
        <p style="margin-top:8px">© 2026 Oriceft. Tous droits réservés.</p>
    </footer>

</body>
<script>
    const menuToogle = document.querySelector('.hamburgerToogle');
    const menuLinks = document.querySelector('.navlink');
    menuToogle.addEventListener('click', function () {
        menuLinks.classList.toggle('active');
        menuToogle.classList.toggle('active');
    })
</script>

</html>