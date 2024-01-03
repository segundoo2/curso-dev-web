<?php
    $mensagem_Erro = '';

    $css = '';
    $mensagem = null;
    if (!empty ($mensagem_Erro)) {
        $css = 'erro';
        $mensagem = $mensagem_Erro;
    } else {
        $css = 'sucesso';
        $mensagem = 'Sucesso';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem de erro</title>
    <style>
        .sucesso {
            color: white;
            background-color: darkgreen;
        }

        .erro {
            color: white;
            background-color:darkred;
        }
    </style>
</head>
<body>
    <div class="<?= $css ?>">
        <?= $mensagem?>
    </div>


</body>
</html>