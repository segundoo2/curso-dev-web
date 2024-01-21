<?php 
require_once('class_numero.php');

$n1 = new Numero(5);
$n2 = new Numero(7);
$n3 = new Numero(16);
$n4 = new Numero(123);

echo '<pre>';

echo $n1->get_Numero() . '<br>';
echo $n1->par_Impar() . '<br>';
echo $n1->raiz_Quadrada() . '<br>';
print_r($n1->tabuada());

echo '<hr>';

echo '<pre>';

echo $n2->get_Numero() . '<br>';
echo $n2->par_Impar() . '<br>';
echo $n2->raiz_Quadrada() . '<br>';
print_r($n2->tabuada());

echo '<hr>';

echo '<pre>';

echo $n3->get_Numero() . '<br>';
echo $n3->par_Impar() . '<br>';
echo $n3->raiz_Quadrada() . '<br>';
print_r($n3->tabuada());

echo '<hr>';

echo '<pre>';

echo $n4->get_Numero() . '<br>';
echo $n4->par_Impar() . '<br>';
echo $n4->raiz_Quadrada() . '<br>';
print_r($n4->tabuada());

echo '<hr>';
?>