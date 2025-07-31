<?php
// Traitement de la connexion
if (isset($_POST['connexion'])) {
    $prenom = trim($_POST['prenom']);
    $nom = trim($_POST['nom']);
    $password = $_POST['password'];

    if ($prenom && $nom && strlen($password) >= 8) {
        setcookie('prenom', $prenom, time() + (7 * 24 * 60 * 60));
        setcookie('nom', $nom, time() + (7 * 24 * 60 * 60));
        setcookie('password', $password, time() + (7 * 24 * 60 * 60));
        header('Location: index.php');
        exit;
    }
}

// Traitement de la déconnexion
if (isset($_POST['deco'])) {
    foreach (['prenom', 'nom', 'password'] as $cookieName) {
        setcookie($cookieName, '', time() - 3600);
    }
    header('Location: index.php');
    exit;
}

// Lecture des cookies
$prenom = $_COOKIE['prenom'] ?? null;
$nom = $_COOKIE['nom'] ?? null;
$password = $_COOKIE['password'] ?? null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion Complète</title>
    <style>
        body {
            background: linear-gradient(to right, #f5f7fa, #c3cfe2);
            font-family: 'Segoe UI', sans-serif;
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            text-align: center;
            width: 320px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        input {
            padding: 10px;
            width: 85%;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 5px;
            text-align: left;
            width: 85%;
            margin-left: auto;
            margin-right: auto;
        }

        button {
            padding: 10px 20px;
            background-color: #4e89ae;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #386fa4;
        }

        .bonjour {
            font-size: 18px;
            color: #4e89ae;
            margin-bottom: 20px;
        }

        .info {
            font-size: 14px;
            color: #666;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

    <div class="card">
        <?php if (!$prenom || !$nom || !$password): ?>
            <h2>Se connecter</h2>
            <form method="POST">
                <input type="text" name="prenom" placeholder="Votre prénom" required>
                <input type="text" name="nom" placeholder="Votre nom" required>
                <label for="pass">Mot de passe (8 caractères minimum):</label>
                <input type="password" id="pass" name="password" minlength="8" required>
                <button type="submit" name="connexion">Connexion</button>
            </form>
        <?php else: ?>
            <div class="bonjour">👋 Bonjour <?= htmlspecialchars($prenom) ?> <?= htmlspecialchars($nom) ?> !</div>
            <div class="info">Mot de passe : <?= htmlspecialchars($password) ?></div>
            <form method="POST">
                <button type="submit" name="deco">Déconnexion</button>
            </form>
        <?php endif; ?>
    </div>

</body>

</html>