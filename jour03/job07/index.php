<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";
$result = '';
$len = strlen($str);
for ($i = 0; $i < $len - 1; $i++) {
    $result .= $str[$i + 1];
}
$result .= $str[0];
echo $result;
?>