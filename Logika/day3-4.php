<?php

$a = 90;

$hasil = $a >= 90 ? "predikat A"
: ($a >= 75 ? "predikat B" 
: 'C');

echo $hasil;