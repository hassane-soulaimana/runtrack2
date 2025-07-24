<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$resultat = '';
$len = strlen($str);
for ($i = 0; $i < $len - 1; $i++) {
    $resultat .= $str[$i + 1];
}
$resultat .= $str[0];
echo $resultat;
?>