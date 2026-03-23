<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo.svg" type="image/svg+xml">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact.css')}}">
    <link rel="shortcut icon" href="../img/logo.svg" type="image/svg+xml">

    <title>OriCeft - Contactez Nous</title>
</head>

<body>

    <body>
        <!-- NAV 
        <nav class="nav">
            <div class="nav-inner">
                <a href="#" class="nav-brand">Ori<span>ceft</span></a>
                <ul class="nav-links" id="navLinks">
                    <li><a href="./accueil.html">Accueil</a></li>
                    <li><a href="./index.html">Orientation</a></li>
                    <li><a href="./filierealoura.html">Filières</a></li>
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
        </nav>
        -->
        <header>
            <div class="navbar">
                <div class="mklogo">
                    <a href="/html/accueil.html" class="logo">
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
                                <ul class="navlink">
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route('filiere')}}">Filières</a></li>
                <li class="page-active"><a href="{{route('contact')}}">Contact</a></li>
                <li><a href="{{route('equipe')}}">Equipes</a></li>
            </ul>
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

        <!-- HERO -->
        <section class="hero">
            <div class="hero-bg"></div>
            <h1>Contactez-nous</h1>
            <p>Une question sur l'orientation ou les inscriptions ? Notre équipe est là pour vous aider.</p>
        </section>

        <!-- CONTENT -->
        <div class="container">

            <!-- INFO CARDS -->
            <div class="info-grid">
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                            <circle cx="12" cy="10" r="3" />
                        </svg>
                    </div>
                    <h3>Adresse</h3>
                    <p>Douala, Cameroun
                        Quartier Bali</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.362 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0 1 22 16.92z" />
                        </svg>
                    </div>
                    <h3>Téléphone</h3>
                    <p>+237 6XX XXX XXX</p>
                </div>
                <div class="info-card">
                    <div class="info-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                    </div>
                    <h3>Email</h3>
                    <p>contact@oriceft.cm</p>
                </div>
            </div>

            <!-- FORM -->
            <div class="form-wrapper">
                <div id="formContent">
                    <h2>Envoyez-nous un message</h2>
                    <form id="contactForm">
                        <div class="form-row">
                            <div class="field">
                                <label>Nom</label>
                                <input type="text" placeholder="Votre nom" required />
                            </div>
                            <div class="field">
                                <label>Prénom</label>
                                <input type="text" placeholder="Votre prénom" required />
                            </div>
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <input type="email" placeholder="votre@email.com" required />
                        </div>
                        <div class="field">
                            <label>Sujet</label>
                            <select>
                                <option>Orientation scolaire</option>
                                <option>Inscriptions</option>
                                <option>Informations générales</option>
                                <option>Autre</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Message</label>
                            <textarea rows="4" placeholder="Votre message..." required></textarea>
                        </div>
                        <button type="submit" class="btn-submit">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13" />
                                <polygon points="22 2 15 22 11 13 2 9 22 2" />
                            </svg>
                            Envoyer
                        </button>
                    </form>
                </div>
                <div class="success" id="successMsg">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                        <polyline points="22 4 12 14.01 9 11.01" />
                    </svg>
                    <h2>Message envoyé !</h2>
                    <p>Nous vous répondrons dans les plus brefs délais.</p>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="footer">
            <p><strong>Oriceft</strong> — Douala, Cameroun</p>
            <p style="margin-top:8px">© 2026 Oriceft. Tous droits réservés.</p>
        </footer>

        <script>
            document.getElementById('contactForm').addEventListener('submit', function (e) {
                e.preventDefault();
                document.getElementById('formContent').style.display = 'none';
                document.getElementById('successMsg').style.display = 'block';
            });
        </script>
        <script>
            const menuToogle = document.querySelector('.hamburgerToogle');
            const menuLinks = document.querySelector('.navlink');
            menuToogle.addEventListener('click', function () {
                menuLinks.classList.toggle('active');
                menuToogle.classList.toggle('active');
            })
        </script>

    </body>
</body>

</html>