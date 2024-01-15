<?php
$nome = 'Carlos';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apresentando um nome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mt-3">
                <div class="alert alert-success" role="alert">
                    <?php if ($nome == 'João') : ?>
                        O nome é João
                    <?php elseif ($nome == 'Ana') : ?>
                        O nome é Ana
                    <?php elseif ($nome == 'Carlos') : ?>
                        <p class="text-success my-0">O nome é Carlos</p>
                    <?php else : ?>
                        <h1 class="text-success">É um nome desconhecido</h1>
                    <?php endif; ?> 
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>