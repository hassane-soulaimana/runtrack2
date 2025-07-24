<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="get">
        <label>Entrez un nombre :</label>
        <input type="text" name="nombre">
        <input type="submit" value="Vérifier">
    </form>


    <?php
    if (isset($_GET['nombre'])) {
        $nbr = $_GET['nombre'];
        if ($nbr % 2 == 0) {
            echo "Nombre pair";
        } else {
            echo "Nombre impair";
        }
    }
    ?>


</body>

</html>