<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: darkviolet;
        }

        div {
            text-align: center;
            color: red;
            font-size: 50px;
        }
    </style>
</head>

<body>
    <div>
        <?php

        function bonjour($jour)
        {
            if ($jour) {
                echo "Bonjour";
            } else {
                echo "Bonsoir";
            }

        }
        bonjour($jour = false)
            ?>
    </div>
</body>

</html>