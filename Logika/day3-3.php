<?php

$day = date("l"); 

$pesan = ($day == "Monday") ? "Hari ini upacara" : "Hari ini tidak upacara";

echo $day,' , ', $pesan;

?>