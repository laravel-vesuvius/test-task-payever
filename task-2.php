<?php

while (true) {
    list($a, $b, $n) = fscanf(STDIN, "%d %d %d\n");

    for ($i = 1; $i <= $n; $i++) {
        $isDivisible = false;
        if (!($i % $a)) {
            $isDivisible = true;
            echo 'ping';
        }
        if (!($i % $b)) {
            $isDivisible = true;
            echo 'pong';
        }
        if (!$isDivisible) {
            echo $i;
        }
        if ($n != $i) {
            echo ' ';
        }
    }
}
