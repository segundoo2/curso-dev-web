<?php
    $lojas = [
        'Lisboa' => 'lisboa@gmail.com',
        'Porto' => 'porto@gmail.com',
        'Coimbra' => 'coimbra@gmail.com'
    ];

    $cidade = 'Porto';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails das lojas</title>
</head>
<body>
    <?php if (key_exists($cidade, $lojas)): ?>
    <h1><?= $cidade;?></h1>
    <p><?= $lojas[$cidade] ?></p>
    <?php else: ?>
    <p>Não existe nenhuma loja na cidade indicada</p>
    <?php endif; ?>

</body>
</html>