<!DOCTYPE html>
<html>

<head>
    <title>Dessiner une figure</title>
</head>

<body>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Dessiner une figure</title>
    </head>

    <body>

        <form method="post">
            <label>Largeur :</label>
            <input type="text" name="largeur">

            <label>Hauteur :</label>
            <input type="text" name="hauteur">

            <input type="submit" value="Envoyer">
        </form>


        <pre>
<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = $_POST['largeur'];
    $hauteur = $_POST['hauteur'];

    if ($largeur == 10 && $hauteur == 5) {

        for ($i = 0; $i < $largeur / 2; $i++) {
            echo str_repeat(" ", ($largeur / 2) - $i);
            echo "/";
            echo str_repeat("-", $i * 2);
            echo "\\\n";
        }
        for ($i = 0; $i < $hauteur; $i++) {
            echo "|" . str_repeat(" ", $largeur - 2) . "|\n";
        }

        echo str_repeat("-", $largeur) . "\n";
    } else {
        echo "Veuillez entrer largeur = 10 et hauteur = 5 pour voir la figure.";
    }
}
?>
</pre>

    </body>

    </html>