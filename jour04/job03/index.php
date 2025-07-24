<form method="get">
  <input type="text" name="a">
  <input type="text" name="b">
  <input type="submit" value="Envoyer">
</form>

<?php
echo "Le nombre d'argument POST envoyé est : " . print_r($_POST);
?>