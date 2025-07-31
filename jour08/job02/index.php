<?php
session_start();
$cookie_name = 'nbvisites';

// Traitement du reset
if (isset($_POST['reset'])) {
    $cookie_value = 1;
} elseif (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name] + 1;
} else {
    $cookie_value = 1;
}

// Sauvegarde du cookie
setcookie($cookie_name, $cookie_value, time() + (365 * 24 * 60 * 60));
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Visites</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 40px;
            text-align: center;
            background: linear-gradient(to bottom right, violet, pink);
            color: white;
            width: 100vw;
            height: 100vh;
            background-repeat: no-repeat;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        button {
            background-color: #ff595e;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff2e3a;
        }
    </style>
</head>

<body>
    <h1>Nombre de visites : <?php echo $cookie_value; ?></h1>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>

</html>