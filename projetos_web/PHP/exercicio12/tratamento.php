<?php
//lógica de tratamento do formulário
session_start();


//verfifica se o metodo é post
if ($_SERVER['REQUEST_METHOD'] !='POST') {
    die('Acesso invalido!');
}

//verificar se os valores existem
if (empty($_POST['n1']) || empty($_POST['n2'])) {
    $_SESSION['erro'] = "Os dois valores precisam ser preenchidos.";
    header("Location: index.php");
    return;
}

//verifica se os valores são positivos
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];

if (!is_numeric($n1) || !is_numeric($n2) || $n1 < 0 || $n2 < 0) {
    $_SESSION['erro'] = "Os dois valores precisam ser númericos e positivos.";
    header("Location: index.php");
    return;
} else {
    $_SESSION['resultado'] = $n1 * $n2;
    header("Location: index.php");
}

?>