

<?php
$boolVar = true;
$intVar = 42;
$stringVar = "Bonjour";
$floatVar = 3.14;
?>
<table border="1">
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>boolean</td>
            <td>$boolVar</td>
            <td><?php echo ($boolVar ? 'true' : 'false'); ?></td>
        </tr>
        <tr>
            <td>integer</td>
            <td>$intVar</td>
            <td><?php echo $intVar; ?></td>
        </tr>
        <tr>
            <td>string</td>
            <td>$stringVar</td>
            <td><?php echo $stringVar; ?></td>
        </tr>
        <tr>
            <td>float</td>
            <td>$floatVar</td>
            <td><?php echo $floatVar; ?></td>
        </tr>
    </tbody>
</table>
