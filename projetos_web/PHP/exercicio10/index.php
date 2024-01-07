<?php
   $nomes = ['joao','ana', 'carlos','marco', 'maria', 'silvia','helena', 'ricardo'];
   $css = '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>colorindo nomes no array</title>
    <style>
        .vermelho {
            color: red;
        }
    </style>
</head>
<body>

    <?php foreach ($nomes as $nome): ?>
        <?php if ($nome == 'maria') $css = 'vermelho' ?>
        <h3 class="<?= $css ?>"><?= $nome ?></h3>
    <?php endforeach; ?>

</body>
</html>