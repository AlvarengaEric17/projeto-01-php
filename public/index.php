<?php
$nome = $_GET['nome'];
$mensagem = "Boa noite $nome";

$num1 = 10;
$num2 = 30;

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link href="/css/default.css" rel="stylesheet" />
    <title>Document</title>
</head>

<body>
    <h1>PHP & Mysql</h1>
    <p><?= $mensagem ?></p>
    <h1>Teste</h1>
    <?= $num1 . $num2 ?>
</body>

</html>