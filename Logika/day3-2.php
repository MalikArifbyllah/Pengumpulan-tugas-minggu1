<?php

$waktu1 = "19:00";
$waktu1_12jam = (intval(substr($waktu1, 0, 2)) > 12) ? sprintf("%02d:%s pm", intval(substr($waktu1, 0, 2)) - 12, substr($waktu1, 3)) : $waktu1 . " pm";

echo "Waktu 1: $waktu1_12jam<br>";


$waktu2 = "08:55";
$waktu2_12jam = (intval(substr($waktu2, 0, 2)) < 12) ? sprintf("%02d:%s am", intval(substr($waktu2, 0, 2)), substr($waktu2, 3)) : $waktu2 . " am";

echo "Waktu 2: $waktu2_12jam";
?>
