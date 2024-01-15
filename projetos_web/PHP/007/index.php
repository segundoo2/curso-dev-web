<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container d-flex align-items-center justify-content-center vh-100">
    <div class="row">
            <div class="col-12 p-3 bg-white br-5 rounded text-black  p-5">
                <h1 class="text-center">Selva System</h3>
                <form action="">
                    <div class="mt-4 mb-3">
                        <input type="email" name="email" id="email" class="form-control border-dark " placeholder="Email">
                    </div>

                    <div>
                        <input type="password" name="senha" id="senha"  class="form-control border-dark " placeholder="Senha">
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn text-white mt-3" onclick="validarLogin()">Entrar</button>
                    </div>
                </form>
                <footer class="mt-5 mb-1">
                    <p class="text-center text-secondary">
                        <small>Autor: Edilson Segundo</small>
                        <br>
                        <small>Clube: Reino Selvagem</small>
                    </p>
                </footer>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="assets/javascript/script.js"></script>
</body>
</html>