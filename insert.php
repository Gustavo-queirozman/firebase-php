<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

if(isset($_POST['titulo'])){
    $factory =  (new Factory())->withDatabaseUri(''
            . '***insert-link-firebase-here***');
    $database = $factory->createDatabase();
    $novoServico = [
        'titulo' => $_POST['titulo'],
        'link' => $_POST['link']
    ];
    $database->getReference('***bucket-here***/'. '***create--tag--here***')->set($novoServico);
    $msg = 'Serviço adicionado com sucesso!';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Date in Firebase</title>
</head>

<body>
    <p><strong><?php echo $msg;?></strong></p>
    <form method="post">
        <span>Titulo: </span>
        <input type="text" name="titulo" id="titulo"><br>
        <span>Link: </span>
        <input type="text" name="link" id="link"><br>
        <input type="submit" value="Cadastrar">
    </form>
</body>

</html>