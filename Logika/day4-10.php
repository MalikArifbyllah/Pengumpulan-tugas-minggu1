<?php

$barang = [
    [
        'nama_barang' => 'Pasta Gigi',
        'harga_barang' => '10000',
        'jumlah_beli' => 1,
    ],
    [
        'nama_barang' => 'Sabun Mandi',
        'harga_barang' => '5000',
        'jumlah_beli' => 3,
    ],
    [
        'nama_barang' => 'Aloe Vera Sheet Mask',
        'harga_barang' => '15000',
        'jumlah_beli' => 5,
    ],
];

$total_pembelian = 0;

foreach ($barang as $item) {
    $harga_barang = $item['harga_barang'];
    $jumlah_beli = $item['jumlah_beli'];
    $subtotal = $harga_barang * $jumlah_beli;
    $total_pembelian += $subtotal;
    echo '<br>';
    echo "Barang: {$item['nama_barang']}, Harga: {$harga_barang}, Jumlah: {$jumlah_beli}, total: {$subtotal}\n";
}

echo "Total Pembelian: {$total_pembelian}\n";

?>
