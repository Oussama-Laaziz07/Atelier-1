<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background: #f4f6f9;
        color: #333;
        margin: 40px;
    }
    h1 {
        text-align: center;
        color: #2c3e50;
        margin-bottom: 20px;
    }
    .card {
        background: #fff;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        max-width: 600px;
        margin: auto;
    }
    .output {
        background: #ecf0f1;
        padding: 8px;
        border-radius: 5px;
        margin: 5px 0;
    }
</style>
<body>
     <h1>Exercice 1 : Affichage avec for</h1>
    <div class="card">
        <?php
        $tableau=[10,20,30,40,50];
        for($i=0;$i<count($tableau);$i++){
            echo "<div class='output'>" . $tableau[$i] . "</div>";
        }
        ?>
</body>
</html>