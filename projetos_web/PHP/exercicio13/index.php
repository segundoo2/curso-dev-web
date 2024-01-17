<?php 

//declaração dos array
$numeros_positivos = [];
$numeros_negativos = [];
$textos = [];
$textos_texte = [];

//lógica
$file = fopen('dados.dat', 'r');
while (!feof($file)) {
    $linha = fgets($file);

    if (is_numeric($linha)) {
        if ($linha > 0 ) {
            $numeros_positivos[] = $linha;
        } elseif ($linha < 0){
            $numeros_negativos[] = $linha;
        }
        continue;
    }

    if (str_contains($linha, 'TESTE')) {
        $textos_texto[] = $linha;
    } else {
        $textos[] = $linha;
    }
}
fclose($file);

//apresentação dos array
echo '<prev>';
print_r($numeros_positivos);
echo '<hr>';

print_r($numeros_negativos);
echo '<hr>';

print_r($textos);
echo '<hr>';

print_r($textos_teste);

?>