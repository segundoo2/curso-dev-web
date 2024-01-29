<?php 

use segundo\Database;
require_once('Database.php');

$config = [
    'host' => 'localhost',
    'database' => 'meus_clientes',
    'username' => 'root',
    'password' => '',
];

$database = new Database($config);

$results = $database->execute_query("SELECT * FROM clientes");

$total = $results->affected_rows;
$results = $results->results;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentando registros</title>
    <style>
        h3 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h3>DADOS DOS MEUS CLIENTES</h3>
    <hr>

    <?php if($total == 0): ?>
        <p>Não existe resultados a serem mostrados</p>
    <?php else: ?>
        <?php foreach($results as $cliente): ?>
            <p>Nome: <strong><?= $cliente->nome ?></strong></p>
            <p>Email: <strong><?= $cliente->email ?></strong></p>
            <hr>

        <?php endforeach; ?>

        <p>Total: <strong><?= $total ?> cliente(s)</strong></p>
    <?php endif; ?>
</body>
</html>