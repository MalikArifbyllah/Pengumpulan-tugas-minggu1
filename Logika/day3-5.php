<?php

// $presentasi_awal = 100;


// $presentasi_sakit_izin = $presentasi_awal - ($presentasi_awal * 0.03);


// $presentasi_alfa = $presentasi_awal - ($presentasi_awal * 0.05);


// $hasil_presentasi = [
//     'sakit_izin' => ($presentasi_sakit_izin < $presentasi_alfa) ? $presentasi_sakit_izin : $presentasi_alfa,
//     'alfa' => $presentasi_alfa,
//     'hadir' => $presentasi_awal,
// ];


// echo "Presentasi Akhir : " . $hasil_presentasi['hadir'] . "%\n";

$kehadiran = 100;
$status = "alfa";

$status_kehadiran = $status == "sakit" || $status == "izin" ? $kehadiran - 3 : ($status == "alfa" ? $kehadiran - 5 : $kehadiran );
echo 'persentase kehadiran : ', $status_kehadiran,
 '<br>  status : '. $status          ;

?>
