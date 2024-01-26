<?php

$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

$kelompok_sama = [];
$kelompok_berbeda = [];

foreach ($bil1 as $bilangan) {
    if (in_array($bilangan, $bil2)) {
        $kelompok_sama[] = $bilangan;
    } else {
        $kelompok_berbeda[] = $bilangan;
    }
}

foreach ($bil2 as $bilangan) {
    if (!in_array($bilangan, $bil1)) {
        $kelompok_berbeda[] = $bilangan;
    }
}
echo '<br/>';
echo "Kelompok yang Terdapat di Kedua Variabel: " . implode(', ', $kelompok_sama) . "\n";
echo '<br/>';
echo "Kelompok yang Hanya Terdapat di Salah Satu Variabel: " . implode(', ', $kelompok_berbeda) . "\n";

?>
