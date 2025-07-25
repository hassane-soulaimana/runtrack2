<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$listeVoyelles = "aeiouyAEIOUY";

$nbVoyelles = 0;
$nbConsonnes = 0;

for ($i = 0; $i < strlen($str); $i++) {
    $caractere = $str[$i];
    // Condition voyelle
    if (strpos($listeVoyelles, $caractere) !== false) {
        $nbVoyelles++;
    }
    // si ce n'est pas une voyelle
    elseif (ctype_alpha($caractere)) {
        $nbConsonnes++;
    }
}
?>
<table border="1">
    <tr>
        <th>Voyelles</th>
        <th>Consonnes</th>
    </tr>
    <tr>
        <td><?php echo $nbVoyelles; ?></td>
        <td><?php echo $nbConsonnes; ?></td>
    </tr>
</table>