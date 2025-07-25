<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$resultat = '';
$len = strlen($str);
// deplacement des caractere d'une position
for ($i = 0; $i < $len - 1; $i++) {
    $resultat .= $str[$i + 1];
}
//on met le premier caractere a la fin.
$resultat .= $str[0];
echo $resultat;
?>