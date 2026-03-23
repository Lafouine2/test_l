<?php 

  $user_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Analyse IA...</title>
    <link rel="stylesheet" href="../css/loading.css">
    <script>
        // On crée une variable globale accessible par loading.js
        const USER_ID = <?php echo $user_id; ?>;
    </script>
</head>
<body>
    <img src="https://upload.wikimedia.org/wikipedia/commons/8/8f/Google-gemini-icon.svg" class="logo">
    <h2>Analyse intelligente en cours...</h2>

    <div class="progress-container">
        <div class="progress-bar" id="progressBar"></div>
    </div>

    <div class="status-text" id="statusText">
        Initialisation du modèle...
    </div>

    <script src="../js/loading.js"></script>
</body>
</html>