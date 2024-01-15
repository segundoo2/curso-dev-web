<?php
session_start();

$inputs = [];
if (isset($_SESSION['inputs'])) {
    $inputs = $_SESSION['inputs'];
    unset($_SESSION['inputs']);
}

function show_error($campo) {
    global $inputs;

    if (key_exists($campo, $inputs)) {
        return '<span class="text-danger"><small><i>' . $inputs[$campo]['erro'] . '</i></small></span>';
    } else {
        return '';
    }
}

function show_value($campo) {
    global $inputs;

    if (key_exists($campo, $inputs)) {
        if (!empty($inputs[$campo]['value'])) {
            return $inputs[$campo]['value'];
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Entrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-dark">

    <div class="container mt-5 p-5 w-50 bg-warning rounded">
        <div class="row m-auto ">
            
            <div class="col-6 m-auto ">
                
                <h1 class="mb-3 fw-bold text-uppercase text-dark">Login</h1>
                <form method="post" action="submissao.php">
                    
                    <!--usename-->
                    <div class="mb-3">
                        <input type="text" class="form-control " name="text_username" placeholder="Username" value="<?= show_value('text_username') ?>">
                        <?= show_error('text_username') ?>
                    </div>

                    <!--password-->
                    <div class="mb-3">
                        <input type="password" class="form-control" name="text_password" placeholder="Password" value="<?= show_value('text_password') ?>">
                        <?= show_error('text_password') ?>
                    </div>
                    <button type="submit" class="btn btn-secondary">Entrar</button>
                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>