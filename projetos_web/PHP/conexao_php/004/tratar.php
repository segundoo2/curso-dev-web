<?php 

require_once("Database.php");

use segundo\Database;

$conexao = [
    'host' => 'localhost',
    'database' => 'meus_clientes',
    'username' => 'root',
    'password' => ''

];

$database = new Database($conexao);

$params = [
    ':nome' => $_POST['text_nome'],
    ':email' => $_POST['text_email'],
];

$result = $database->execute_non_query("INSERT INTO clientes(nome, email, create_at) VALUES(:nome, :email, NOW())", $params);

header('Location: formulario.php');

?>