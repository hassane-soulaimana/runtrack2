<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Mini Formulaire</title>
</head>

<body>

    <h2>Transformer un texte</h2>
    <form method="POST">
        <input type="text" name="str" placeholder="Votre texte" required>
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">César</option>
            <option value="plateforme">Plateforme</option>
        </select>
        <button type="submit">Valider</button>
    </form>

    <?php
    function gras($str)
    {
        $mots = explode(" ", $str);
        $texteTransforme = "";
        foreach ($mots as $mot) {
            if (!empty($mot) && $mot[0] >= 'A' && $mot[0] <= 'Z') {
                $texteTransforme .= "<b>" . htmlspecialchars($mot) . "</b> ";
            } else {
                $texteTransforme .= htmlspecialchars($mot) . " ";
            }
        }
        return $texteTransforme;
    }

    function cesar($str, $decalage = 2)
    {
        $resultat = "";
        for ($i = 0; $i < strlen($str); $i++) {
            $caractere = $str[$i];
            if (ctype_alpha($caractere)) {
                $base = ctype_upper($caractere) ? 'A' : 'a';
                $resultat .= chr((ord($caractere) - ord($base) + $decalage) % 26 + ord($base));
            } else {
                $resultat .= $caractere;
            }
        }
        return htmlspecialchars($resultat);
    }

    function plateforme($str)
    {
        $mots = explode(" ", $str);
        $texteTransforme = "";
        foreach ($mots as $mot) {
            $texteTransforme .= htmlspecialchars($mot);
            if (substr($mot, -2) === "me") {
                $texteTransforme .= "_";
            }
            $texteTransforme .= " ";
        }
        return $texteTransforme;
    }

    // Traitement du formulaire
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $str = $_POST["str"];
        $fonction = $_POST["fonction"];
        $resultat = "";

        if ($fonction === "gras") {
            $resultat = gras($str);
        } elseif ($fonction === "cesar") {
            $resultat = cesar($str);
        } elseif ($fonction === "plateforme") {
            $resultat = plateforme($str);
        } else {
            $resultat = "Option inconnue.";
        }

        echo "<p><strong>Résultat :</strong><br>$resultat</p>";
    }
    ?>

</body>

</html>