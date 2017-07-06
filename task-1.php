<?php

while (true) {
    if ($sentence = trim(fgets(STDIN))) {
        $words = explode(' ', $sentence);

        echo implode(' ', array_reverse($words)).PHP_EOL;
    }
}
