<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientation Scolaire - Cameroun</title>
    <link rel="icon" type="image/svg+xml" href="/img/vite.svg" />
    <link rel="stylesheet" href="{{asset('css/mainpageapp.css')}}">
    <link rel="stylesheet" href="{{asset('css/mainpageapp_responsive.css')}}">
</head>
<body>
    <div id="app">
        <main class="screen connect">
            <div class="form-wrapper">
                <h2>Remplissez les informations</h2>
                <form id="orientationForm" method="post" action="/user">
                    @csrf
                    <div class="input-group">
                        <label for="name" id="nom">Nom :</label>
                        <input type="text" id="name" name="name" placeholder="Votre nom" required>
                    </div>
                    
                    <div class="input-group">
                        <label for="surname" id="prenom">Prénom :</label>
                        <input type="text" id="surname" name="surname" placeholder="Votre prénom" required>
                    </div>

                    <div class="selection-container">
                        <label class="section-title">Quel est votre dernier diplôme ?</label>
                        <div class="level-selection">
                            <div class="level-item">
                                <input type="radio" name="niveau" id="lvl_cep" value="CEP" required>
                                <label for="lvl_cep">
                                    <div class="icon">📖</div>
                                    <span>CEP</span>
                                </label>
                            </div>

                            <div class="level-item">
                                <input type="radio" name="niveau" id="lvl_bepc" value="BEPC">
                                <label for="lvl_bepc">
                                    <div class="icon">🎓</div>
                                    <span>BEPC</span>
                                </label>
                            </div>

                            <div class="level-item">
                                <input type="radio" name="niveau" id="lvl_cap" value="CAP">
                                <label for="lvl_cap">
                                    <div class="icon">🛠️</div>
                                    <span>CAP</span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <p class="notice">
                        <strong>NB :</strong> Merci de renseigner tous les champs. Ces informations sont essentielles pour vous proposer des filières adaptées.
                    </p>

                    <button type="submit" name="send" class="btnNext">Commencer le Test</button>
                </form>
            </div>
        </main>

        <aside class="screen explain">
            <div class="explain-content">
                <h2>Pourquoi est-ce important ?</h2>
                <p>
                    Un suivi personnalisé permet de mieux comprendre le niveau académique, 
                    les besoins et les talents de l'enfant afin de lui proposer des filières 
                    adaptées au système scolaire camerounais.
                </p>
                <div class="explain-image">
                    <img src="../img/imageo.png" alt="Illustration orientation scolaire">
                </div>
            </div>
        </aside>
    </div>

 <script>
        document.getElementById('orientationForm').addEventListener("submit", function (e) {
            e.preventDefault();
            const selected = document.querySelector('input[name="niveau"]:checked');
            const name = document.querySelector('input[name="name"]').value;
            const surname = document.querySelector('input[name="surname"]').value;
            const cep  = document.getElementById('lvl_cep').value;
            const bepc = document.getElementById('lvl_bepc').value;
            const cap  = document.getElementById('lvl_cap').value;
            if (selected && name) {
        document.getElementById('orientationForm').submit();
            } else {
                alert("Veuillez remplir tous les champs.");
            }
        });
    </script>
</body>
</html>