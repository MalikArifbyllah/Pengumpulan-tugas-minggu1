<?php

$a = 850.000;
$b = 5;
$total = $a + ($a > 500.000 ? $a * ($b / 100) : 0);
echo 'Total tabungan andi adalah : ' . $total; 


?>