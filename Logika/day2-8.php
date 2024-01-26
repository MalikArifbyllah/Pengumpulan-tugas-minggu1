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
        margin-left: -230px;
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
    <h4>Ukuran rumah</h4>
    <?php

        $panjang = 13; 
        $lebar = 9;    
        $luas = $panjang * $lebar; 
        
        
        if ($luas < 90) {
            $tipe = "Tipe 36";
        } elseif ($luas >= 90 && $luas < 96) {
            $tipe = "Tipe 45";
        } elseif ($luas >= 96 && $luas < 120) {
            $tipe = "Tipe 54";
        } elseif ($luas >= 120 && $luas < 150) {
            $tipe = "Tipe 60";
        } else {
            $tipe = "Tipe 70";
        }
        
        
        echo "Luas tanah: " . $luas . " meter persegi\n </br>";
        echo "Tipe rumah yang sesuai: " . $tipe . "\n";
        ?>
        </div>
    <div class="link-container">
        <a href="day2-6.php" class="link1">Back</a>
        <a href="day2-8.php" class="link2">Next</a>
    </div>
</body>
</html>