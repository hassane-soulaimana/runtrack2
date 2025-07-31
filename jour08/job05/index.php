<?php
session_start();

if (!isset($_SESSION['grille'])) {
    resetJeu();
}

//  case
if (isset($_POST['case'])) {
    $index = $_POST['case'];

    // case vide est non terminé
    if ($_SESSION['grille'][$index] === '-' && !$_SESSION['fin']) {
        $_SESSION['grille'][$index] = $_SESSION['joueur'];
        if (verifierGagnant()) {
            $_SESSION['message'] = $_SESSION['joueur'] . ' a gagné !';
            $_SESSION['fin'] = true;
        } elseif (!in_array('-', $_SESSION['grille'])) {
            $_SESSION['message'] = 'Match nul !';
            $_SESSION['fin'] = true;
        } else {
            //  joueur
            $_SESSION['joueur'] = $_SESSION['joueur'] === 'X' ? 'O' : 'X';
        }
    }
}

// Reset
if (isset($_POST['reset'])) {
    resetJeu();
}

// Debut
function resetJeu()
{
    $_SESSION['grille'] = array_fill(0, 9, '-');
    $_SESSION['joueur'] = 'X';
    $_SESSION['message'] = '';
    $_SESSION['fin'] = false;
}

function verifierGagnant()
{
    $g = $_SESSION['grille'];
    $combinaisons = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8], // lignes
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8], // colonnes
        [0, 4, 8],
        [2, 4, 6]             // diagonales
    ];

    foreach ($combinaisons as $c) {
        if ($g[$c[0]] !== '-' && $g[$c[0]] === $g[$c[1]] && $g[$c[1]] === $g[$c[2]]) {
            return true;
        }
    }
    return false;
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Morpion Simple</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 10px 0;
        }

        td {
            width: 60px;
            height: 60px;
            text-align: center;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }
    </style>
</head>

<body>

    <h2>Morpion en PHP</h2>
    <p><?php echo $_SESSION['message']; ?></p>

    <form method="post">
        <table border="1">
            <tr>
                <?php
                for ($i = 0; $i < 9; $i++) {
                    if ($i > 0 && $i % 3 == 0) echo '</tr><tr>';
                    echo '<td>';
                    if ($_SESSION['grille'][$i] === '-') {
                        echo '<button type="submit" name="case" value="' . $i . '">-</button>';
                    } else {
                        echo '<button disabled>' . $_SESSION['grille'][$i] . '</button>';
                    }
                    echo '</td>';
                }
                ?>
            </tr>
        </table>
    </form>

    <form method="post">
        <button type="submit" name="reset">Réinitialiser la partie</button>
    </form>

</body>

</html>