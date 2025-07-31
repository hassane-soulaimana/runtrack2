<?php
session_start();


if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 1;
    $reset_done = true;
} else {
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 1;
    } else {
        $_SESSION['nbvisites']++;
    }
}
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
            background-color: crimson;
            color: white;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        button {
            background-color: #160eb4ff;
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
            background-color: #000000ff;
        }
    </style>
</head>

<body>
    <h1>Nombre de visites : <?php echo $_SESSION['nbvisites']; ?></h1>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser</button>
    </form>
</body>

</html>