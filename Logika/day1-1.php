<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        .border-container {
            border: 2px solid white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 1px 1px 20px rgba(3, 3, 1, 0.5);
            font-weight: bold;
            font-family: ui-sans-serif;
            margin-bottom: 20px;
            text-align: center;
        }

        h4 {
            text-align: center;
            font-family: cursive;
        }

        .link-container {
            display: flex;
            align-items: center;
        }

        .link {
            border: 2px solid white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 1px 1px 20px rgba(3, 3, 1, 0.5);
            text-decoration: none;
            text-align: center;
            margin: 10px;
        }
    </style>
</head>
<body>
    <div class="border-container">
        <h4>Value sama/tidak</h4>
        <?php
        $a = 'ikan';
        $b = 'ikan';
        
        if ($a == $b) {
            echo 'sama';
        } else {
            echo 'ga sama';
        }
        ?>
    </div>
    <div class="link-container">
        <a href="day1-11.php" class="link">Before</a>
        <a href="day1-2.php" class="link">Next</a>
    </div>
</body>
</html>
