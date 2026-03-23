<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analyse en cours | OriCeft</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/minloading.css">
</head>

<body>


    <div class="rings">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
    </div>

    <div class="loading-center">

        <div class="spinner-wrap">
            <div class="spin-a"></div>
            <div class="spin-b"></div>
            <div class="spin-core">🧠</div>
        </div>

        <p class="loading-title" id="ldTitle">Analyse en cours…</p>
        <p class="loading-sub" id="ldSub">Traitement de vos réponses</p>

        <ul class="steps">
            <li class="step" id="s0">
                <div class="step-dot" id="d0">→</div><span id="t0">Enregistrement de vos réponses</span>
            </li>
            <li class="step" id="s1">
                <div class="step-dot" id="d1">→</div><span id="t1">Calcul du profil RIASEC</span>
            </li>
            <li class="step" id="s2">
                <div class="step-dot" id="d2">→</div><span id="t2">Analyse des dimensions dominantes</span>
            </li>
            <li class="step" id="s3">
                <div class="step-dot" id="d3">→</div><span id="t3">Préparation de la suite</span>
            </li>
        </ul>

        <div class="prog-wrap">
            <div class="prog-track">
                <div class="prog-fill" id="pFill"></div>
            </div>
            <p class="prog-pct" id="pPct">0%</p>
        </div>

    </div>


    <script src="../js/minloading.js"></script>
</body>

</html>