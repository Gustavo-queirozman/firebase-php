<?php
require __DIR__ . '/vendor/autoload.php';

use Kreait\Firebase\Factory;

$factory =  (new Factory())->withDatabaseUri('***insert-link-firebase-here***');

$database = $factory->createDatabase();

$servicos = $database->getReference('***insert-bucket-firebase-here***')->getSnapshot();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data Firebase</title>
</head>

<body>
    <div style="display: flex; width: 250px; justify-content: space-between;">
        <strong>Serviço</strong>
        <strong>Imagem</strong>
    </div>
    <?php foreach ($servicos->getValue() as $servico) : ?>
        <div style="display: flex; align-items:center; justify-content:space-between;border: 1px solid gray; width: 250px;">
            <span>
                <?php echo $servico['titulo']; ?><br>
            </span>
            <img style="width: 100px;" src="<?php echo $servico['link']; ?>" alt="<?php echo $servico['link']; ?>">
        </div>

    <?php endforeach; ?>

</body>

</html>