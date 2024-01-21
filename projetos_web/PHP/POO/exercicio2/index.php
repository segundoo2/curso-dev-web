<?php 
require_once('Humanos.php');

$dados = [
    ['m', 'João Ribeiro'],
    ['f', 'Ana Silva'],
    ['M', 'Carlos Martins'],
    ['m', 'Joaquim Santos'],
    ['f', 'Marta Rodrigues'],
    ['M', 'Rui Fernandes'],
    ['F', 'Márcia Rodrigues'],
    ['g', 'Pantufa'],
    ['f', 'Carla Maria'],
    ['M', 'Fernando Joaquim'],
    ['m', 'Ricardo Moita'],
    ['c', 'Lassie'],
    ['F', 'Daniela Cardoso'],
    ['F', 'Susana Dinis']
];
$humanos = new Humanos();

foreach ($dados as $dado) {
    $humanos->definir($dado[0],$dado[1]);
}

$masculinos = $humanos->get_Masculinos();
$femininos = $humanos->get_Femininos();
$desconhecidos = $humanos->get_Desconhecidos();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentação de dados</title>
</head>
<body>
    <h1>MASCULINOS</h1>
    <ul>
        <?php foreach($masculinos as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
    
    <hr>
    
    <h1>FEMININOS</h1>
    <ul>
        <?php foreach($femininos as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
    
    <hr>
    
    <h1>DESCONHECIDOS</h1>
    <ul>
        <?php foreach($desconhecidos as $nome): ?>
            <li><?= $nome ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>