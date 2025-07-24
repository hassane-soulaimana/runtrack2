<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label>Prénom :</label>
        <input type="text" name="prenom">
        <label>Nom :</label>
        <input type="text" name="nom">
        <input type="submit" value="Envoyer">
    </form>
<br>
<br>
    <?php
    if (!empty($_GET)) {
        echo '<table border="1">';
        echo '<tr><th>Argument</th><th>Valeur</th></tr>';
        foreach ($_GET as $arg => $val) {
            echo '<tr>';
            echo '<td>' . $arg . '</td>';
            echo '<td>' . $val . '</td>';
            echo '</tr>';
        }
        echo '</table>';
    }
    ?>
</body>
</html>