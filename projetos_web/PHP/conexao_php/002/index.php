<?php 
    $dataBase = 'udemy_loja_online';
    $userName = 'user_loja_web';
    $password = 'DJ5oow)EPszNP!zw';

    $ligacao = new PDO("mysql:host=localhost;dbname=$dataBase;charset=utf8", $userName, $password);

    $resultados = $ligacao->query("SELECT * FROM clientes LIMIT 20")->fetchAll(PDO::FETCH_OBJ);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Apresentando dados em tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body class="m-3">
    
     <h3>Clientes</h3>
     <table class="table table-bordered table-striped ">
        
        <thead>
            <tr class="table-dark text-center ">
                <th>Nome</th>
                <th>Sexo</th>
                <th>Data de nascimento</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Morada</th>
            </tr>
        </thead>

        <tbody>
            
            <?php foreach($resultados as $cliente): ?>
                <tr>
                    <td><?= $cliente->nome ?></td>
                    <td><?= $cliente->sexo == 'm' ? 'Masculino' : 'Feminino' ?></td>
                    <td><?= substr($cliente->data_nascimento, 0, 10) ?></td>
                    <td><?= $cliente->email ?></td>
                    <td><?= $cliente->telefone ?></td>
                    <td><?= $cliente->morada . '-' . $cliente->cidade ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
     </table>
     <p class="mt-3">Total: <strong><?= count($resultados) ?></strong></p>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  </body>
</html>