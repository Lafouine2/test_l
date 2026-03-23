<?php
// Connexion BDD
require("database2.php");

// On sécurise l'ID
$id = isset($_GET["id"]) ? intval($_GET["id"]) : 0;

// Récupération de l'élève
$userReq = $connexion->prepare("SELECT * FROM user WHERE id_user = ?");
$userReq->execute([$id]);
$user = $userReq->fetch();

// Récupération des 3 meilleures orientations
$resReq = $connexion->prepare("SELECT * FROM resultats_orientation WHERE id_user = ? ORDER BY pourcentage DESC LIMIT 6");
$resReq->execute([$id]);
$orientations = $resReq->fetchAll(PDO::FETCH_ASSOC);

// Redirection si pas de données
if (!$user || !$orientations) {
    header("Location: loading.php?id=$id");
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vos Résultats | OriCeft</title>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/result.css">
    <link rel="stylesheet" href="../css/main.css">
    <script>
        const USER_DATA = <?php echo json_encode($user); ?>;
        const IA_RESULTS = <?php echo json_encode($orientations); ?>;
    </script>
</head>
<body>
    <div class="print-only-header" style="display: none;">
    <div style="text-align: center; border-bottom: 2px solid #1a1a2e; padding-bottom: 10px; margin-bottom: 20px;">
        <h1 style="font-size: 28px; margin-bottom: 5px;">RAPPORT D'ORIENTATION ORICEFT</h1>
        <h2 style="font-size: 18px; color: #333;">Résultats de : <?php echo htmlspecialchars($user['nom'] . ' ' . $user['prenom']); ?></h2>
        <p>Date de génération : <?php echo date('d/m/Y'); ?></p>
    </div>
</div>
    <header>
        <div class="navbar">
            <div class="mklogo">
                <a href="/html/accueil.html" class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-graduation-cap h-7 w-7 text-primary-foreground">
                        <path d="M21.42 10.922a1 1 0 0 0-.019-1.838L12.83 5.18a2 2 0 0 0-1.66 0L2.6 9.08a1 1 0 0 0 0 1.832l8.57 3.908a2 2 0 0 0 1.66 0z"></path>
                        <path d="M22 10v6"></path>
                        <path d="M6 12.5V16a6 3 0 0 0 12 0v-3.5"></path>
                    </svg>
                    OriCeft
                </a>
            </div>
            <ul class="navlink">
                <li><a href="./accueil.html">Accueil</a></li>
                <li><a href="./filiere.html">Filières</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
            <div class="links">
                <div class="trynow"><a href="/html/index.html">Recommencer</a></div>
            </div>
        </div>
    </header>
 
<div class="hero">
    <div class="hero-tag">✦ Résultats pour <?php echo htmlspecialchars($user['nom'] . ' ' . $user['prenom']); ?></div>
    <h1 id="heroTitle">Analyse terminée</h1>
    <p id="heroSub">Vos réponses ont bel et bien été reçues et après analyse, voici ce que nous vous proposons :</p>
</div>
<div class="analysis-container" style="max-width: 1200px; margin: 0 auto; padding: 20px; display: grid; grid-template-columns: 1fr 1fr; gap: 25px;">
    
    <div class="profile-card" style="background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05);">
        <h2 style="font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 5px;">Votre profil d'orientation</h2>
        <p style="color: #666; font-size: 0.9rem; margin-bottom: 25px;">Scores basés sur vos aptitudes réelles</p>
        
        <div class="riasec-bars">
            <?php 
            $couleurs = ['#f39c12', '#3498db', '#9b59b6'];
            foreach ($orientations as $index => $f): 
                $couleurActuelle = $couleurs[$index % count($couleurs)];
            ?>
                <div style="margin-bottom: 15px;">
                    <div style="display: flex; justify-content: space-between; margin-bottom: 8px;">
                        <span style="font-weight: 500;"><?php echo htmlspecialchars($f['serie']); ?></span>
                        <span style="color: <?php echo $couleurActuelle; ?>; font-weight: bold;"><?php echo $f['pourcentage']; ?>%</span>
                    </div>
                    <div style="height: 8px; background: #eee; border-radius: 10px; overflow: hidden;">
                        <div style="width: <?php echo $f['pourcentage']; ?>%; height: 100%; background: <?php echo $couleurActuelle; ?>;"></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="interpretation-card" style="background: #1a1a2e; color: white; padding: 35px; border-radius: 20px; position: relative; overflow: hidden; display: flex; flex-direction: column;">
        <div style="background: rgba(255,255,255,0.1); display: inline-block; width: fit-content; padding: 5px 15px; border-radius: 20px; font-size: 0.75rem; text-transform: uppercase; margin-bottom: 20px; border: 1px solid rgba(255,255,255,0.2);">
            ✦ Analyse personnalisée
        </div>
        
        <h2 style="font-family: 'Playfair Display', serif; font-size: 1.8rem; margin-bottom: 20px;">Interprétation de votre profil</h2>
        
        <div style="line-height: 1.8; font-size: 1rem; color: #cbd5e0; position: relative; z-index: 2;">
            <?php  
                $interpretation = !empty($orientations[0]['interpretation_profil']) 
                                  ? $orientations[0]['interpretation_profil'] 
                                  : "Analyse en cours de finalisation...";
                
                echo nl2br(htmlspecialchars($interpretation)); 
            ?>
        </div>

        <div style="position: absolute; top: -30px; right: -30px; width: 150px; height: 150px; background: rgba(255,255,255,0.03); border-radius: 50%;"></div>
        <div style="position: absolute; bottom: 20px; left: -20px; width: 80px; height: 80px; background: rgba(232, 160, 32, 0.05); border-radius: 50%;"></div>
    </div>
</div>

</div>
    <div class="results-section">
        <div class="results-header">
            <h2 class="section-heading">Filières recommandées</h2>
            <p class="section-sub">Réponses générées par IA</p>
        </div>

        <div class="filiere-grid" id="filiereGrid">
            <?php foreach ($orientations as $index => $f): ?>
                <div class="filiere-card visible <?php echo ($index == 0) ? 'top-match' : ''; ?>">
                    <div class="card-top">
                        <div class="card-icon-wrap">
                            <div class="card-icon"><?php echo ($index == 0) ? '🏆' : '🎓'; ?></div>
                            <div class="card-meta">
                                <div class="card-name"><?php echo htmlspecialchars($f['serie']); ?></div>
                                <span class="card-type-badge">Option <?php echo ($index + 1); ?></span>
                            </div>
                        </div>
                        <div class="match-pct-wrap">
                            <span class="match-pct-num"><?php echo $f['pourcentage']; ?>%</span>
                            <span class="match-pct-label">Compatibilité</span>
                        </div>
                    </div>
                    
                    <div class="score-bar-wrap" style="height: 8px; background: #eee; border-radius: 10px; margin: 15px 0; overflow: hidden;">
                        <div class="score-bar-fill" 
                             style="width: <?php echo $f['pourcentage']; ?>%; 
                                    height: 100%; 
                                    background: #27ae60; 
                                    transition: width 1.5s ease-in-out;">
                        </div>
                    </div>

                    <div class="debouches">
                        <div class="debouches-title">Métiers & Débouchés :</div>
                        <div class="debouches-list">
                            <?php for($i=1; $i<=4; $i++): 
                                $key = ($i == 1) ? 'debouches' : 'debouches'.$i;
                                if(!empty($f[$key])): ?>
                                <span class="debouche-chip"><?php echo htmlspecialchars($f[$key]); ?></span>
                            <?php endif; endfor; ?>
                        </div>
                    </div>

                    <?php if (!empty($f['etablissements'])): ?>
                    <div class="schools-section" style="margin-top: 15px; padding-top: 10px; border-top: 1px dashed #ddd;">
                        <div class="debouches-title" style="color: #34495e;">Où étudier au Cameroun :</div>
                        <p style="font-size: 0.9em; color: #666; font-style: italic;">
                            <?php echo htmlspecialchars($f['etablissements']); ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <div class="ai-box" style="background: #f0f7ff; padding: 12px; border-radius: 8px; margin-top: 15px; border-left: 4px solid #007bff;">
                        <strong style="color: #007bff; font-size: 0.85em;">💡 CONSEIL :</strong>
                        <p style="font-size: 0.85em; margin: 5px 0 0; color: #444;"><?php echo htmlspecialchars($f['conseils_amelioration']); ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="ai-card" style="margin-top: 40px; border-left: 5px solid #e8a020; background: #fffcf5; padding: 25px; border-radius: 15px; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
            <div class="ai-label" style="background: #e8a020; color: white; display: inline-block; padding: 4px 12px; border-radius: 20px; font-size: 0.8em; font-weight: bold; margin-bottom: 15px;">Conclusion de l'Expert</div>
            <h3 style="margin-bottom: 10px; font-family: 'Playfair Display', serif;">Conclusion de votre orientation</h3>
            <div class="ai-text">
                <p style="line-height: 1.7; color: #444; font-size: 1.05em;">
                    <?php echo nl2br(htmlspecialchars($orientations[2]['conclusion'])); ?>
                </p>
            </div>
        </div>
        <div class="geminiError">
               <br>
          <center><i> <h4 class="errorGemini" style="color: gray;">
               NB:  Ce résultat a été fourni pas Gemini, et en tant que IA, Gemini peut faire des erreurs donc avant de prendre en considération ces résultas, nous vous conseillons de vérifier auprès d'un conseiller d'orientation pour plus de précision. </h4> </i><br><br>
             <p class="p"> Si ce résultat ne vous convient pas vous pouvez toujours refaire le test en cliquant sur le bouton "Refaire le test" ci-dessous.</p> 
                     </center>
        </div>
        <div class="bottom-actions">
            <a href="mainpageapp.html" class="btn-primary">↩ Refaire le test</a>
            <button class="btn-secondary" onclick="window.print()">📄 Télécharger les résultats</button>
        </div>
     
    </div>

    <footer class="footer" style="margin-top: 50px; padding: 30px; text-align: center; border-top: 1px solid #eee;">
        <p><strong>Oriceft</strong> — Douala, Cameroun</p>
        <p style="margin-top:8px; opacity: 0.7;">© 2026 Oriceft. Tous droits réservés.</p>
    </footer>
    
    <script src="../js/result.js"></script>
</body>
</html>