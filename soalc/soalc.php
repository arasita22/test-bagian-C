<?php

echo "Masukkan N (1-999): ";
$n = (int) trim(fgets(STDIN));

if ($n < 1 || $n > 999) {
    echo "Input harus antara 1 sampai 999.\n";
    exit(1);
}

for ($i = 1; $i <= $n; $i++) {
    if ($i % 15 == 0) {
        echo "santosaBandung\n";
    } elseif ($i % 3 == 0) {
        echo "sentosa\n";
    } elseif ($i % 5 == 0) {
        echo "bandung\n";
    } else {
        echo $i . "\n";
    }
}