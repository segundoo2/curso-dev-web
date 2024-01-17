<?php 
    $erro = "";
    $sucesso = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['text_valor'])) {
            $erro = 'Você precisa digitar um valor';
        } else {
            $valor = $_POST['text_valor'];
            if (is_numeric($valor)) {
                $file = fopen($valor, 'file_numeric.txt', 'a');
                fputs($file, $valor . PHP_EOL);
                fclose($file);
                $sucesso = "Valor numérico armazenado com sucesso.";
            } else if (is_string($valor)) {
                $file = fopen($valor, 'file_string.txt', 'a');
                fputs($file, $valor . PHP_EOL);
                fclose($file);
                $sucesso = "Valor string armazenado com sucesso.";
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tratando e guardando dados</title>
</head>
<body>
    <form method="post" action="index.php">
        <input type="text" name="text_valor">
        <input type="submit" value="Submeter">
    </form>
    
    <div>
        <?= !empty($erro) ? $erro : $sucesso ?>
    </div>
</body>
</html>