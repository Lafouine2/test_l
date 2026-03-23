<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OriCeft - Filières</title>
    <link rel="shortcut icon" href="/img/logo.svg" type="image/svg-xml">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/filiere.css')}}">
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}" type="image/svg+xml">
</head>

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
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li class="page-active"><a href="{{route('filiere')}}">Filières</a></li>
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
    <!-- ── HERO ── -->
    <section class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content">
            <p class="hero-label">Offres de formation</p>
            <h1 class="hero-title">Nos Filières</h1>
            <p class="hero-desc">Découvrez nos programmes académiques adaptés à tous les profils,<br>du Baccalauréat au
                Doctorat.</p>
        </div>
    </section>
    <section class="filieres-section">
        <div class="container">

            <div class="tab-bar">
                <button class="tab-btn active" data-tab="generale">
                    <span class="tab-icon">📚</span> Généraliste
                </button>
                <button class="tab-btn" data-tab="technique">
                    <span class="tab-icon">⚙️</span> Technicien
                </button>
                <button class="tab-btn" data-tab="commerciale">
                    <span class="tab-icon">💼</span> Commerciale
                </button>
            </div>

            <div class="panels-wrapper">

                <!-- ══════════ GÉNÉRALE ══════════ -->
                <div class="panel active" id="panel-generale">
                    <div class="panel-left">
                        <p class="panel-left-title">GENERALES</p>
                        <ul class="dept-list">
                            <li class="dept-group">
                                <div class="dept-item has-sub active-group" data-group="grp-gen-lettres">
                                    <span class="dept-dot"></span><span>Premier cycle</span>
                                    <svg class="arrow" viewBox="0 0 24 24">
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                                <ul class="sub-list open">
                                    <li class="sub-item active" data-target="gen-pcycle-6">6ieme
                                    </li>
                                    <li class="sub-item" data-target="gen-pcycle-5"> 5ieme
                                    </li>
                                    <li class="sub-item" data-target="gen-pcycle-4">4ieme</li>
                                    <li class="sub-item" data-target="gen-pcycle-3">3ieme</li>
                                </ul>
                            </li>

                            <li class="dept-group">
                                <div class="dept-item has-sub" data-group="grp-gen-lettres">
                                    <span class="dept-dot"></span><span>Second cycle</span>
                                    <svg class="arrow" viewBox="0 0 24 24">
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                                <ul class="sub-list open">
                                    <li class="sub-item" data-target="gen-cycle-lettre1">A1,A2,A3,A5 : LITTÉRAIRES
                                    </li>
                                    <li class="sub-item" data-target="gen-sciences-humaine">SH : SCIENCES HUMAINES
                                    </li>

                                    <li class="sub-item" data-target="gen-sciences-B">B : SCIENCES ÉCONOMIQUES ET
                                        SOCIALES
                                    </li>
                                    <li class="sub-item" data-target="gen-sciences-C">C : MATHÉMATIQUES ET PHYSIQUES
                                    </li>
                                    <li class="sub-item" data-target="gen-sciences-D">D : MATHÉMATIQUES ET SVT
                                    </li>
                                    <li class="sub-item" data-target="gen-sciences-E">E : MATHÉMATIQUES ET
                                        TECHNIQUES
                                    </li>
                                    <li class="sub-item" data-target="gen-sciences-TI">TI : TECHNOLOGIES DE
                                        L'INFORMATION
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>

                    <div class="panel-right">
                        <div class="dept-info active" id="gen-pcycle-6">
                            <div class="info-header">
                                <div class="info-icon">📖</div>
                                <div>
                                    <p class="info-breadcrumb">Sixieme</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La 6ème constitue l’introduction aux fondamentaux du secondaire. Les
                                élèves découvrent les matières principales comme le français, les mathématiques, les
                                sciences, l’histoire et la géographie. On y développe la compréhension écrite et orale,
                                la logique mathématique et les premiers projets scientifiques. Des activités culturelles
                                et sportives sont intégrées pour développer le sens critique, la créativité et la
                                communication. L’objectif est de préparer l’élève à des choix éclairés pour le cycle
                                suivant. Cette année permet également de renforcer les compétences sociales et
                                organisationnelles, ainsi que la capacité à travailler en groupe et individuellement.
                            </p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Description</h4>
                                    <small>Le latin est une langue pour les élèves qui choisissent d'étudier les langues
                                        anciennes en mettant l'accent sur l'étymologie, la culture antique et la
                                        maitrise profonde de la langue française. Elle est idéale pour ceux qui aiment
                                        la lecture et l'histoire des civilisations. </small>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Greffier adjoint</li>
                                        <li>2<sup>nd</sup> littéraire</li>
                                        <li>Agent de bibliothèque</li>
                                        <li>Institeur de l'enseignement primaire</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A/B</span><span class="badge">Tous
                                    cycles</span><span class="badge accent">4 programmes</span></div>
                        </div>
                        <div class="dept-info" id="gen-pcycle-5">
                            <div class="info-header">
                                <div class="info-icon">✍️</div>
                                <div>
                                    <p class="info-breadcrumb">Cinquieme</p>
                                    <h2 class="info-title">Vue D'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La classe de cinquième est une année pivot du cycle 4 dédiée à
                                l'approfondissement des connaissances et au développement de l'autonomie de l'élève.
                                Elle se distingue par l'introduction d'une deuxième langue vivante et un renforcement
                                des matières scientifiques comme la physique-chimie. Le programme met l'accent sur des
                                thématiques contemporaines telles que le développement durable et la gestion des
                                ressources. L'objectif central est de consolider les méthodes de travail personnel tout
                                en stimulant l'esprit critique à travers des enseignements variés et structurés.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Modules clés</h4>
                                    <ul>
                                        <li>Littérature française</li>
                                        <li>Littérature africaine</li>
                                        <li>Stylistique &amp; Rhétorique</li>
                                        <li>Grammaire avancée</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Professeur de Français</li>
                                        <li>Journaliste</li>
                                        <li>Auteur / Éditeur</li>
                                        <li>Communication d'entreprise</li>
                                        <li>Virage en 4eme LV2(Allemand-Espagnol-Italien-Mandarin(chinois))</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A</span><span class="badge">3
                                    ans</span><span class="badge">6 semestres</span><span
                                    class="badge accent">Présentiel</span></div>
                        </div>
                        <div class="dept-info" id="gen-pcycle-4">
                            <div class="info-header">
                                <div class="info-icon">📕</div>
                                <div>
                                    <p class="info-breadcrumb">Quatrieme</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La classe de quatrième est l'année charnière du collège où le rythme
                                s'accélère et les enseignements gagnent en abstraction. Intégrée au cycle 4, elle exige
                                des élèves une plus grande autonomie et une rigueur accrue, notamment à travers
                                l'apprentissage de théorèmes mathématiques complexes (Pythagore, Thalès) et l'étude de
                                la littérature du XIXe siècle en français. C'est une étape décisive qui prépare
                                directement à l'orientation et à l'examen du Brevet, en mettant l'accent sur la capacité
                                à analyser, argumenter et structurer une réflexion personnelle dans toutes les
                                disciplines.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Modules</h4>
                                    <ul>
                                        <li>English Literature</li>
                                        <li>Civilisation britannique</li>
                                        <li>Traduction FR/EN</li>
                                        <li>Anglais des affaires</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Traducteur / Interprète</li>
                                        <li>Enseignant d'anglais</li>
                                        <li>Relations internationales</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A/B</span><span
                                    class="badge">Bilingue</span><span class="badge accent">TOEFL préparé</span></div>
                       </div>
                        <div class="dept-info" id="gen-pcycle-3">
                            <div class="info-header">
                                <div class="info-icon">📕</div>
                                <div>
                                    <p class="info-breadcrumb">Troisième</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La classe de troisième marque l'aboutissement du cycle 4 et la fin des années collège, exigeant des élèves une plus grande autonomie face à un programme académique dense. Cette année charnière est rythmée par la préparation du premier examen national, le BEPC, tout en intégrant des enjeux d'orientation décisifs pour le lycée. Au-delà des disciplines classiques, l'élève doit réaliser un stage d'observation en entreprise et soutenir un oral, développant ainsi ses premières compétences professionnelles. C'est une période de transition intense où se mêlent la consolidation des acquis fondamentaux et l'élaboration d'un projet d'avenir personnel.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Modules</h4>
                                    <ul>
                                        <li>Anglais</li>
                                        <li>Histoire/Geographie</li>
                                        <li>Langue Française/Civisme</li>
                                        <li>Lv2(Allemand-Espagnol-Italien-Mandarin(chinois))</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Examen National(BEPC)</li>
                                        <li>Entree en Seconde</li>
                                        <li>Orientation Assistee</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A/B</span><span
                                    class="badge">Bilingue</span><span class="badge accent">TOEFL préparé</span></div>
                        </div>
                        <div class="dept-info" id="gen-cycle-lettre1">
                            <div class="info-header">
                                <div class="info-icon">🔤</div>
                                <div>
                                    <p class="info-breadcrumb">A1, A2, A3, A4, A5 : Littéraires</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">Ces séries mettent l’accent sur les lettres classiques, les langues
                                vivantes, la littérature et la philosophie. Les élèves y développent des compétences
                                avancées en expression écrite et orale, en analyse critique des textes et en
                                compréhension des phénomènes culturels et historiques. Les cours incluent la grammaire
                                approfondie, l’histoire littéraire, la rédaction de dissertations, l’art oratoire et les
                                travaux pratiques. Les élèves participent à des débats, des exposés et des projets
                                culturels. Cette série prépare aux carrières académiques et intellectuelles, favorise le
                                développement de la pensée critique et des capacités de synthèse.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Joss De Douala</li>
                                        <li>Lycée Général Leclerc De Yaoundé</li>
                                        <li>Lycée Classique et Moderne de Garoua</li>
                                        <li>Lycée Classique de Dschang</li>
                                        <li>Bishop Rogan College de Buea</li>
                                        <li>Sacred Heart College de Bamenda</li>
                                        <li>Lycée d'Essos de Yaoundé</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Collège Libermann de Douala</li>
                                        <li>Lycée de Tsinga de Yaoundé</li>
                                        <li>Lycée Classique de Bertoua</li>
                                        <li>Bishop Gorja College de Kumba</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Professeur</li>
                                        <li>Journaliste</li>
                                        <li>historien</li>
                                        <li>Archéologue</li>
                                        <li>Traducteur</li>
                                        <li>Diplomate</li>
                                        <li>Écrivain</li>
                                        <li>Conseiller culturel</li>
                                        <li>Animateur social</li>
                                        <li>Rédacteur</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Licence requise</span><span class="badge">4
                                    semestres</span><span class="badge accent">Thèse possible</span></div>
                        </div>
                        <div class="dept-info" id="gen-sciences-humaine">
                            <div class="info-header">
                                <div class="info-icon">🔬</div>
                                <div>
                                    <p class="info-breadcrumb">Sciences Humaines</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La série SH (Sciences Humaines) met l’accent sur l’histoire, la
                                géographie, la sociologie et la philosophie. Les élèves développent leur capacité
                                d’analyse critique, de synthèse et de réflexion sur les questions sociales, culturelles
                                et politiques. Les cours incluent lectures, débats, recherches documentaires et projets
                                de groupe. Cette série forme des élèves capables de comprendre les sociétés, les
                                cultures et les interactions humaines. Elle prépare à la poursuite d’études en sciences
                                sociales, communication, droit et relations internationales, tout en renforçant la
                                culture générale et les compétences en expression écrite et orale.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Lycée Classique et Moderne de Garoua</li>
                                        <li>Lycée de Nkongsamba</li>
                                        <li>Lycée d'Essos de Yaoundé</li>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Lycée Classique de Dschang</li>
                                        <li>Groupe Scolaire Laïc de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Sociologue</li>
                                        <li>Historien</li>
                                        <li>Géographe</li>
                                        <li>Enseignant</li>
                                        <li>Chercheur</li>
                                        <li>Journaliste</li>
                                        <li>Anthropologue</li>
                                        <li>Diplomate</li>
                                        <li>Animateur culturel</li>
                                        <li>Conseiller en développement social</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D</span><span class="badge">Labos
                                    équipés</span><span class="badge accent">4 options</span></div>
                        </div>

                        <div class="dept-info" id="gen-sciences-B">
                            <div class="info-header">
                                <div class="info-icon">🫱🏾‍🫲🏾</div>
                                <div>
                                    <p class="info-breadcrumb">Sciences Économiques &amp; Sociales</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La série SES (Sciences Économiques et Sociales) est orientée vers la
                                compréhension des enjeux contemporains, l'analyse des comportements humains et les
                                mécanismes de régulation des sociétés. Les élèves y acquièrent une formation
                                pluridisciplinaire solide, alliant rigueur théorique et observation des faits sociaux.
                            </p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Français International François-Truffaut de Yaoundé</li>
                                        <li>Lycée Français International Dominique-Savio de Douala</li>
                                        <li>Collège Libermann de Douala</li>
                                        <li>Collège Catholique Bilingue Saint-Benoît de Douala</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Lycée Classique et Moderne de Garoua</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Lycée d'Essos de Yaoundé</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Comptable</li>
                                        <li>Analyste financier</li>
                                        <li>analyste politique</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D</span><span class="badge">Labo
                                    intensif</span><span class="badge accent">Partenariats IRD</span></div>
                        </div>
                        <div class="dept-info" id="gen-sciences-C">
                            <div class="info-header">
                                <div class="info-icon">🧮</div>
                                <div>
                                    <p class="info-breadcrumb">Mathématique &amp; Physique</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La série C est orientée vers les mathématiques, la physique et les
                                sciences expérimentales. Les élèves y acquièrent une formation scientifique solide, avec
                                des travaux pratiques, des expériences en laboratoire et des projets de recherche.
                                L’enseignement inclut la résolution de problèmes complexes, l’expérimentation, l’analyse
                                critique et le raisonnement logique. Les élèves développent des compétences en
                                modélisation, calculs avancés, et méthode scientifique. La série prépare aux études
                                supérieures en ingénierie, informatique et sciences appliquées.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée de Mbouda</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Collège Libermann de Douala</li>
                                        <li>Collège Sainte-Thérèse de Garoua</li>
                                        <li>Bishop Rogan College de Buea</li>
                                        <li>Sacred Heart College de Bamenda</li>
                                        <li>Lycée de Tsinga de Yaoundé</li>
                                        <li>Lycée Classique et Moderne de Garoua</li>
                                        <li>Lycée Classique de Bertoua</li>
                                        <li>Lycée Bilingue d'Olympe de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>ingénieur</li>
                                        <li>architecte</li>
                                        <li>chercheur scientifique</li>
                                        <li>programmeur</li>
                                        <li>statisticien</li>
                                        <li>analyste de données</li>
                                        <li>technicien supérieur</li>
                                        <li>consultant scientifique</li>
                                        <li>analyste financier</li>

                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D</span><span class="badge">Algo &amp;
                                    Théorie</span><span class="badge accent">Master IA possible</span></div>
                        </div>
                        <div class="dept-info" id="gen-sciences-D">
                            <div class="info-header">
                                <div class="info-icon">⚗️</div>
                                <div>
                                    <p class="info-breadcrumb">Mathématique &amp; Svt</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La série D se concentre sur les sciences de la vie et de la terre,
                                incluant biologie, chimie, géologie et écologie. Les élèves participent à des
                                expériences de laboratoire, des sorties terrain et des projets scientifiques.
                                L’enseignement développe la capacité d’analyse, l’observation, la rédaction de rapports
                                scientifiques et l’esprit critique. Les cours incluent la physiologie, l’écologie, la
                                microbiologie et la biotechnologie. La série prépare aux carrières en médecine,
                                pharmacie, agronomie et recherche biologique.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Collège Libermann de Douala</li>
                                        <li>Lycée de Tsinga de Yaoundé</li>
                                        <li>Lycée Classique d'Ébolowa</li>
                                        <li>Lycée Classique et Moderne de Garoua</li>
                                        <li>Sacred Heart College de Bamenda</li>
                                        <li>Collège Sainte-Thérèse de Garoua</li>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Lycée de Nkongsamba</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Médecin</li>
                                        <li>Biologiste</li>
                                        <li>Agronome</li>
                                        <li>Chercheur</li>
                                        <li>Technicien de laboratiore</li>
                                        <li>Enseignant scientifique</li>
                                        <li>Consultant santé</li>
                                        <li>Analyste environnement</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A/B</span><span class="badge">Droit
                                    OHADA</span><span class="badge accent">3 parcours</span></div>
                        </div>
                        <div class="dept-info" id="gen-sciences-E">
                            <div class="info-header">
                                <div class="info-icon">📜</div>
                                <div>
                                    <p class="info-breadcrumb">Mathématique &amp; technique</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La série E se concentre sur les mathématiques appliquées et les
                                technologies. Les élèves y étudient l’informatique, l’électronique, la technologie
                                industrielle et la modélisation. Les travaux pratiques et les projets technologiques
                                permettent de comprendre le fonctionnement des systèmes industriels et automatisés. Les
                                élèves développent des compétences en analyse, conception et résolution de problèmes
                                complexes. La série prépare aux carrières techniques et ingénierie appliquée, en
                                combinant théorie et pratique pour former des professionnels polyvalents.</p>
                            <div class="info-grid">
                                <div class="info-card">

                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée de Tsinga de Yaoundé</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Lycée Classique et Moderne de Garoua</li>
                                        <li>Lycée Classique de Bertoua</li>
                                        <li>Lycée de Mbouda</li>
                                        <li>Bishop Rogan College de Buea</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Ingénieur industriel</li>
                                        <li>Technicien supérieur</li>
                                        <li>Informaticien</li>
                                        <li>Analyste de systèmes</li>
                                        <li>Développeur</li>
                                        <li>Chercheur en technologie</li>
                                        <li>Consultant technique</li>
                                        <li>Technicien de maintenance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A/B</span><span class="badge">CRFPA
                                    préparé</span><span class="badge accent">Stages tribunaux</span></div>
                        </div>
                        <div class="dept-info" id="gen-sciences-TI">
                            <div class="info-header">
                                <div class="info-icon">💻</div>
                                <div>
                                    <p class="info-breadcrumb">Technologies de l'information</p>
                                    <h2 class="info-title">Vue d'ensemble</h2>
                                </div>
                            </div>
                            <p class="info-desc">La série TI forme les élèves aux bases de l’informatique,
                                programmation, réseaux et systèmes d’information. Les cours combinent théorie et
                                pratique, avec des travaux en laboratoire, projets de programmation et initiation à la
                                maintenance informatique. Les élèves apprennent à résoudre des problèmes techniques,
                                analyser des données et comprendre le fonctionnement des systèmes numériques. Cette
                                série développe l’esprit logique, l’organisation, la créativité et la capacité à
                                travailler sur des projets collaboratifs. Elle prépare à la poursuite d’études en
                                informatique et technologies appliquées.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>College Francois-Xavier Vogt de Yaounde</li>
                                        <li>Lycée Joss de Douala</li>
                                        <li>CEFTI Douala</li>
                                        <li>Lycee d'Essos</li>
                                        <li>Lycée Bilingue de Nylon Brazzaville de Douala</li>
                                        <li>Lycée de Dschang</li>
                                        <li>Sacred Heart College Of Bamenda</li>
                                        <li>Lycee Technique de Garoua</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien informatique</li>
                                        <li>Programmeur junior</li>
                                        <li>Administrateur réseau</li>
                                        <li>Assistant en systèmes d'information</li>
                                        <li>Développeur web</li>
                                        <li>Analyste de données</li>
                                        <li>Support technique</li>
                                        <li>Consultant IT</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac A/B</span><span class="badge">Concours
                                    ENAM</span><span class="badge accent">Fonction publique</span></div>
                        </div>
                    </div>
                </div><!-- /panel-generale -->


                <!-- ══════════ TECHNIQUE ══════════ -->
                <div class="panel" id="panel-technique">
                    <div class="panel-left">
                        <p class="panel-left-title">TECHNIQUES</p>
                        <ul class="dept-list">

                            <li class="dept-group">
                                <div class="dept-item has-sub active-group" data-group="grp-tech-isabee">
                                    <span class="dept-dot"></span><span>Premier — Cycle</span>
                                    <svg class="arrow" viewBox="0 0 24 24">
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                                <ul class="sub-list open">
                                    <li class="sub-item active" data-target="tech-pcycle-elec">Electricité (ELEQ)</li>
                                    <li class="sub-item" data-target="tech-pcycle-elect">Menuiserie‑Ameublement (MENA)
                                    </li>
                                    <li class="sub-item" data-target="tech-pcycle-fc">Installation Sanitaire (INSA)</li>
                                    <li class="sub-item" data-target="tech-pcycle-m">Maçonnerie</li>
                                    <li class="sub-item" data-target="tech-pcycle-ma">Mecanique Automobile Electrique
                                        (MAEL)</li>
                                    <li class="sub-item" data-target="tech-pcycle-co">Couture et Mesure (COME)</li>
                                    <li class="sub-item" data-target="tech-pcycle-me">Carrosserie‑Peinture Automobile
                                        (CAPA)</li>
                                </ul>
                            </li>

                            <li class="dept-group">
                                <div class="dept-item has-sub" data-group="grp-tech-estm">
                                    <span class="dept-dot"></span><span>Second — Cycle</span>
                                    <svg class="arrow" viewBox="0 0 24 24">
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                                <ul class="sub-list">
                                    <li class="sub-item active" data-target="tech-scycle-afi">AF1-AF2-AF3
                                        Artistique-Céramique</li>
                                    <li class="sub-item" data-target="tech-scycle-ci">F6-CI Chimie Industrielle</li>
                                    <li class="sub-item" data-target="tech-scycle-f1">F1 Fabrication
                                        mecanique</li>
                                    <li class="sub-item" data-target="tech-scycle-f2">F2 Electronique</li>
                                    <li class="sub-item" data-target="tech-scycle-f3">F3 Electrotechnique</li>
                                    <li class="sub-item" data-target="tech-scycle-f4">F4/BE/BA/TP Génie Civil</li>
                                    <li class="sub-item" data-target="tech-scycle-f5">F5 Froid et Climatisation
                                    </li>
                                    <li class="sub-item" data-target="tech-scycle-f7">F7 Biochimie/Biologie</li>
                                    <li class="sub-item" data-target="tech-scycle-f8">F8 Sciences Medico Sociales</li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="panel-right">
                        <div class="dept-info active" id="tech-pcycle-elec">
                            <div class="info-header">
                                <div class="info-icon">💡</div>
                                <div>
                                    <p class="info-breadcrumb">ELEQ</p>
                                    <h2 class="info-title">Electricite</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Électricité (ELEQ) forme des élèves aux bases de
                                l’électricité et des installations électriques industrielles et domestiques. La
                                formation inclut l’étude des circuits électriques, la production et la distribution de
                                l’énergie, la sécurité électrique, le dépannage ainsi que les installations
                                résidentielles et commerciales. Les élèves développent des compétences pratiques en
                                atelier sur des systèmes réels, apprennent à lire des plans électriques et à utiliser
                                des instruments de mesure. Le programme met aussi l’accent sur la maintenance préventive
                                et corrective. Cette Filiere prépare les jeunes à être immédiatement opérationnels dans
                                le secteur électrique dès l’obtention du diplôme.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>CEFTI Douala</li>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Infrastructure</h4>
                                    <ul>
                                        <li>Technicien d’installation électrique</li>
                                        <li>Dépanneur électrique</li>
                                        <li>Chargé de maintenance d’appareils électriques</li>
                                        <li>Ouvrier qualifié en réseaux électriques</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D/F</span><span class="badge">Terrain
                                    &amp;
                                    Labo</span><span class="badge accent">4 filières</span></div>
                        </div>
                        <div class="dept-info" id="tech-pcycle-elect">
                            <div class="info-header">
                                <div class="info-icon">🪵</div>
                                <div>
                                    <p class="info-breadcrumb">MENA</p>
                                    <h2 class="info-title">Menuiserie‑Ameublement</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Menuiserie‑Ameublement (MENA) prépare les élèves à
                                travailler le bois et ses dérivés. Les élèves apprennent les techniques, outils et
                                machines pour la fabrication de meubles, portes, fenêtres et structures en bois. Ils
                                étudient la sécurité en atelier, la lecture de plans, les types de bois et leurs
                                propriétés. La formation combine théorie en salle et pratique intense en atelier. Les
                                élèves savent dimensionner, découper, assembler et finir des produits en bois. Cette
                                filière donne de solides compétences artisanales très demandées sur le marché local.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                        <li>CEFTI</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Menuisier industriel</li>
                                        <li>Ébéniste</li>
                                        <li>Fabricant de meubles</li>
                                        <li>Ouvrier qualifié en bois</li>
                                        <li>Ouvrier qualifié en bois</li>
                                        <li>Entrepreneur artisan</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D</span><span class="badge">5
                                    ans</span><span class="badge accent">Stage terrain 6 mois</span></div>
                        </div>
                        <div class="dept-info" id="tech-pcycle-fc">
                            <div class="info-header">
                                <div class="info-icon">🪠</div>
                                <div>
                                    <p class="info-breadcrumb">INSA</p>
                                    <h2 class="info-title">Installation Sanitaire</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Installation Sanitaire (INSA) forme les élèves aux systèmes
                                d’eau, d’assainissement et de plomberie. Ils étudient le montage des tuyaux, les
                                installations de salle de bain, de cuisine et les réseaux d’évacuation. La formation
                                inclut aussi la réparation des installations sanitaires et la prévention des fuites. On
                                y apprend les normes sanitaires, la sécurité sur les chantiers et l’utilisation des
                                outils spécialisés. Cette Filiere est idéale pour travailler dans des entreprises de
                                services, de construction ou ouvrir sa propre activité d’artisan plombier
                            </p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>CEFTI Douala</li>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien en assainissement</li>
                                        <li>IInstallateur sanitaire</li>
                                        <li>Conseiller technique en réseaux d’eau</li>
                                        <li>Entrepreneur plomberie</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D</span><span class="badge">MINFOF
                                    partenaire</span><span class="badge accent">Forêt tropicale</span></div>
                        </div>
                        <div class="dept-info" id="tech-pcycle-m">
                            <div class="info-header">
                                <div class="info-icon">⚒️</div>
                                <div>
                                    <p class="info-breadcrumb">MACO</p>
                                    <h2 class="info-title">Maconnerie</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Maçonnerie (CAP MACO) forme aux techniques de construction
                                du bâtiment. Les élèves apprennent les fondations, le montage des murs, la pose des
                                briques, le scellement, le coffrage, le béton armé et la finition des surfaces. Ils
                                étudient aussi la sécurité de chantier, les matériaux de construction et les méthodes de
                                nivellement. Les stages pratiques en chantier permettent une expérience directe du
                                travail. Cette Filiere est essentielle pour ceux qui veulent travailler dans l’industrie
                                du bâtiment.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                        <li>CEFTI Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Maçon spécialisé</li>
                                        <li>Ouvrier qualifié en bâtiment</li>
                                        <li>Conseil en matériaux de construction</li>
                                        <li>Superviseur de petit chantier</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D/E</span><span class="badge">Ferme
                                    expérimentale</span><span class="badge accent">MINEPIA agréé</span></div>
                        </div>
                        <div class="dept-info" id="tech-pcycle-ma">
                            <div class="info-header">
                                <div class="info-icon">🛠️</div>
                                <div>
                                    <p class="info-breadcrumb">MAEL</p>
                                    <h2 class="info-title">Mécanique Automobile Électrique</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Mécanique Automobile Électrique (MAEL) forme à la
                                maintenance et réparation des systèmes électriques des véhicules. Les élèves apprennent
                                l’électricité automobile, le diagnostic électronique, le contrôle des circuits, les
                                systèmes de démarrage et d’allumage, ainsi que l’entretien de batteries. Cette
                                spécialité est essentielle dans l’environnement automobile moderne.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                        <li>CEFTI Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien électricité auto</li>
                                        <li>Dépanneur auto électrique</li>
                                        <li>Assistant en maintenance auto</li>
                                        <li>Diagnostiqueur automobile</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/D/E</span><span class="badge">Secteur
                                    stratégique</span><span class="badge accent">3 filières</span></div>
                        </div>
                        <div class="dept-info" id="tech-pcycle-co">
                            <div class="info-header">
                                <div class="info-icon">🪡</div>
                                <div>
                                    <p class="info-breadcrumb">COME</p>
                                    <h2 class="info-title">Couture et Mesure</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Couture et Mesure (COME) forme des élèves aux techniques de
                                coupe, de couture, de montage de vêtements et d’ajustement sur mesure. La formation
                                inclut la théorie des textiles, la prise de mesures, le patronage, la coupe,
                                l’utilisation de machines à coudre ainsi que la finition des vêtements. On y apprend
                                aussi la gestion d’un petit atelier, la relation clientèle et la création de modèles
                                adaptés aux tendances du marché. Cette filiere est une excellente porte d’entrée dans
                                l’artisanat de la mode.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Modules</h4>
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                        <li>CEFTI Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Couturier professionnel</li>
                                        <li>GArtisan designer de vêtements</li>
                                        <li>Responsable d’atelier de couture</li>
                                        <li>Styliste-Modéliste</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/E</span><span class="badge">5
                                    ans</span><span class="badge accent">Stage mine obligatoire</span></div>
                        </div>
                        <div class="dept-info" id="tech-pcycle-me">
                            <div class="info-header">
                                <div class="info-icon">🚗</div>
                                <div>
                                    <p class="info-breadcrumb">CAPA</p>
                                    <h2 class="info-title">Carosserie et Peinture Automobile</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Carrosserie‑Peinture Automobile (CAPA) prépare au travail
                                sur carrosserie de véhicules, réparation des chocs, redressage des tôles, préparation
                                des surfaces et application de peintures spécialisées. Les élèves apprennent les normes
                                de sécurité, les techniques de décapage, de ponçage, de soudure légère et la finition
                                esthétique. La formation est très pratique et adaptée à l’industrie automobile ou aux
                                garages indépendants.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Institut Polyvalent Nanfah</li>
                                        <li>Lycee Technique de Bafoussam </li>
                                        <li>Lycee Technique De Douala-Koumassi</li>
                                        <li>CEFTI Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Carrossier automobile</li>
                                        <li>Agent de maintenance auto</li>
                                        <li>Contrôleur qualité carrosserie</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Bac C/E</span><span class="badge">AES-Sonel
                                    agréé</span><span class="badge accent">Futur porteur</span></div>
                        </div>
                        <div class="dept-info" id="tech-scycle-afi">
                            <div class="info-header">
                                <div class="info-icon">⚱️</div>
                                <div>
                                    <p class="info-breadcrumb">AF1,AF2,AF3</p>
                                    <h2 class="info-title">Artistique-Ceramique</h2>
                                </div>
                            </div>
                            <p class="info-desc">Cette filière combine expression artistique et maîtrise technique des
                                matériaux. L'élève apprend à transformer l'argile brute en objets finis (utilitaires ou
                                décoratifs).</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycee Technique De Buea</li>
                                        <li>Lycee Technique de Nkolbisson</li>
                                        <li>Lycee Technique de Mbouda</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Artisan céramiste</li>
                                        <li>Designer de produits céramiques</li>
                                        <li>Technicien en arts décoratifs</li>
                                        <li>Responsable de production céramique</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Technique</span><span class="badge">7 ans
                                    minimum</span><span class="badge accent">Seconde en Terminale</span></div>
                        </div>

                        <div class="dept-info" id="tech-scycle-ci">
                            <div class="info-header">
                                <div class="info-icon">⚗️</div>
                                <div>
                                    <p class="info-breadcrumb">F6-CI</p>
                                    <h2 class="info-title">Chimie Industrielle</h2>
                                </div>
                            </div>
                            <p class="info-desc">Cette filière se concentre sur les procédés de fabrication industrielle
                                et l'analyse chimique. Les élèves apprennent les techniques de laboratoire, la gestion
                                des réactifs, les normes de sécurité et les applications industrielles. La formation
                                inclut des stages en entreprise pour une expérience pratique. Les compétences
                                développées sont essentielles pour travailler dans les secteurs de la chimie, de la
                                pharmacie et de l'environnement.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycée Technique de Douala-Koumassi</li>
                                        <li>Lycée Technique de Yaoundé (Nkolbisson)</li>
                                        <li>Lycée Technique de Bafoussam</li>
                                        <li>Lycée Technique de Garoua</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien de laboratoire</li>
                                        <li>Pilote de ligne de production</li>
                                        <li>Technicien en traitement des eaux</li>
                                        <li>Assistant en recherche et développement (R&D)</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Projets réels</span><span class="badge">GitHub
                                    portfolio</span><span class="badge accent">Hackathons</span></div>
                        </div>
                        <div class="dept-info" id="tech-scycle-f1">
                            <div class="info-header">
                                <div class="info-icon">🛠️</div>
                                <div>
                                    <p class="info-breadcrumb">F1</p>
                                    <h2 class="info-title">Construction Mécanique</h2>
                                </div>
                            </div>
                            <p class="info-desc"> forme les élèves aux techniques de conception et maintenance des
                                systèmes mécaniques industriels. Les cours incluent machines-outils, dessin industriel,
                                méthodes de fabrication et sécurité. Les travaux pratiques et projets permettent de
                                maîtriser les équipements et les processus de production. La série développe la
                                précision, la créativité technique, la capacité d’analyse et le travail en équipe. Les
                                élèves apprennent à résoudre des problèmes techniques complexes et à s’adapter aux
                                évolutions technologiques. Cette formation prépare à des carrières industrielles et de
                                maintenance.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycée Technique de Nkolbisson</li>
                                        <li>Lycée Technique de Bafoussam</li>
                                        <li>Lycee Technique de Douala-Koumassi</li>
                                    </ul>

                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Maintenance industrielle</li>
                                        <li>Opérateur CNC</li>
                                        <li>Constructeur Metallique</li>
                                        <li>Superviseur de production</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">CAP & BEPC</span>
                                <span class="badge accent">De Seconde en Terminale</span>
                            </div>
                        </div>
                        <div class="dept-info" id="tech-scycle-f2">
                            <div class="info-header">
                                <div class="info-icon">💡</div>
                                <div>
                                    <p class="info-breadcrumb">F2</p>
                                    <h2 class="info-title">Electronique</h2>
                                </div>
                            </div>
                            <p class="info-desc">forme aux composants électroniques, circuits simples et systèmes de
                                communication. Les élèves réalisent des travaux pratiques en laboratoire et des projets
                                de montage et dépannage. L’apprentissage inclut les microcontrôleurs, l’électronique
                                numérique et analogique, les normes de sécurité et la lecture de schémas. Les élèves
                                développent la rigueur, la logique technique, la capacité d’analyse et la résolution de
                                problèmes. Cette série prépare à des métiers de maintenance et conception électronique,
                                tout en favorisant l’innovation et l’adaptation aux technologies.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycee Technique de Douala-Bassa</li>
                                        <li>Lycee Technique de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Lycée Technique de Garoua</li>
                                        <li>Lycee Technique de Bafoussam</li>
                                        <li>Lycee Technique de Bamenda</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>technicien maintenance électronique</li>
                                        <li>Télécom</li>
                                        <li>Superviseur de projet électronique</li>
                                        <li>Consultant télécom</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">GPU Cluster</span><span class="badge">Datasets
                                    africains</span><span class="badge accent">Nouveau programme</span></div>
                        </div>
                        <div class="dept-info" id="tech-scycle-f3">
                            <div class="info-header">
                                <div class="info-icon">🛠️</div>
                                <div>
                                    <p class="info-breadcrumb">F3</p>
                                    <h2 class="info-title">Electrotechnique</h2>
                                </div>
                            </div>
                            <p class="info-desc">initie aux systèmes moteurs, transmission, entretien et diagnostic des
                                véhicules. Les élèves apprennent la réparation, la maintenance et l’optimisation des
                                performances automobiles. Les travaux pratiques en atelier renforcent la maîtrise
                                technique et la sécurité. Les élèves développent l’esprit d’analyse, la résolution de
                                problèmes mécaniques, la précision et le travail en équipe. La filière prépare à des
                                carrières en mécanique automobile et industrie automobile. Les projets pratiques
                                permettent de comprendre la technologie moderne et les innovations techniques.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycee Technique de Douala-Bassa</li>
                                        <li>Lycee Technique de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Lycée Technique de Garoua</li>
                                        <li>Lycee Technique de Bafoussam</li>
                                        <li>Lycee Technique de Bamenda</li>
                                        <li>Lycée Technique de Douala-Koumassi</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Mécanicien</li>
                                        <li>Technicien automobile</li>
                                        <li>Préparateur moteurs</li>
                                        <li>Consultant en maintenance auto</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">GPU Cluster</span><span class="badge">Datasets
                                    africains</span><span class="badge accent">Nouveau programme</span></div>
                        </div>
                        <div class="dept-info" id="tech-scycle-f4">
                            <div class="info-header">
                                <div class="info-icon">🧱</div>
                                <div>
                                    <p class="info-breadcrumb">F4</p>
                                    <h2 class="info-title">Genie Civil</h2>
                                </div>
                            </div>
                            <p class="info-desc"> F4 initie aux techniques de construction, béton, maçonnerie et dessin
                                de plans. Les élèves participent à des projets pratiques et travaux de terrain pour
                                comprendre les normes et procédés. L’enseignement développe la précision, la
                                planification, la sécurité et l’organisation. Les élèves acquièrent les bases
                                nécessaires pour les métiers du bâtiment et du génie civil. Les projets pratiques et
                                théoriques permettent de résoudre des problèmes techniques complexes. La série prépare à
                                des études supérieures en BTP et gestion de chantier.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycee Technique de Bonaberi</li>
                                        <li>Lycee Technique de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Lycée Technique de Garoua</li>
                                        <li>Lycee Technique de Bafoussam</li>
                                        <li>Lycee Technique de Bamenda</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien en BTP</li>
                                        <li>Maçon qualifié</li>
                                        <li>Assistant conducteur de travaux</li>
                                        <li>Superviseur chantier</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">F</span><span class="badge">Datasets
                                    africains</span><span class="badge accent">Nouveau programme</span></div>
                        </div>

                        <div class="dept-info" id="tech-scycle-f5">
                            <div class="info-header">
                                <div class="info-icon">🧊</div>
                                <div>
                                    <p class="info-breadcrumb">F5</p>
                                    <h2 class="info-title">Froid et climatisation</h2>
                                </div>
                            </div>
                            <p class="info-desc">Cette formation technique spécialisée prépare les élèves à la
                                conception, l'installation et la maintenance des systèmes de réfrigération et de
                                traitement de l'air. Les étudiants y apprennent la thermodynamique, la manipulation des
                                fluides frigorigènes et le câblage électrique des équipements thermiques. Elle débouche
                                sur le métier de technicien en froid industriel ou domestique, intervenant dans des
                                secteurs clés comme l'agroalimentaire, la santé ou le confort des bâtiments. Au-delà de
                                l'insertion professionnelle directe, ce baccalauréat permet de poursuivre des études
                                supérieures en BTS ou en licence professionnelle pour devenir expert en génie thermique.
                                En résumé, c'est une filière alliant rigueur technologique et expertise pratique pour
                                répondre aux enjeux modernes de conservation et d'efficacité énergétique.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycee Technique de Douala-Baasa</li>
                                        <li>Lycee Technique de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Lycée Technique de Garoua</li>
                                        <li>Lycee Technique de Bafoussam</li>
                                        <li>Lycee Technique de Bamenda</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien en laboratoire</li>
                                        <li>Technicien en analyse chimique</li>
                                        <li>Technicien en contrôle qualité</li>
                                        <li>Technicien en physique appliquée</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">GPU Cluster</span><span class="badge">Datasets
                                    africains</span><span class="badge accent">Nouveau programme</span></div>
                        </div>
                        <div class="dept-info" id="tech-scycle-f7">
                            <div class="info-header">
                                <div class="info-icon">⚗️</div>
                                <div>
                                    <p class="info-breadcrumb">F7</p>
                                    <h2 class="info-title">Sciences et Technologies Biologiques</h2>
                                </div>
                            </div>
                            <p class="info-desc">Cette formation scientifique et technique se concentre sur les domaines
                                de la biologie, de la biochimie et de la microbiologie appliquée. Les élèves y
                                apprennent les techniques de manipulation en laboratoire, les analyses médicales, ainsi
                                que le contrôle de qualité des produits agroalimentaires et pharmaceutiques. Elle forme
                                des techniciens capables d'évoluer dans les industries de transformation, les hôpitaux
                                ou les centres de recherche en environnement. Au-delà de la pratique, cette filière
                                offre une base solide pour poursuivre des études supérieures en BTS, en médecine ou en
                                ingénierie biologique. En résumé, c'est une voie d'excellence pour les passionnés de
                                sciences du vivant souhaitant allier rigueur théorique et expertise technique</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycée Technique de Nkolbisson (Yaoundé)</li>
                                        <li>Lycee Technique de Douala-Koumassi</li>
                                        <li>Lycée Technique de Garoua</li>
                                        <li>Lycee Technique et Professionnel Agricole de Yabassi</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Technicien en laboratoire</li>
                                        <li>Technicien en analyse biochimique</li>
                                        <li>Technicien en contrôle qualité</li>
                                        <li>Technicien en recherche et développement</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Technique</span><span
                                    class="badge">Biochimie</span><span class="badge accent">Seconde en Terminale</span>
                            </div>
                        </div>

                        <div class="dept-info" id="tech-scycle-f8">
                            <div class="info-header">
                                <div class="info-icon">🩺</div>
                                <div>
                                    <p class="info-breadcrumb">F8/STSS</p>
                                    <h2 class="info-title">Sciences et Technologies de la Santé et Du Social</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière F8, désormais souvent désignée sous l'appellation ST2S
                                (Sciences et Technologies de la Santé et du Social) au Cameroun, est une branche
                                technique dédiée aux métiers du secteur médico-social. Cette formation
                                pluridisciplinaire enseigne des matières fondamentales comme la biologie humaine, la
                                terminologie médicale, ainsi que l'étude des structures sanitaires et sociales pour
                                comprendre le fonctionnement des organismes de santé. Elle prépare les élèves à la
                                gestion administrative et technique des dossiers patients, à la prévention sanitaire et
                                à l'accompagnement des populations vulnérables. Ce baccalauréat offre des débouchés
                                variés, permettant de devenir secrétaire médical, assistant social ou de poursuivre des
                                études supérieures en soins infirmiers et en facultés de médecine. En résumé, la série
                                F8 est la voie idéale pour les élèves souhaitant concilier une approche scientifique du
                                corps humain avec une forte dimension humaine et sociale.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Etablissements</h4>
                                    <ul>
                                        <li>Lycée Technique de Nkolbisson (Yaoundé)</li>
                                        <li>Lycée Technique de Douala-Koumassi</li>
                                        <li>Lycée Technique de Bafoussam</li>
                                        <li>CEFTI (Bonamoussadi, Douala)</li>
                                        <li>Collège Polyvalent Georges Schwab (Edéa)</li>
                                        <li>CEGEP Sainte Foi (Yaoundé)</li>
                                        <li>Institut Polyvalent Nanfah (IPN)</li>

                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchés</h4>
                                    <ul>
                                        <li>Assistant social</li>
                                        <li>Aide soignant</li>
                                        <li>Technicien en laboratoire</li>
                                        <li>Technicien en recherche et développement</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">GPU Cluster</span><span class="badge">Datasets
                                    africains</span><span class="badge accent">Nouveau programme</span></div>
                        </div>
                    </div>
                </div><!-- /panel-technique -->


                <!-- ══════════ COMMERCIALE ══════════ -->
                <div class="panel" id="panel-commerciale">
                    <div class="panel-left">
                        <p class="panel-left-title">Commerciale</p>
                        <ul class="dept-list">

                            <li class="dept-group">
                                <div class="dept-item has-sub active-group" data-group="grp-com-gestion">
                                    <span class="dept-dot"></span><span>Premier Cycle</span>
                                    <svg class="arrow" viewBox="0 0 24 24">
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                                <ul class="sub-list open">
                                    <li class="sub-item active" data-target="com-gestion-overview">Comptabilité (COM)
                                    </li>
                                    <li class="sub-item" data-target="com-gestion-licence">Secrétariat & Bureautique
                                        (SECRET)</li>
                                    <li class="sub-item" data-target="com-gestion-mba1">Vente & Commerce (VENTE)</li>
                                    <li class="sub-item" data-target="com-gestion-mba2">Gestion & Administration
                                        (GESTION)</li>
                                    <li class="sub-item" data-target="com-gestion-mba3">Analyse de Données &
                                        Informatique
                                        Commerciale (ADCI)</li>
                                </ul>
                            </li>

                            <li class="dept-group">
                                <div class="dept-item has-sub" data-group="grp-com-finance">
                                    <span class="dept-dot"></span><span>Second Cycle</span>
                                    <svg class="arrow" viewBox="0 0 24 24">
                                        <polyline points="6 9 12 15 18 9" />
                                    </svg>
                                </div>
                                <ul class="sub-list">
                                    <li class="sub-item" data-target="com-finance-overview2">CG</li>
                                    <li class="sub-item" data-target="com-finance-compta">ACC</li>
                                    <li class="sub-item" data-target="com-finance-audit">ACA</li>
                                    <li class="sub-item" data-target="com-finance-banque">FIG</li>
                                    <li class="sub-item" data-target="com-finance-otre">SES</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-right">
                        <div class="dept-info active" id="com-gestion-overview">
                            <div class="info-header">
                                <div class="info-icon">📊</div>
                                <div>
                                    <p class="info-breadcrumb">Premier Cycle Commercial</p>
                                    <h2 class="info-title">Comptabilité (COM)</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Comptabilité (COM) forme les élèves aux principes
                                fondamentaux de la comptabilité générale selon le système SYSCOHADA (Système Comptable
                                de l'OHADA - Organisation pour l'Harmonisation en Afrique du Droit des Affaires). Les
                                élèves apprennent l'enregistrement des opérations commerciales, la tenue des journaux et
                                grands-livres, la classification des comptes selon le plan comptable OHADA et la
                                préparation des états de synthèse. Cette formation crée une base solide pour accéder aux
                                classes supérieures de comptabilité ou à des emplois d'aide-comptable dans les TPE et
                                PME camerounaises.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Objectifs pédagogiques</h4>
                                    <ul>
                                        <li>Maîtrise du SYSCOHADA et plan comptable OHADA</li>
                                        <li>Tenue correcte des livres comptables obligatoires</li>
                                        <li>Enregistrement des opérations courantes d'une entreprise</li>
                                        <li>Préparation des documents de synthèse</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Accés aux classes supérieures (Seconde, Première, Terminal commerciale)</li>
                                        <li>Aide-comptable en entreprise</li>
                                        <li>Teneur de livres en TPE/PME</li>
                                        <li>Comptable assistant dans administrations camerounaises</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Classes 4e-3e</span><span
                                    class="badge">SYSCOHADA</span><span class="badge accent">2 ans</span></div>
                        </div>
                        <div class="dept-info" id="com-gestion-licence">
                            <div class="info-header">
                                <div class="info-icon">💻</div>
                                <div>
                                    <p class="info-breadcrumb">Premier Cycle Commercial</p>
                                    <h2 class="info-title">Secrétariat &amp; Bureautique (SECRET)</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Secrétariat &amp; Bureautique forme des secrétaires
                                opérationnels maîtrisant les techniques de saisie rapide, l'organisation administrative
                                et l'utilisation des logiciels bureautiques. Les élèves apprennent la prise de notes, la
                                correspondance commerciale, la gestion des appels téléphoniques et l'accueil des
                                visiteurs. Cette formation prépare à des postes de secrétaire, réceptionniste ou
                                assistant administratif dans les administrations et entreprises du Cameroun.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Modules principaux</h4>
                                    <ul>
                                        <li>Dactylographie camerounaise</li>
                                        <li>Correspondance commerciale</li>
                                        <li>Organisation administrative</li>
                                        <li>Techniques de communication</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Secrétaire administratif</li>
                                        <li>Réceptionniste-secrétaire</li>
                                        <li>Assistant administratif</li>
                                        <li>Agent d'accueil</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Classes 4e-3e</span><span
                                    class="badge">Bureautique</span><span class="badge accent">2 ans</span></div>
                        </div>
                        <div class="dept-info" id="com-gestion-mba1">
                            <div class="info-header">
                                <div class="info-icon">🛍️</div>
                                <div>
                                    <p class="info-breadcrumb">Premier Cycle Commercial</p>
                                    <h2 class="info-title">Vente &amp; Commerce (VENTE)</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Vente & Commerce (VENTE) forme des jeunes commerciants et
                                vendeurs dynamiques maîtres des techniques de vente et de prospection. Les élèves
                                apprennent l'argumentation commerciale, la psychologie du vendeur, les fondamentaux de
                                la négociation commerciale et le calcul commercial. Au Cameroun, cette formation
                                correspond à une forte demande du secteur informel et formel de la distribution
                                (marchés, petits commerces, grandes surfaces).</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Compétences visées</h4>
                                    <ul>
                                        <li>Techniques et psychologie de la vente</li>
                                        <li>Négociation commerciale élémentaire</li>
                                        <li>Gestion relation client</li>
                                        <li>Calcul commercial et prix de vente</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Vendeur en petits commerces et marchés</li>
                                        <li>Employé vente grandes surfaces</li>
                                        <li>Agent de distribution</li>
                                        <li>Accès au travail indépendant comme commerçant</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Classes 4e-3e</span><span class="badge">Secteur
                                    commercial</span><span class="badge accent">2 ans</span></div>
                        </div>
                        <div class="dept-info" id="com-gestion-mba2">
                            <div class="info-header">
                                <div class="info-icon">🫱🏾‍🫲🏾</div>
                                <div>
                                    <p class="info-breadcrumb">Premier Cycle Commercial</p>
                                    <h2 class="info-title">Gestion &amp; Administration (GESTION)</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Gestion & Administration (GESTION) forme des organisateurs
                                administratifs créatifs et ordonnés capables de gérer les activités courantes d'une
                                structure administrative. Les élèves maîtrisent l'organisation administrative,
                                l'archivage des documents, la gestion élémentaire des stocks, la rédaction de textes
                                administratifs et les procédures courantes. Cette formation crée des assistants
                                administratifs opérationnels immédiatement recruités par les administrations et
                                entreprises camerounaises.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Contenus d'apprentissage</h4>
                                    <ul>
                                        <li>Organisation et gestion administrative courante</li>
                                        <li>Archivage et gestion des documents</li>
                                        <li>Gestion élémentaire des stocks</li>
                                        <li>Rédaction administrative et rapports</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Assistant administratif en entreprise</li>
                                        <li>Agent administratif en administration publique</li>
                                        <li>Coordonnateur logistique simple</li>
                                        <li>Gestionnaire de stock junior</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Classes 4e-3e</span><span
                                    class="badge">Administration</span><span class="badge accent">2 ans</span></div>
                        </div>
                        <div class="dept-info" id="com-gestion-mba3">
                            <div class="info-header">
                                <div class="info-icon">📈</div>
                                <div>
                                    <p class="info-breadcrumb">Premier Cycle Commercial</p>
                                    <h2 class="info-title">Analyse de Données & Informatique Commerciale (ADCI)</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Analyse de Données & Informatique Commerciale (ADCI) forme
                                des techniciens capables d'utiliser les logiciels et outils informatiques adaptés aux
                                besoins commerciaux et administratifs. Les élèves apprennent les bases de
                                l'informatique, l'utilisation des logiciels de comptabilité commerciale (Sage Saari,
                                etc.), la maîtrise des tableurs et bases de données simples. Cette formation
                                responsabilise aux réalités numériques de l'entreprise camerounaise actuelle.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Apprentissages pratiques</h4>
                                    <ul>
                                        <li>Maintenance informatique basique</li>
                                        <li>Logiciels de gestion commerciale (Sage, etc.)</li>
                                        <li>Tableurs (Excel) et bases de données simples</li>
                                        <li>Réseaux informatiques notions</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Technicien informatique junior en entreprise</li>
                                        <li>Opérateur de saisie</li>
                                        <li>Support technique métier basique</li>
                                        <li>Gestionnaire de données commerciales</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Classes 4e-3e</span><span
                                    class="badge">Informatique</span><span class="badge accent">2 ans</span></div>
                        </div>
                        <div class="dept-info active" id="com-finance-overview2">
                            <div class="info-header">
                                <div class="info-icon">📚</div>
                                <div>
                                    <p class="info-breadcrumb">Second Cycle Commercial</p>
                                    <h2 class="info-title">CG - Comptabilité et Gestion</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Comptabilité et Gestion (CG) approfondit les connaissances
                                acquises au premier cycle en maîtrisant le SYSCOHADA révisé selon les règles actuelles,
                                le traitement des opérations complexes, la clôture comptable et la présentation des
                                états financiers. Les élèves apprennent l'application stricte du SYSCOHADA, la fiscalité
                                camerounaise (impôts, TVA), l'audit comptable basique et les débuts de l'analyse
                                financière. Cette formation prépare à des postes de comptable confirm dans les TPE/PME
                                camerounaises et à la poursuite d'études en expert-comptable ou master comptabilité.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Approfondissements</h4>
                                    <ul>
                                        <li>SYSCOHADA révisé application stricte</li>
                                        <li>Fiscalité camerounaise (impôts, TVA)</li>
                                        <li>Clôture comptable avancée</li>
                                        <li>Audit comptable normes OHADA</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Collège Libermann de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Comptable confirmé en entreprise</li>
                                        <li>Chef comptable TPE/PME camerounaises</li>
                                        <li>Candidat expert-comptable ou auditeur</li>
                                        <li>Accès au master comptabilité/gestion</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Terminal G1/G2</span><span
                                    class="badge">SYSCOHADA révisé</span><span class="badge accent">Métier
                                    comptable</span></div>
                        </div>
                        <div class="dept-info" id="com-finance-compta">
                            <div class="info-header">
                                <div class="info-icon">🫱🏾‍🫲🏾</div>
                                <div>
                                    <p class="info-breadcrumb">Second Cycle Commercial</p>
                                    <h2 class="info-title">ACC - Action et Communications Commerciales</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Action et Communications Commerciales (ACC) forme des
                                spécialistes en gestion de la fonction vente et communication commerciale. Les élèves
                                approfondissent les techniques de vente avancées, la gestion d'équipes commerciales, les
                                stratégies commerciales et la communication d'entreprise. Cette formation crée des
                                cadres commerciaux aptes à manager des équipes vente et à assurer la croissance du
                                chiffre d'affaires en entreprise camerounaise.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Compétences cibles</h4>
                                    <ul>
                                        <li>Gestion et animation d'équipe commerciale</li>
                                        <li>Stratégie commerciale d'entreprise</li>
                                        <li>Communication interne et externe</li>
                                        <li>Négociation commerciale avancée</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Collège Libermann de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Responsable commercial/directeur commercial</li>
                                        <li>Chef d'équipe vente</li>
                                        <li>Spécialiste communication commerciale</li>
                                        <li>Entrepreneur commercial</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Terminal G1</span><span class="badge">Gestion
                                    commerciale</span><span class="badge accent">L3 possible</span></div>
                        </div>
                        <div class="dept-info" id="com-finance-audit">
                            <div class="info-header">
                                <div class="info-icon">🔍</div>
                                <div>
                                    <p class="info-breadcrumb">Second Cycle Commercial</p>
                                    <h2 class="info-title">ACA - Action et Communications Administratives</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Action et Communications Administratives (ACA) forme les
                                futurs cadres du secrétariat de direction et de la gestion administrative avancée. Les
                                élèves approfondissent l'organisation administrative complexe, la rédaction de documents
                                officiels, la gestion de la communication administrative. Cette formation crée des
                                secrétaires de direction et responsables administratifs aptes à coordonner des fonctions
                                administratives étendues.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Domaines de maîtrise avancés</h4>
                                    <ul>
                                        <li>Secrétariat de direction avancé</li>
                                        <li>Rédaction et protocoles administratifs</li>
                                        <li>Organisation et coordination administrative</li>
                                        <li>Communication interne d'organisation</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>CEFTI de Douala</li>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Collège Libermann de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Secrétaire de direction en entreprise</li>
                                        <li>Responsable administratif confirmé</li>
                                        <li>Coordinateur administratif senior</li>
                                        <li>Chef de secrétariat</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Terminal G2</span><span
                                    class="badge">Secretariat direction</span><span class="badge accent">Cadres
                                    administratifs</span></div>
                        </div>
                        <div class="dept-info" id="com-finance-banque">
                            <div class="info-header">
                                <div class="info-icon">💳</div>
                                <div>
                                    <p class="info-breadcrumb">Second Cycle Commercial</p>
                                    <h2 class="info-title">FIG - Finance &amp; Gestion</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Finance & Gestion (FIG) forme des spécialistes en analyse
                                financière, gestion de trésorerie et financement d'entreprise. Les élèves maîtrisent
                                l'analyse des états financiers selon SYSCOHADA, la gestion de la trésorerie
                                opérationnelle, les décisions d'investissement et le financement d'exploitation. Cette
                                formation amène à des postes de gestionnaire de trésorerie, d'analyste financier ou de
                                directeur administratif et financier tant en entreprise privée qu'administrations
                                camerounaises.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Axes de spécialisation</h4>
                                    <ul>
                                        <li>Analyse financière avancée et ratios</li>
                                        <li>Trésorerie d'entreprise - liquidité</li>
                                        <li>Évaluation et diagnostic d'affaires</li>
                                        <li>Financement et décisions d'investissement</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Joss de Douala</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Collège Libermann de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Gestionnaire de trésorerie</li>
                                        <li>Analyste financier confirmé</li>
                                        <li>Directeur administratif et financier adjoint</li>
                                        <li>Responsable planification financière</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Terminal G1</span><span class="badge">Analyse
                                    financière</span><span class="badge accent">Master Finance possible</span></div>
                        </div>
                        <div class="dept-info" id="com-finance-otre">
                            <div class="info-header">
                                <div class="info-icon">🏦</div>
                                <div>
                                    <p class="info-breadcrumb">Second Cycle Commercial</p>
                                    <h2 class="info-title">SES - Sciences et Economie Sociale</h2>
                                </div>
                            </div>
                            <p class="info-desc">La filière Sciences et Économie Sociale (SES) forme des spécialistes en
                                opérations bancaires, microfinance et techniques d'assurance. Les élèves maîtrisent les
                                opérations bancaires selon les normes COBAC (Commission Bancaire de l'Afrique Centrale),
                                l'analyse de dossiers de crédit, les produits de microfinance (CAMCCUL, tontines) et les
                                mécanismes d'assurance. Cette formation très demandée crée des cadres directs du système
                                bancaire, des microfinances et des assurances camerounaises.</p>
                            <div class="info-grid">
                                <div class="info-card">
                                    <h4>Domaines de spécialisation</h4>
                                    <ul>
                                        <li>Opérations bancaires - normes COBAC</li>
                                        <li>Analyse de dossiers de crédit</li>
                                        <li>Microfinance camerounaise (CAMCCUL, etc.)</li>
                                        <li>Techniques et produits d'assurance</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Établissements</h4>
                                    <ul>
                                        <li>Lycée Joss de Douala</li>
                                        <li>College Chevreul de Douala</li>
                                        <li>Lycée Général Leclerc de Yaoundé</li>
                                        <li>Collège François-Xavier Vogt de Yaoundé</li>
                                        <li>Collège Libermann de Douala</li>
                                    </ul>
                                </div>
                                <div class="info-card">
                                    <h4>Débouchées</h4>
                                    <ul>
                                        <li>Agent bancaire chargé d'accueil</li>
                                        <li>Analyste crédit junior confirmé</li>
                                        <li>Agent d'assurance ou courtier</li>
                                        <li>Responsable centre microfinance</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-badges"><span class="badge">Terminal G2</span><span
                                    class="badge">COBAC-agré</span><span class="badge accent">Master Services
                                    fin.</span></div>
                        </div>
                    </div>
                </div><!-- /panel-commerciale -->

            </div><!-- /panels-wrapper -->
        </div>
    </section>
    <!-- FOOTER -->
    <footer class="footer">
        <p><strong>Oriceft</strong> — Douala, Cameroun</p>
        <p style="margin-top:8px">© 2026 Oriceft. Tous droits réservés.</p>
    </footer>

    <script src="../js/filiere.js"></script>
    <script>
        const menuToogle = document.querySelector('.hamburgerToogle');
        const menuLinks = document.querySelector('.navlink');
        menuToogle.addEventListener('click', function () {
            menuLinks.classList.toggle('active');
            menuToogle.classList.toggle('active');
        })
    </script>
</body>

</html>