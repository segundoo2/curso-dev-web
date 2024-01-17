<?php 
function dividir($v1, $v2) {
    try {
        return $v1 / $v2;
    } catch (\Throwable $th) {
        return null;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>devidindo números aleatórios</title>
</head>
<body>
    <?php for ($i=0; $i <= 20 ; $i++): ?>
        <?php 
            $valor1 = rand(0,10);
            $valor2 = rand(0,10);
            $resultado = dividir($valor1, $valor2)
        ?>
        <p><?= "$valor1 : $valor2 = " . ($resultado === null ? 'Divisão por zero' : $resultado) ?></p>
    <?php endfor; ?>
</body>
</html>