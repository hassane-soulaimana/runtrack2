<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison</title>
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

    if ($largeur > 2 && $hauteur > 2) {
        // Dessin du toit
        for ($i = 0; $i < floor($largeur / 2); $i++) {
            $espaces = floor($largeur / 2) - $i;
            echo str_repeat(" ", $espaces);
            echo "/";
            echo str_repeat("-", $i * 2);
            echo "\\";
            echo "\n";
        }
        // les murs
        for ($i = 0; $i < $hauteur; $i++) {
            echo " " . "|" . str_repeat(" ", $largeur - 2) . "|\n";
        }
        // la base
        echo " " . str_repeat("-", $largeur) . "\n";
    }
}
?>
</pre>




</body>

</html>