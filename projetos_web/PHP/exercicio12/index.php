<?php 
session_start();

$erro = !empty($_SESSION['erro']) ? $_SESSION['erro'] : '';
unset($_SESSION['erro']);
$resultado = $_SESSION['resultado'];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora de multiplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container m-auto">
        <div class="row-6 mt-5 ">
            <div class="col">
                <form action="tratamento.php" method="post" class="m-auto p-5 w-50 rounded bg-dark ">

                    <h2 class="text-primary fw-bold">Calculadora de multiplicação com PHP</h2>
                    <div class=" m-auto mt-3 w-50">
                        <input type="text" name="n1" class="form-control" placeholder="primeiro número">
                    </div>

                    <div class="m-auto mt-3 w-50 ">
                        <input type="text" name="n2" class="form-control" placeholder="segundo número">
                        
                        <div>
                            <button type="submit" class="btn btn-primary mt-3">Calcular</button>
                        </div>
                    </div>

                    
                    
                        <!--Caso apresente erro-->
                    <div>
                        <?php if(!empty($erro)): ?>
                            <p class="text-danger text-center mt-4"><?= $erro ?></p>
                        <?php else: ?>
                            <h3 class="text-white text-center mt-4">Resultado: <?= $resultado ?>
                            </h3>
                            <?php die()?>
                        <?php endif; ?>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>