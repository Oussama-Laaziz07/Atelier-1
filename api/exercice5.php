<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5</title>
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
</head>
<body>
    <h1>Exercice 5</h1>
    <div class="card">
        <?php
        $tableau=[10,20,30,40,50];
        for($i=0; $i<count($tableau); $i++){
            if(in_array(20,$tableau)){
                echo "<div class='output'>Valeur Trouvée</div>";
            } else {
                echo "<div class='output'>Valeur Introuvable</div>";
            }
        }
        ?>
    </div>
</body>
</html>