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
                    <h2>Question 1 — Quelle est ta filière actuelle ?</h2>
                    <div class="options">
                        <select name="t1" id="t1_select" style="width: 100%; padding: 12px; border-radius: 8px; font-size: 16px; border: 2px solid #4a3b2f;">
                            <option value="" disabled selected>-- Choisis ta filière actuelle --</option>
                            <option value="Le Bois (AMEB)">Le Bois (AMEB)</option>
                            <option value="La Mécanique / Voiture (CMA/MAVA)">La Mécanique / Voiture (CMA/MAVA)</option>
                            <option value="L'Électricité (ELEC)">L'Électricité (ELEC)</option>
                            <option value="Le Fer / Les Machines (MECG)">Le Fer / Les Machines (MECG)</option>
                            <option value="La Maçonnerie (MACO)">La Maçonnerie (MACO)</option>
                            <option value="Couture / Cuisine (IH/ESF)">Couture / Cuisine (IH/ESF)</option>
                            <option value="Bureau / Commerce (STT)">Bureau / Commerce (STT)</option>
                            <option value="Autre">Autre chose</option>
                        </select>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 2 — Préfères-tu fabriquer des choses réelles plutôt que de lire des livres ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t2" value="Oui, j'aime utiliser mes mains" id="t2_1">
                            <label for="t2_1">Oui, j'aime utiliser mes mains</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t2" value="Non, j'aime bien étudier la théorie" id="t2_2">
                            <label for="t2_2">Non, j'aime bien étudier la théorie</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 3 — Aimes-tu dessiner des formes précises avec une règle et une équerre ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t3" value="Oui, j'adore le dessin technique" id="t3_1">
                            <label for="t3_1">Oui, j'adore le dessin technique</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t3" value="Non, le dessin me fatigue un peu" id="t3_2">
                            <label for="t3_2">Non, le dessin me fatigue un peu</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 4 — Aimerais-tu imaginer et dessiner les maisons du futur ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t4" value="Oui, j'aimerais être architecte ou constructeur" id="t4_1">
                            <label for="t4_1">Oui, j'aimerais être architecte ou constructeur</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t4" value="Non, je préfère les machines ou les voitures" id="t4_2">
                            <label for="t4_2">Non, je préfère les machines ou les voitures</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 5 — Quand tu vois une voiture en panne, as-tu envie de savoir ce qu'il y a sous le capot ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t5" value="Oui, les moteurs me passionnent" id="t5_1">
                            <label for="t5_1">Oui, les moteurs me passionnent</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t5" value="Non, ça ne m'attire pas vraiment" id="t5_2">
                            <label for="t5_2">Non, ça ne m'attire pas vraiment</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 6 — Est-ce que tu t'intéresses aux fils électriques et aux ampoules chez toi ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t6" value="Oui, j'aime comprendre comment l'énergie circule" id="t6_1">
                            <label for="t6_1">Oui, j'aime comprendre comment l'énergie circule</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t6" value="Non, je préfère d'autres métiers" id="t6_2">
                            <label for="t6_2">Non, je préfère d'autres métiers</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 7 — Aimes-tu l'odeur du bois et fabriquer des meubles (chaises, lits) ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t7" value="Oui, j'aime transformer le bois" id="t7_1">
                            <label for="t7_1">Oui, j'aime transformer le bois</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t7" value="Non, je préfère travailler le métal ou l'aluminium" id="t7_2">
                            <label for="t7_2">Non, je préfère travailler le métal ou l'aluminium</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 8 — Aimerais-tu fabriquer des objets solides en fer ou en acier ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t8" value="Oui, j'aime le travail du métal" id="t8_1">
                            <label for="t8_1">Oui, j'aime le travail du métal</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t8" value="Non, ce n'est pas mon truc" id="t8_2">
                            <label for="t8_2">Non, ce n'est pas mon truc</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 9 — Es-tu très fort pour compter l'argent et faire des calculs rapides ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t9" value="Oui, je suis bon en calcul et gestion" id="t9_1">
                            <label for="t9_1">Oui, je suis bon en calcul et gestion</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t9" value="Non, je préfère fabriquer des choses manuellement" id="t9_2">
                            <label for="t9_2">Non, je préfère fabriquer des choses manuellement</label>
                        </div>
                    </div>
                </div>

                <div class="question">
                    <h2>Question 10 — Te vois-tu plus tard travailler dans un bureau propre et bien organisé ?</h2>
                    <div class="options">
                        <div class="option">
                            <input type="radio" name="t10" value="Oui, le travail de bureau me plaît" id="t10_1">
                            <label for="t10_1">Oui, le travail de bureau me plaît</label>
                        </div>
                        <div class="option">
                            <input type="radio" name="t10" value="Non, je veux bouger, être sur le terrain ou à l'atelier" id="t10_2">
                            <label for="t10_2">Non, je veux bouger, être sur le terrain ou à l'atelier</label>
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

let quizz = 7;
let USER_ID = "<?php echo $id ?>";

var NEXT_PAGE = "quizz8.php?id=" + USER_ID;
var PHASE = 1;
var TOTAL_Q = 30;
var PHASE_OFFSET = 0;

</script>

<script src="../js/quizz.js"></script>

</body>
</html>
