<?php
require_once("classes.php");

$veiculos = [];
$file = fopen('dados.csv', 'r');
while (!feof($file)) {
    $linha = fgetcsv($file);
    if ($linha) {
        switch ($linha[0]) {
            case 'automovel':
                $veiculos[] = new Automovel($linha);
                break;

            case 'barco':
                $veiculos[] = new Barco($linha);
                break;

            case 'aviao':
                $veiculos[] = new Aviao($linha);
                break;
           
            default:
                break;
        }
    }
}
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>apresentação dos dados dos veiculos</title>
</head>

<body>
    <h1>Automóveis</h1>
    <ul>
        <?php foreach ($veiculos as $veiculo) : ?>

            <?php if ($veiculo->get_Tipo() == 'automovel') : ?>
                <li><?= $veiculo->apresentar() ?></li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>

    <hr>

    <h1>Barco</h1>
    <ul>
        <?php foreach ($veiculos as $veiculo) : ?>

            <?php if ($veiculo->get_Tipo() == 'barco') : ?>
                <li><?= $veiculo->apresentar() ?></li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>

    <hr>

    <h1>Avião</h1>
    <ul>
        <?php foreach ($veiculos as $veiculo) : ?>

            <?php if ($veiculo->get_Tipo() == 'aviao'): ?>
                <li><?= $veiculo->apresentar() ?></li>
            <?php endif; ?>

        <?php endforeach; ?>
    </ul>

</body>

</html>