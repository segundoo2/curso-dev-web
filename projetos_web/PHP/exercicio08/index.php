<?php
    $resultados = [];
    for ($i = 0; $i <= 10; $i++) {
        $resultados[] = 327 * $i;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplicação com resultados na Way</title>
</head>
<body>
    
    <?php foreach ($resultados as $resultado): ?>
        <h3><?= $resultado ?></h3>
    <?php endforeach; ?>
</body>
</html>