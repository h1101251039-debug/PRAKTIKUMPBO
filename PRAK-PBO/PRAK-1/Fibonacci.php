<?php

$a = 7;
$b = 14;

for ($i = 1; $i <= 10; $i++) {
    echo $a . " ";

    $c = $a + $b;
    $a = $b;
    $b = $c;
}

?>