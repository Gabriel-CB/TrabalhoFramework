<?php

/**
 * @var $nome
 */

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../../Assents/Js/index.js" defer type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="../../Assents/Css/index.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body style="width: 100vw;height: 100vh;">

<div id="container-login">

    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding-bottom: 50px">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-home"></i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="gap: 10px">
                    <li class="nav-item disabled">
                        <a class="nav-link" href="#">Products <i class="fas fa-box-open"></i></a>
                    </li>
                    <li class="nav-item disabled">
                        <a class="nav-link" href="#">Supplier <i class="fas fa-parachute-box"></i></a>
                    </li>
                    <li class="nav-item disabled">
                        <a class="nav-link" href="#">Carts <i class="fas fa-shopping-cart"></i></a>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link"
                                onclick="if (confirm('Do you really want exit ?')) { window.location.href='./index.php/login' }">
                            Exit <i class="fas fa-door-open"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div style="padding: 30px">
        <h2>
            <?= "Olá" . ". Seja bem vindo ao meu FrameWork !!" ?>
        </h2>
    </div>
</div>
</body>
</html>
