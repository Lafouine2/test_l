<?php
require("database2.php");
$quizz = $_POST["quizz"];
if($quizz == 1){
$questions = [
 "q1" => "À la maison, si une chaise en bois est cassée, que fais-tu ?",
 "q2" => "Qu'est-ce que tu préfères faire pendant ton temps libre ?",
 "q3" => "Aimes-tu aider tes parents à calculer la monnaie du marché ?",
 "q4" => "Si on t'offre un moteur de jouet qui ne marche plus, tu... ?",
 "q5" => "Quel objet aimerais-tu avoir dans ton sac ?",
 "q6" => "Aimes-tu prendre soin des vêtements ou cuisiner ?",
 "q7" => "Si tu vois un beau bâtiment, qu'est-ce qui t'intéresse ?",
 "q8" => "Est-ce que tu es patient pour recopier des longs textes ?",
 "q9" => "Aimes-tu plus pratiquer ou écrire ?",
 "q10" => "Quand tu plantes une graine, que fais-tu ?"
];
}

if($quizz == 2){
$questions = [
    "q11" => "À l'école, aimes-tu faire la dictée et rédiger des histoires ?",
    "q12" => "Quand le maître donne un problème de mathématiques difficile...",
    "q13" => "Plus tard, aimerais-tu parler plusieurs langues (Allemand, Espagnol...) ?",
    "q14" => "Aimes-tu étudier les plantes, les animaux et le corps humain ?",
    "q15" => "Aimes-tu utiliser la règle et l'équerre pour tracer des formes précises ?",
    "q16" => "Pendant les cours de Travail Manuel (TM), tu es :",
    "q17" => "T'intéresses-tu à la propreté, à la santé et à la cuisine ?",
    "q18" => "Qu'est-ce qui t'attire sur un ordinateur ?",
    "q19" => "Aimes-tu apprendre l'histoire du Cameroun et les pays du monde ?",
    "q20" => "Est-ce que tu aimerais savoir comment un moteur de voiture fonctionne ?"
  ];
}

