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
</head>
<body>
    <h2>Bienvenue, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Ceci est votre tableau de bord.</p>
    <a href="logout.php">Se déconnecter</a>
</body>
</html>