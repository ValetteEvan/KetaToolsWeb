<?php
session_start();

// Vérifiez si l'utilisateur est connecté
if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="style-dashboard.css">
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <?php if (isset($_SESSION['email'])): ?>
            <p>Email : <?php echo htmlspecialchars($_SESSION['email']); ?></p>
        <?php endif; ?>
        <a href="logout.php">Se déconnecter</a>
    </div>
    <div class="container-card">
        <div class="card-text">
            <h3>Information</h3>
            <p>C'est deux card sont juste du HTML et CSS</p>
        </div>
        <div class="card">
            <h3>Card 1</h3>
            <p>Card contenant seulement du html et css !</p>
        </div>
        <div class="card">
            <h3>Card 2</h3>
            <p>Ici juste du text pour rendre jolie :></p>
        </div>
    </div>
    
</body>
</html>