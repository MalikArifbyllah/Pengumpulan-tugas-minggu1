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
        margin-left: -190px;
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
        <h4>Berat badan</h4>
    <?php
    
    function berat($bb, $tb){
    $imt = $bb / (($tb/100) ** 2 );
    if($imt <= 18.5){
        echo 'Berat badan kurang';
        }elseif ($imt >= 18.5 && $imt <= 22.9){
        echo 'Berat badan normal';
        }elseif ($imt >=22.9 && $imt <= 24.9){
        echo 'Normal berat badan lebih';
        }else{
        echo 'Obesitas';
        }
    }
        berat(44, 148);
    ?>
    </div>
    <div class="link-container">
        <a href="day2-5.php" class="link1">Back</a>
        <a href="day2-7.php" class="link2">Next</a>
    </div>
</body>
</html>