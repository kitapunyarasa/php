<?php

$a = array('1', '2', '3', '4', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8', '8');
var_dump($a);
echo '<br><br><br>';


for ($i = 0; $i < count($a); $i++) {
    echo $a[$i] . '<br>';
}

function penambahan($a, $b) {

    $c = $a + $b;
    return $c;
}

echo penambahan(1, 8);
