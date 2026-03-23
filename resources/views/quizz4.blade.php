<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orientation | Oricef</title>
    <link rel="stylesheet" href="../css/quizz.css">
</head>
<body>
    <div class="container">
        <form method="POST" onsubmit="return false">

            <div class="card">
                <div class="indicator">
                    <div class="indicator-top">
                        <span id="questionNumber">Question 1</span>
                        <span id="progressPercent">0%</span>
                    </div>
                    <div class="progress-container">
                    <div class="progress-bar" id="progressBar"></div>
                </div>
            </div>
            <div class="question active">
    <h2>Question 1 — Aimes-tu démonter des objets pour voir comment ils fonctionnent ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z1" value="Oui, j'aime la mécanique et la réparation" id="z1_1">
            <label for="z1_1">Oui, j'aime la mécanique et la réparation</label>
        </div>
        <div class="option">
            <input type="radio" name="z1" value="Non, je préfère utiliser l'objet simplement" id="z1_2">
            <label for="z1_2">Non, je préfère utiliser l'objet simplement</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 2 — Aimerais-tu travailler sur un chantier de construction ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z2" value="Oui, j'aime voir les bâtiments s'élever" id="z2_1">
            <label for="z2_1">Oui, j'aime voir les bâtiments s'élever</label>
        </div>
        <div class="option">
            <input type="radio" name="z2" value="Non, je préfère travailler à l'abri dans un bureau" id="z2_2">
            <label for="z2_2">Non, je préfère travailler à l'abri dans un bureau</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 3 — Aimes-tu résoudre des exercices de mathématiques compliqués ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z3" value="Oui, j'aime chercher la solution logique" id="z3_1">
            <label for="z3_1">Oui, j'aime chercher la solution logique</label>
        </div>
        <div class="option">
            <input type="radio" name="z3" value="Non, les longs calculs m'ennuient" id="z3_2">
            <label for="z3_2">Non, les longs calculs m'ennuient</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 4 — Es-tu curieux de comprendre l'origine des maladies ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z4" value="Oui, la biologie et la santé m'intéressent" id="z4_1">
            <label for="z4_1">Oui, la biologie et la santé m'intéressent</label>
        </div>
        <div class="option">
            <input type="radio" name="z4" value="Non, ce n'est pas un sujet qui me passionne" id="z4_2">
            <label for="z4_2">Non, ce n'est pas un sujet qui me passionne</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 5 — Aimes-tu dessiner, peindre ou faire de la décoration ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z5" value="Oui, j'ai beaucoup d'imagination" id="z5_1">
            <label for="z5_1">Oui, j'ai beaucoup d'imagination</label>
        </div>
        <div class="option">
            <input type="radio" name="z5" value="Non, je ne suis pas très créatif visuellement" id="z5_2">
            <label for="z5_2">Non, je ne suis pas très créatif visuellement</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 6 — Aimes-tu inventer des chansons ou jouer la comédie ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z6" value="Oui, j'aime les arts du spectacle" id="z6_1">
            <label for="z6_1">Oui, j'aime les arts du spectacle</label>
        </div>
        <div class="option">
            <input type="radio" name="z6" value="Non, je suis plutôt réservé" id="z6_2">
            <label for="z6_2">Non, je suis plutôt réservé</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 7 — Aimes-tu expliquer les leçons à tes camarades ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z7" value="Oui, j'aime transmettre ce que je sais" id="z7_1">
            <label for="z7_1">Oui, j'aime transmettre ce que je sais</label>
        </div>
        <div class="option">
            <input type="radio" name="z7" value="Non, je préfère étudier seul" id="z7_2">
            <label for="z7_2">Non, je préfère étudier seul</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 8 — Aimerais-tu travailler comme infirmier ou assistant social ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z8" value="Oui, j'aime aider les personnes en difficulté" id="z8_1">
            <label for="z8_1">Oui, j'aime aider les personnes en difficulté</label>
        </div>
        <div class="option">
            <input type="radio" name="z8" value="Non, ce sont des métiers trop difficiles pour moi" id="z8_2">
            <label for="z8_2">Non, ce sont des métiers trop difficiles pour moi</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 9 — Aimes-tu diriger une équipe lors d'un match ou d'un projet ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z9" value="Oui, j'aime prendre des décisions et guider les autres" id="z9_1">
            <label for="z9_1">Oui, j'aime prendre des décisions et guider les autres</label>
        </div>
        <div class="option">
            <input type="radio" name="z9" value="Non, je préfère suivre les consignes" id="z9_2">
            <label for="z9_2">Non, je préfère suivre les consignes</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 10 — Aimes-tu que ton cahier soit toujours parfaitement rangé ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z10" value="Oui, l'ordre et l'organisation sont importants" id="z10_1">
            <label for="z10_1">Oui, l'ordre et l'organisation sont importants</label>
        </div>
        <div class="option">
            <input type="radio" name="z10" value="Non, je ne fais pas trop attention à ça" id="z10_2">
            <label for="z10_2">Non, je ne fais pas trop attention à ça</label>
        </div>
    </div>
</div>
            </div>
         
         
            <div class="nav">
<button type="button" class="prev" onclick="prevQuestion()">← Précédent</button>
<button type="button" class="next" disabled>Suivant →</button>
<button type="button" class="next" id="submitBtn" style="display:none;">Continuer →</button>
</div>

</form>
</div>

<?php 
$id = $_GET["id"];
?>

<script>

let quizz = 4;
let USER_ID = "<?php echo $id ?>";

var NEXT_PAGE = "quizz5.php?id=" + USER_ID;
var PHASE = 1;
var TOTAL_Q = 30;
var PHASE_OFFSET = 0;

</script>

<script src="../js/quizz.js"></script>

</body>
</html>