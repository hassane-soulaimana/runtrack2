<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        <label>username:</label>
        <input type="text" name="username">
        <label>passaword:</label>
        <input type="text" name="password">
        <input type="submit" value="Envoyer">
    </form>



    <?php
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($_POST['username'] == "John" && $_POST['password'] == "Rambo") {
            echo "C'est pas ma guerre";
        } else {
            echo "Votre pire cauchemar";
        }
    }
    ?>


</body>

</html>