if($quizz == 3){
  $questions = [
    "q21" => "Aimerais-tu être l'avocat qui défend les gens au tribunal ?",
    "q22" => "Aimerais-tu être le mécanicien qui répare les gros camions ?",
    "q23" => "Aimerais-tu soigner les enfants malades plus tard ?",
    "q24" => "Aimerais-tu construire des ponts et des routes au Cameroun ?",
    "q25" => "Aimerais-tu créer ta propre boutique et vendre des produits ?",
    "q26" => "Quel habit aimerais-tu porter chaque jour pour travailler ?",
    "q27" => "Aimerais-tu fabriquer des meubles de luxe en bois ?",
    "q28" => "Aimerais-tu travailler dans une banque plus tard ?",
    "q29" => "Aimerais-tu réparer les téléphones et les ordinateurs ?",
    "q30" => "Es-tu prêt à faire de très longues études à l'université ?"
  ];
}
if($quizz == 4){
  $questions = [
    "z1" => "Aimes-tu démonter des objets pour voir comment ils fonctionnent ?",
    "z2" => "Quand un appareil ne marche plus à la maison, que fais-tu d'abord ?",
    "z3" => "Aimes-tu construire des choses avec tes mains (bois, carton, métal) ?",
    "z4" => "Quand tu vois une machine compliquée, es-tu curieux de comprendre son fonctionnement ?",
    "z5" => "Aimes-tu résoudre des problèmes logiques ou des énigmes ?",
    "z6" => "Si tu avais un petit atelier, qu'aimerais-tu fabriquer ?",
    "z7" => "Aimes-tu utiliser les outils comme le tournevis, marteau ou pince ?",
    "z8" => "Quand quelque chose est cassé, préfères-tu réparer ou acheter un nouveau ?",
    "z9" => "Est-ce que tu t'intéresses aux inventions et aux nouvelles technologies ?",
    "z10" => "Aimerais-tu créer une machine ou un objet utile pour aider les gens ?"
  ];
}
if($quizz == 5){
  $questions = [
    "z11" => "Aimes-tu réparer un vélo ou une petite panne électrique ?",
    "z12" => "Aimerais-tu cultiver un champ ou t'occuper d'un jardin ?",
    "z13" => "Aimes-tu faire des calculs de physique ou de chimie ?",
    "z14" => "Aimes-tu chercher la définition des mots difficiles ?",
    "z15" => "Aimerais-tu créer tes propres modèles de vêtements ?",
    "z16" => "Aimes-tu écrire tes pensées dans un cahier ou un journal ?",
    "z17" => "Aimes-tu t'occuper des enfants ou des personnes âgées ?",
    "z18" => "Aimes-tu participer aux activités d'une association ?",
    "z19" => "Aimerais-tu gérer une boutique ou vendre des produits ?",
    "z20" => "Aimes-tu faire des listes pour ne rien oublier ?"
  ];
}
if($quizz == 6){
  $questions = [
    "z21" => "Quelle est ta moyenne habituelle en Mathématiques  ?",
    "z22" => "Comment sont tes notes en PCT (Physique, Chimie, Technologie) ?",
    "z23" =>  "Comment te trouves-tu en Français (Dictée, Rédaction, Texte) ?",
    "z24" => "Quelle est ta moyenne habituelle en Anglais ?",
    "z25" => "Quelle est ta note moyenne en Sciences (SVT / SVTEEH) ?",
    "z26" => "Aimes-tu dessiner des plans précis avec règle et équerre ?",
    "z27" => "Aimerais-tu travailler sur des moteurs ou des circuits électriques ?",
    "z28" =>  "Es-tu rapide pour calculer de l'argent sans faire d'erreur ?",
    "z29" =>  "Aimerais-tu travailler comme comptable ou secrétair ?",
    "z30" => "Es-tu capable de convaincre tes parents ou amis d'accepter tes idées   ?"
  ];
}
if($quizz == 7){
  $questions = [
    "t1" => "Quelle est ta filière actuelle ?",
    "t2" => "Préfères-tu fabriquer des choses réelles plutôt que de lire des livres ?",
    "t3" => "Aimes-tu dessiner des formes précises avec une règle et une équerre ?",
    "t4" => "Aimerais-tu imaginer et dessiner les maisons du futur ?",
    "t5" => "Quand tu vois une voiture en panne, as-tu envie de savoir ce qu'il y a sous le capot ?",
    "t6" => "Est-ce que tu t'intéresses aux fils électriques et aux ampoules chez toi ?",
    "t7" => "Aimes-tu l'odeur du bois et fabriquer des meubles (chaises, lits) ?",
    "t8" => "Aimerais-tu fabriquer des objets solides en fer ou en acier ?",
    "t9" => "Es-tu très fort pour compter l'argent et faire des calculs rapides ?",
    "t10" => "Te vois-tu plus tard travailler dans un bureau propre et bien organisé ?"
  ];
}
if($quizz == 8){
  $questions = [
    "t11" => "Aimes-tu ouvrir les appareils (radios, téléphones) pour voir l'électronique à l'intérieur ?",
    "t12" => "Est-ce que tu aimes réparer des choses qui ne marchent plus à la maison ?",
    "t13" => "Est-ce que tu as de la patience pour coudre ou fabriquer des vêtements ?",
    "t14" => "Aimerais-tu apprendre à cuisiner pour beaucoup de monde dans un hôtel ?",
    "t15" => "Utilises-tu souvent un ordinateur pour autre chose que les jeux ?",
    "t16" => "Préfères-tu travailler dehors, même s'il fait chaud ?",
    "t17" => "Es-tu prêt à porter des chaussures de sécurité tous les jours ?",
    "t18" => "Aimes-tu les activités qui demandent d'être très calme et précis ?",
    "t19" => "Aimerais-tu un jour être le chef de ton propre atelier ?",
    "t20" => "Est-ce que tu trouves facile de lire un plan ou une carte ?"
  ];
}
if($quizz == 9){
  $questions = [
    "t21" => "Si tu devais choisir, préfères-tu travailler avec du bois ou du métal ?",
    "t22" => "Aimerais-tu savoir comment on installe la lumière dans une maison ?",
    "t23" => "Aimes-tu parler aux gens pour leur vendre des produits ?",
    "t24" => "Aimerais-tu devenir un expert qui répare les climatisations ?",
    "t25" => "Es-tu d'accord pour faire beaucoup d'efforts physiques ?",
    "t26" => "Est-ce que tu veux faire de longues études après le Bac ?",
    "t27" => "Es-tu fier de montrer ce que tu as fabriqué ?",
    "t28" => "Te sens-tu à l'aise avec les calculs de ton métier ?",
    "t29" => "Est-ce que tu aimes apprendre comment les machines fonctionnent ?",
    "t30" => "Es-tu prêt à donner le meilleur pour ton examen cette année ?"
  ];
}



if(isset($_POST["question"], $_POST["value"], $_POST["id"])){

    $questionKey = $_POST["question"]; // q1, q2...
    $value = $_POST["value"];
    $id = $_POST["id"];

    $nom_question = $questions[$questionKey]; // transforme q1 → texte

    $insert = $connexion->prepare(
        "INSERT INTO reponses (contenu, nom_question, id_user)
         VALUES (?, ?, ?)"
    );

    $insert->execute([$value, $nom_question, $id]);

    echo "ok";
}