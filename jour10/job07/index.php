<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            font-family: Arial, sans-serif;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        thead {
            background-color: #4CAF50;
            color: white;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        p {
            text-align: center;
            font-family: Arial, sans-serif;
            color: #555;
        }
    </style>
</head>

<body>

    <?php
    //connexion base de données
    require '../connexion.php';

    $result = $mysqli->query("SELECT SUM(superficie) AS superficie_total FROM etage;");

    if ($result && $result->num_rows > 0) {

        echo "<table border='1'><thead><tr>";
        foreach ($result->fetch_fields() as $field) {
            echo "<th>" . $field->name . "</th>";
        }
        echo "</tr></thead><tbody>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>" . htmlspecialchars($value) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody></table>";
    } else {
        echo "<p>Aucune donnée trouvée.</p>";
    }

    $mysqli->close();

    ?>
</body>

</html>