<?php
session_start();
if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Ajouter un prénom
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['submit']) && !empty($_POST['prenom'])) {
        $_SESSION['prenoms'][] = htmlspecialchars($_POST['prenom']);
    }

    // renitialiser
    if (isset($_POST['reset'])) {
        $_SESSION['prenoms'] = [];
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #dfdfdfff;
            margin: 0;
            padding: 20px;
        }

        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin-bottom: 20px;
            justify-items: center;
        }

        label {
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            padding: 10px 20px;
            margin-right: 10px;
            border: none;
            border-radius: 4px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button[name="reset"] {
            background-color: #f44336;
        }

        button:hover {
            opacity: 0.9;
        }

        h3 {
            font-size: 1.2em;
            color: #333;
            text-align: center;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }

        li {
            padding: 4px 0;
        }
    </style>
</head>

<body>
    <form method="post">
        <label for="name">Prenom:</label>
        <input type="text" name="prenom" placeholder="Entrez votre prénom"></input><br><br>
        <button type="submit" name="submit">Envoyer</button>
        <button type="submit" name="reset">Rénitialiser</button>

    </form>
    <h3> Liste des prénoms :</h3>
    <ul>
        <?php foreach ($_SESSION['prenoms'] as $p): ?>
            <li><?= htmlspecialchars($p) ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>