<?php

function calculator ($angka1, $operator, $angka2){
if ($operator == '-'){
    $hasil = $angka1 - $angka2;
}elseif ($operator == '+') {
    $hasil = $angka1 + $angka2;
}elseif ($operator == 'x') {
    $hasil = $angka1 * $angka2;
}
elseif ($operator == '/') {
    $hasil = $angka1 / $angka2;
}
return $hasil;
}
echo calculator(10, 'x', 2);

?>