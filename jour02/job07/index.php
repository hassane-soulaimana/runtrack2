<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <style>
        div {
            text-align: center;
        }
    </style>
    <?php
    $hauteur = 5;
    echo "<div>";
    for ($i = 1; $i <= $hauteur; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo ' *';
        }
        echo '<br />';
    }
    ?>
</body>

</html>