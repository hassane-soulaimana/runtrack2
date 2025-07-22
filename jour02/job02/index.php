<?php 
for ($i = 0; $i <= 3334; $i++) {
    if (in_array($i, [26, 37, 88, 1111, 3233])) {
        continue;
    }
    echo $i . '<br />';
}
?>