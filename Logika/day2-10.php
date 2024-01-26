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
        margin-left: -280px;
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
<?php 

$belanja = 160000;
$voucher = 10000;
$bonus = "1 kardus permen kaki";

if ($belanja > 100000 && $belanja < 150000) {
   $harga_akhir = $belanja - $voucher;
   echo "Total belanja " . $harga_akhir;
}elseif($belanja >= 150000 ){
    $harga_akhir = $belanja - $voucher;
    echo "Total belanja " . $harga_akhir . " dan " . $bonus;
}else{
    $harga_akhir = $belanja;
}

?>
</div>
 <div class="link-container">
        <a href="day2-6.php" class="link1">Back</a>
        <a href="day2-8.php" class="link2">Next</a>
    </div>
</body>
</html>