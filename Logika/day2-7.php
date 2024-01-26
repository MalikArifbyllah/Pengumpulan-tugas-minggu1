<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100vh;
        margin: 0;
    }

    .border-container {
        border: 2px solid white;
        padding: 40px;
        border-radius: 5px;
        box-shadow: 1px  1px  20px rgba(3, 3, 1, 0.5);
        font-weight: bold;
        font-family: ui-sans-serif;
        margin-bottom : 30px;
    }
    h4 {
        text-align: center;
        font-family: cursive;
    }
    .link-container {
            display: flex;
            align-items: center;
        }
        .link1 {
        border: 2px solid white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 1px 1px 20px rgba(3, 3, 1, 0.5);
        text-decoration: none;
        text-align: center;
        margin: 20px; 
        margin-top: 250px;
        margin-left: -275px;
        color: black;
        }
    .link2 {
        border: 2px solid white;
        padding: 15px;
        border-radius: 5px;
        box-shadow: 1px 1px 20px rgba(3, 3, 1, 0.5);
        text-decoration: none;
        text-align: center;
        margin: 20px; 
        margin-top: 250px;
        margin-left: -10px;
        color: black;
        }
</style>
<body>
<div class="border-container">
    <h4>Pembelian</h4>
    
<?php 

$nasgor = 15000; 
$aybak = 20000; 
$naskeb = 25000; 
$aneka_jus = 8000;
$esteh_manis = 3000;
$es_jeruk = 5000;
$day = date("l");
$monday = 2;
$friday = 5;

$total =  $aybak + ($nasgor * 2) + ($naskeb * 2);
if ($day == "Monday") {
   $monday = $total * ($monday / 100); 
   $total_akhir = $total - $monday;
   echo "Terdapat potongan harga pada hari" . $day, " <br> Harga total menjadi = " . $total_akhir;
}elseif($day == "Friday"){
    $friday = $total * ($friday / 100); 
    $total_akhir = $total - $friday;
    echo "Terdapat potongan harga pada hari" . $day, " <br> Harga total menjadi " . "Rp " . $total_akhir;
}else{
    echo "There are  " . $day, " no discounts today!! <br> Total Rp. " . $total;
}
?>
</div>
  <div class="link-container">
        <a href="day2-6.php" class="link1">Back</a>
        <a href="day2-8.php" class="link2">Next</a>
    </div>
</body>
</html>