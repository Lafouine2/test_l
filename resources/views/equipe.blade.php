<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>OriCeft - Nos Réalisateurs</title>
    <link rel="stylesheet" href="{{asset('css/equipe.css')}}" />
    <link rel="stylesheet" href="{{asset('css/main.css')}}" />
    <link rel="shortcut icon" href="{{asset('img/logo.svg')}}" type="image/svg+xml" />
  </head>

  <body>
    <!-- <header>
        <div class="navbar">
            <div class="mklogo">
                <a href="/html/accueil.html" class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                <li><a href="./accueil.html">Accueil</a></li>
                <li><a href="./filiere.html">Filières</a></li>
                <li><a href="./contact.html">Contact</a></li>
                <li class="page-active"><a href="./equipe.html">Equipes</a></li>
            </ul>
            <div class="links">
                <div class="trynow">
                    <a href="/html/index.html">commencer l'orientation</a>
                </div>
                <div class="hamburgerToogle">
                    <div class="trait"></div>
                </div>
            </div>
        </div>
    </header> -->
    <header>
      <div class="navbar">
        <div class="mklogo">
          <a href="/html/accueil.html" class="logo">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="lucide lucide-graduation-cap h-7 w-7 text-primary-foreground"
            >
              <path
                d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"
              ></path>
              <path d="M22 10v6"></path>
              <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
            </svg>
            OriCeft
          </a>
        </div>
                 <ul class="navlink">
                <li><a href="{{route('accueil')}}">Accueil</a></li>
                <li><a href="{{route('filiere')}}">Filières</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
                <li class="page-active"><a href="{{route('equipe')}}">Equipes</a></li>
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

    <main>
      <section class="team-hero hero">
        <div class="hero-bg"></div>
        <span class="hero-tag" style="color: #ffff"
          >Derrière <span style="color: #fff">Ori</span><span>Ceft</span></span
        >
        <h1 style="color: #fff">
          Les <span class="highlight">Réalisateurs</span>
        </h1>
        <p>L'équipe multidisciplinaire qui donne vie à vos ambitions.</p>
        <div class="hero-line"></div>
      </section>

      <div class="container">
        <div class="category-section" data-aos>
          <h2 class="category-title">
            <span class="cat-num">01</span> Coodinateurs
          </h2>
          <div class="team-grid team-grid--centered">
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/encadreur1.jpg" alt="Encadreur" />
                </div>
                <h3 class="member-name">M. TIENTCHEU ISRAëL</h3>
                <p class="member-role">
                  COORDONATEUR PRINCIPALE <br />(Tech Lead Analyst)
                </p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/encadreur2.png" alt="Encadreur" />
                </div>
                <h3 class="member-name">M. ETONDE BELLO</h3>
                <p class="member-role">COORDONATEUR ADJOINT</p>
              </div>
            </div>
          </div>
        </div>

        <div class="category-section" data-aos>
          <h2 class="category-title">
            <span class="cat-num">02</span> Développement
          </h2>
          <div class="team-grid">
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/kammm.jpg" alt="Chef de projet" />
                </div>
                <h3 class="member-name">KAAM MAëL EHOWE</h3>
                <p class="member-role">CHEF DE PROJET PRINCIPAL</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="{{asset('img/imgG3 - Modifié.png')}}" alt="Dev. backend" />
                </div>
                <h3 class="member-name">NGUEGOUM BRAYALE</h3>
                <p class="member-role">
                  CHEF DE PROJET ADJOINT <br />(Dev. Backend)
                </p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imgG8.jpg" alt="Dev. backend" />
                </div>
                <h3 class="member-name">NZEH BEYAKA</h3>
                <p class="member-role">DEV. Backend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imgG4.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">OTTO SIMBA</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>

            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img7 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">NIATIZE KEMPA JOYCE</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img6 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">TEMFACK MELOCKGO</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>

            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img16 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">FEUJIO NGUELEMO</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img12 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">TCHOCONTÉ HAMENI</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img13 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">MPOUMA YANNICK ROBERT</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imgke - Modifié.png" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">KEUBENG DONGMO</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img
                    src="../img../img10 - Modifié1.jpg"
                    alt="Dev. frontend"
                  />
                </div>
                <h3 class="member-name">CHEUDEU POSSIE</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img22 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">ALOURA RYANN</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img14 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">TOUNOUGA</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img17 - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">KEME ARISTIDE</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>

            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img
                    src="../img../imgewa - Modifié.jpg"
                    alt="Dev. frontend"
                  />
                </div>
                <h3 class="member-name">EWANE JOSEPH</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>

            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/AWA - Modifié.jpg" alt="Dev. frontend" />
                </div>
                <h3 class="member-name">AWANG</h3>
                <p class="member-role">DEV. Frontend</p>
              </div>
            </div>
          </div>
        </div>

        <div class="category-section" data-aos>
          <h2 class="category-title">
            <span class="cat-num">03</span> IA - Prompteur
          </h2>
          <div class="team-grid team-grid--centered">
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imglol.jpg" alt="" />
                </div>
                <h3 class="member-name">BONDJA GLORIA</h3>
                <p class="member-role">Prompt Manager</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/pti.jpg" alt="" />
                </div>
                <h3 class="member-name">KEBOU FREDY</h3>
                <p class="member-role">Prompt Worker</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imglol1.jpg" alt="" />
                </div>
                <h3 class="member-name">BABOU MONDESIRE</h3>
                <p class="member-role">Prompt Worker</p>
              </div>
            </div>
          </div>
        </div>

        <div class="category-section" data-aos>
          <h2 class="category-title">
            <span class="cat-num">04</span> Collecte des données
          </h2>
          <div class="team-grid team-grid--centeDERRIÈREred">
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imgG7 - Modifié.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">PELAMI RUSS</h3>
                <p class="member-role">Collecteur de Donnée</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img9 - Modifié.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">MBENGMO ERWIN</h3>
                <p class="member-role">Collecteur de Donnée</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../imggg.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">ELONG RITE</h3>
                <p class="member-role">Collecteur de Donnée</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/ALI.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">TEMAGOU ALI</h3>
                <p class="member-role">Collecteur de Donnée</p>
              </div>
            </div>
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img/img11 - Modifié.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">NYOBE THOMAS</h3>
                <p class="member-role">Collecteur de Donnée</p>
              </div>
            </div>
          </div>
        </div>

        <div class="category-section" data-aos>
          <h2 class="category-title">
            <span class="cat-num">05</span> Logo Design
          </h2>
          <div class="team-grid team-grid--solo">
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img3 - Modifié.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">MINKO stylinsvinsky</h3>
                <p class="member-role">Logo Oriceft</p>
              </div>
            </div>
          </div>
        </div>

        <div class="category-section" data-aos>
          <h2 class="category-title">
            <span class="cat-num">06</span> Analyste
          </h2>
          <div class="team-grid team-grid--solo">
            <div class="member-card">
              <div class="card-inner">
                <div class="photo-container">
                  <div class="photo-ring"></div>
                  <img src="../img../img15 - Modifié1.jpg" alt="Infographe" />
                </div>
                <h3 class="member-name">SILIKI KETURA</h3>
                <p class="member-role">Analyste</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script>
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const cards = entry.target.querySelectorAll(".member-card");
              cards.forEach((card, idx) => {
                card.style.animationDelay = `${idx * 90}ms`;
                card.classList.add("visible");
              });
              observer.unobserve(entry.target);
            }
          });
        },
        { threshold: 0.1 },
      );

      document
        .querySelectorAll("[data-aos]")
        .forEach((el) => observer.observe(el));
    </script>
  </body>
  <script>
    const menuToogle = document.querySelector(".hamburgerToogle");
    const menuLinks = document.querySelector(".navlink");
    menuToogle.addEventListener("click", function () {
      menuLinks.classList.toggle("active");
      menuToogle.classList.toggle("active");
    });
  </script>
</html>
