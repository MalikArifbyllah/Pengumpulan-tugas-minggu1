<?php
// function tabungan($jumlah, $bulan){
//     $total = $jumlah + ($jumlah * $bulan/100);
//     return 'Rp. ' . number_format($total, 0, '.','.');
// }

// tabungan(4250000, 10);

function assada($tanggal) {
    $day = date('l',($tanggal));

    if($day == 'Monday'){
        echo 'Senin';
    } elseif ($day == 'Tuesday') {
        echo 'Selasa';
    }elseif ($day == 'Wednesday') {
        echo 'Rabu';
    }elseif ($day == 'Thursday'){
        echo 'Kamis';   
    }elseif ($day == 'Friday'){
        echo 'jumat';
    }elseif ($day == 'Saturday'){
        echo 'sabtu';
    }elseif ($day == 'Sunday'){
        echo 'Minggu';
    }
}
$tanggal =  strtotime ('2024-25-01');
assada($tanggal);
?>  