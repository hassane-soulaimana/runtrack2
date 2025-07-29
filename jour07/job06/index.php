<?php
function leetSpeak($str)
{
    $leet = [
        "A" => "4",
        "B" => "8",
        "E" => "3",
        "G" => "6",
        "L" => "1",
        "S" => "5",
        "T" => "7"
    ];

    // Remplacement des lettres, peu importe la casse
    foreach ($leet as $lettre => $code) {
        $str = str_replace([$lettre, strtolower($lettre)], $code, $str);
    }

    return $str;
}

// Exemple d'utilisation
$phrase = "Je t'aime";
echo leetSpeak($phrase);
?>