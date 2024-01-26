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
        margin-left: -155px;
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
        }
</style>
<body>
    <div class="border-container">
<h4>Nilai</h4>
<?php

// $a = 9;

// if($a > 0){
//     echo 'positif';
//     if($a > 10){
//         echo 'lebih besar';
//     }else{
//         echo 'tidak';
//     }
// }else {
//     echo 'negatif';
// }
$a = 97;
$b = 100;

if($a > 85 && $b > 98){
    echo 'berprestasi';
}else {
    echo 'tidak berprestasi';
}
?>
    </div>
    <div class="link-container">
        <a href="day1-10.php" class="link1">Before</a>
        <a href="day1-1.php" class="link2">Next</a>
    </div>
</body>
</html>