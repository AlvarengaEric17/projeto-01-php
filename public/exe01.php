<?php 

$a = 1;
$b = 1;

// Usando Vetor
$sequencia = [1, 1];

for($cont = 2 ; $cont < 10; $cont++){
    $sequencia[$cont] = $sequencia[$cont-1] + $sequencia[$cont - 2];
} 

// var_dump($sequencia);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= $a?></li>
         <li><?= $b?></li>

         
            <?php for($cont = 0; $cont<8; $cont++):?>
            <?php 
            $aux = $a + $b;
            $a = $b;
            $b = $aux;
            ?>

            <li><?= $b?></li>


         <?php endfor ?>
    </ul>

    <h1>Usando Vetor</h1>

    <ul>
        <?php foreach($sequencia as $num):?>
        <li><?= $num ?></li>

        <?php endforeach?>
    </ul>
</body>
</html>