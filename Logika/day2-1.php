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
        padding: 20px;
        border-radius: 5px;
        box-shadow: 1px  1px  20px rgba(3, 3, 1, 0.5);
        font-weight: bold;
        font-family: ui-sans-serif;
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
        margin-left: -240px;
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
<h4>Predikat</h4>
<?php

$a = 91;

if ($a >= 90 && $a <=100){
    $predikat = 'A';
}elseif ($a >= 75 && $a <= 90){
    $predikat = 'B';
}else{
    $predikat = 'C';
} echo 'Mendapatkan nilai : ' .  $a,  ' dan Predikat : ' .  $predikat;
?>
    </div>
    <div class="link-container">
        <a href="day2-10.php" class="link1">Back</a>
        <a href="day2-2.php" class="link2">Next</a>
    </div>
</body>
</html>