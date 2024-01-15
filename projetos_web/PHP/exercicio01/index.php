<?php
$produtos = ['Arroz', 'batata', 'laranja'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
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
                        </ul>
                    </div>
                </div>
            </div>


        </div>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>