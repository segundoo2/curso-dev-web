<?php
    $produtos = ['Laranja', 'Arroz', 'Batata', 'Feijão', 'Castanha'];
    sort ($produtos);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de produtos 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="row bg-dark ">
                <div class="col-12 text-center">
                    <h1 class="h1 text-info ">Exercício PHP 1</h1>
                </div>
            </div>

            <div class="row">
            <div class="col-12">
                <div class="card m-auto py-4 px-1 mt-4 bg-dark " style="width: 18rem;">
                    <h5 class="card-title text-primary m-auto ">LISTA DE PRODUTOS:</h5>
                    <div class="card-body py-0 ">
                        <ul class="text-warning">
                            <li><?= $produtos[0] ?></li>
                            <li><?= $produtos[1] ?></li>
                            <li><?= $produtos[2] ?></li>
                            <li><?= $produtos[3] ?></li>
                            <li><?= $produtos[4] ?></li>
                        </ul>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>