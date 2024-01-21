<?php 
class fruto {
    public $nome;
    public $cor;
    public $peso;

    public function apresentarFruto() {
        return "O meu nome é {$this -> nome}, minha cor é {$this -> cor} e meu peso é {$this -> peso}";
    }

}

$laranja = new fruto();
$laranja -> nome = 'Laranja';
$laranja -> cor = 'Laranja';
$laranja -> peso = '125g';
echo $laranja -> apresentarFruto();
echo '<br>';

$banana = new fruto();
$banana -> nome = 'Banana';
$banana -> cor = 'Amarela';
$banana -> peso = '200g;';
echo $banana -> apresentarFruto();
echo '<br>';

$morango = new fruto();
$morango -> nome = 'Morango';
$morango -> cor = 'Vermelha';
$morango -> peso = '250g';
echo $morango -> apresentarFruto();
echo '<br>';

?>