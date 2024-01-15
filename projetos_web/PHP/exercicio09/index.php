<?php
   $nomes = ['joao','ana', 'carlos','marco', 'maria', 'silvia','helena', 'ricardo'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentando nomes do array</title>
</head>
<body>
    
    <?php foreach ($nomes as $key => $value): ?>
        <?php if ($key == 4) continue ?>
        <p><?= $value ?></p>
    <?php endforeach; ?>
</body>
</html>