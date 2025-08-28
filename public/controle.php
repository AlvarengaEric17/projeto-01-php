<?php

$message = "";
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    // $message = "Olá ";
//    if($_POST['periodo'] == 'm'){
//     $message = 'Bom dia ';
//    } else if ($_POST['periodo'] == 't'){
//     $message = 'Boa Tarde ';
//    } else{
//     $message = 'Boa noite ';
//    }
//     $message  .= $_POST['nome'];
// 



switch ($_POST['periodo']) {
    case 'm':
        $message = 'Bom dia ';
        break;
    case 't':
        $message = 'Boa Tarde ';
        break;
     defult:
        $message = 'Boa Noite ';
        break;
}
 $message  .= $_POST['nome'];

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de Controle</title>
</head>

<body>
    <form action="controle.php" method="post">
        <label for="nome">
            Nome
            <input type="text" name="nome">
            <select name="periodo">
                <option value="m">Manhã</option>
                <option value="t">Tarde</option>
                <option value="n">Noite</option>
            </select>
            <button type="submit">Enviar</button>
        </label>
    </form>
    <p><?= $message ?></p>
</body>

</html>