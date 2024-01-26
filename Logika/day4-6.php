<?php
    $bilangan = 225;
    $mulai = 5;
    $akhir = 25;

    $kemungkinan = 0;
    for ($i = $mulai; $i <= $akhir; $i += 5) {
        if ($bilangan % $i == 0) {
            $kemungkinan++;
        }
    }
    
    echo "Bilangan $bilangan bisa dibagi habis dengan kelipatan 5 dari $mulai hingga $akhir sebanyak $kemungkinan kali.";
?>