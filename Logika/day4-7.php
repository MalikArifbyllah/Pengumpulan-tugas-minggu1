<?php

$data = [
[
    'nama' => 'Andi',
    'rombel' => 'PPLG XI-1',
    'rayon' => 'Ciawi 4',
    'jk' => 'L',
],
[
    'nama' => 'ubad',
    'rombel' => 'PPLG XI-2',
    'rayon' => 'Ciapus 4',
    'jk' => 'L',
],
 [
    'nama' => 'siti',
    'rombel' => 'PPLG XI-2',
    'rayon' => 'Ciawi 4',
    'jk' => 'P',
],
 [
    'nama' => 'Ajeng',
    'rombel' => 'PPLG XI-10',
    'rayon' => 'Cicurug 13',
    'jk' => 'P',
 ],
];
foreach ($data as $date ) {
    echo "<br>";
    echo "Nama Siswa :  " . $date['nama'] . "<br>";
    echo "Rombel :  " . $date['rombel'] . "<br>";
    echo "Rayon :  " . $date['rayon'] . "<br>";
    echo "Jenis Kelamin :  " . $date['jk'] . "<br>";

}
?>


