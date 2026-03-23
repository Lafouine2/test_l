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
            <div class="question">
    <h2>Question 21 — Quelle est ta moyenne habituelle en Mathématiques ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z21" value="Bonne ou Excellente (12/20 et plus)" id="z21_1">
            <label for="z21_1">Bonne ou Excellente (12/20 et plus)</label>
        </div>
        <div class="option">
            <input type="radio" name="z21" value="Moyenne ou Faible (moins de 10/20)" id="z21_2">
            <label for="z21_2">Moyenne ou Faible (moins de 10/20)</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 22 — Comment sont tes notes en PCT (Physique, Chimie, Technologie) ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z22" value="Je réussis bien les calculs et les schémas" id="z22_1">
            <label for="z22_1">Je réussis bien les calculs et les schémas</label>
        </div>
        <div class="option">
            <input type="radio" name="z22" value="C'est une matière difficile pour moi" id="z22_2">
            <label for="z22_2">C'est une matière difficile pour moi</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 23 — Comment te trouves-tu en Français (Dictée, Rédaction, Texte) ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z23" value="J'ai de très bonnes notes en rédaction" id="z23_1">
            <label for="z23_1">J'ai de très bonnes notes en rédaction</label>
        </div>
        <div class="option">
            <input type="radio" name="z23" value="L'orthographe et la grammaire me fatiguent" id="z23_2">
            <label for="z23_2">L'orthographe et la grammaire me fatiguent</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 24 — Quelle est ta moyenne habituelle en Anglais ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z24" value="Je comprends et je parle bien l'anglais" id="z24_1">
            <label for="z24_1">Je comprends et je parle bien l'anglais</label>
        </div>
        <div class="option">
            <input type="radio" name="z24" value="C'est une de mes matières les plus faibles" id="z24_2">
            <label for="z24_2">C'est une de mes matières les plus faibles</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 25 — Quelle est ta note moyenne en Sciences (SVT / SVTEEH) ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z25" value="J'ai souvent de bonnes notes sur le corps humain" id="z25_1">
            <label for="z25_1">J'ai souvent de bonnes notes sur le corps humain</label>
        </div>
        <div class="option">
            <input type="radio" name="z25" value="Je n'arrive pas bien à retenir les leçons de biologie" id="z25_2">
            <label for="z25_2">Je n'arrive pas bien à retenir les leçons de biologie</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 26 — Aimes-tu dessiner des plans précis avec règle et équerre ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z26" value="Oui, j'aime la précision du dessin technique" id="z26_1">
            <label for="z26_1">Oui, j'aime la précision du dessin technique</label>
        </div>
        <div class="option">
            <input type="radio" name="z26" value="Non, je préfère le dessin libre ou l'écriture" id="z26_2">
            <label for="z26_2">Non, je préfère le dessin libre ou l'écriture</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 27 — Aimerais-tu travailler sur des moteurs ou des circuits électriques ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z27" value="Oui, toucher à la technologie me passionne" id="z27_1">
            <label for="z27_1">Oui, toucher à la technologie me passionne</label>
        </div>
        <div class="option">
            <input type="radio" name="z27" value="Non, je préfère un travail de bureau bien propre" id="z27_2">
            <label for="z27_2">Non, je préfère un travail de bureau bien propre</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 28 — Es-tu rapide pour calculer de l'argent sans faire d'erreur ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z28" value="Oui, j'ai la tête pour les chiffres et l'argent" id="z28_1">
            <label for="z28_1">Oui, j'ai la tête pour les chiffres et l'argent</label>
        </div>
        <div class="option">
            <input type="radio" name="z28" value="Non, je me trompe souvent dans les comptes" id="z28_2">
            <label for="z28_2">Non, je me trompe souvent dans les comptes</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 29 — Aimerais-tu travailler comme comptable ou secrétaire ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z29" value="Oui, j'aime l'organisation de bureau et les dossiers" id="z29_1">
            <label for="z29_1">Oui, j'aime l'organisation de bureau et les dossiers</label>
        </div>
        <div class="option">
            <input type="radio" name="z29" value="Non, je m'ennuierais trop vite derrière un bureau" id="z29_2">
            <label for="z29_2">Non, je m'ennuierais trop vite derrière un bureau</label>
        </div>
    </div>
</div>

<div class="question">
    <h2>Question 30 — Es-tu capable de convaincre tes parents ou amis d'accepter tes idées ?</h2>
    <div class="options">
        <div class="option">
            <input type="radio" name="z30" value="Oui, je sais bien négocier et diriger" id="z30_1">
            <label for="z30_1">Oui, je sais bien négocier et diriger</label>
        </div>
        <div class="option">
            <input type="radio" name="z30" value="Non, je suis plutôt discret et je suis les autres" id="z30_2">
            <label for="z30_2">Non, je suis plutôt discret et je suis les autres</label>
        </div>
    </div>
</div>
            </div>
            <div class="nav">
<button type="button" class="prev" onclick="prevQuestion()">← Précédent</button>
<button type="button" class="next" disabled>Suivant →</button>
<button type="button" class="next" id="submitBtn" style="display:none;">Terminer →</button>
</div>

</form>
</div>

<?php 
$id = $_GET["id"];
?>

<script>

let quizz = 6;
let USER_ID = "<?php echo $id ?>";

var NEXT_PAGE = "envoi.php?id=" + USER_ID;
var PHASE = 3;
var TOTAL_Q = 30;
var PHASE_OFFSET = 20;

</script>

<script src="../js/quizz.js"></script>

</body>
</html>
