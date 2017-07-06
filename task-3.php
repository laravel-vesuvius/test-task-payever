<?php

function onesCountForDigits($digits)
{
    if ($digits == 1) {
        return 1;
    } elseif ($digits == 2) {
        return 4;
    } elseif ($digits == 0) {
        return 0;
    }

    $binaryNumbersWithSamePlacesCount = pow(2, $digits - 1);
    $onesCount = $binaryNumbersWithSamePlacesCount + (($digits - 1) * ($binaryNumbersWithSamePlacesCount / 2));

    return $onesCount + onesCountForDigits($digits - 1);
}

while (true) {
    fscanf(STDIN, "%d\n", $n);

    $binNumber = decbin($n);
    $binNumberLength = strlen($binNumber);
    $onesCount = onesCountForDigits($binNumberLength - 1);

    for ($i = 1; $i < $binNumberLength; $i++) {
        $prevDigitsCount = $binNumberLength - $i - 1;
        $numbersOnLeft = substr_count(substr($binNumber, 0, $i), '1');
        if ($binNumber[$i] == 1) {
            $onesCount += $numbersOnLeft * pow(2, $prevDigitsCount) + onesCountForDigits($prevDigitsCount);
        }
    }

    echo ($onesCount + substr_count($binNumber, '1')).PHP_EOL;
}
