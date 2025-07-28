<!DOCTYPE html>
<html lang="fr">

<?php
$style = "style1.css";

if (isset($_GET['style'])) {
    $method = $_GET['style'];
    $array = array("style1.css", "style2.css", "style3.css");
    if (in_array($method, $array)) {
        $style = $method;
    }
}
?>

<head>
    <meta charset="UTF-8">
    <title>Formulaire Stylé</title>
    <link rel="stylesheet" href="<?php echo $style; ?>">
</head>

<body>
    <form method="GET" action="">
        <label for="style">Choisissez un style :</label>
        <select name="style" id="style">
            <option value="style1.css" <?php if ($style == "style1.css")
                echo "selected"; ?>>Style 1</option>
            <option value="style2.css" <?php if ($style == "style2.css")
                echo "selected"; ?>>Style 2</option>
            <option value="style3.css" <?php if ($style == "style3.css")
                echo "selected"; ?>>Style 3</option>
        </select>
        <input type="submit" value="Appliquer le style">
    </form>
</body>

</html>