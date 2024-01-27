<?php
$dataBase = 'udemy_loja_online';
$userName = 'user_loja_web';
$password = 'DJ5oow)EPszNP!zw';
//DNS(Data Source Name)----------------username do utilizador no bd e o password dele
$ligacao = new PDO("mysql:host=localhost;dbname=$dataBase", $userName, $password);
//mysql: tipo de base de dados | host: localização da base de dados | dbname: nome da base de dados
echo $ligacao->getAttribute(PDO::ATTR_CONNECTION_STATUS);

$resultado = $ligacao->query("SELECT * FROM produtos");

while ($linha = $resultado->fetch()) {
    echo '<br><br>Produto: <strong>' . $linha['produto'] . '</strong><br>';
}

$ligacao = null;