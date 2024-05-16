<?php

/**
 *
 */
?>


<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body style="display: flex; width: 100vw;height: 100vh;">

<div style=" border: 2px solid gray;border-radius: 15px;padding: 50px;margin: auto;display: flex;max-width: 700px;width: 100%;">
    <form id="login">
        <h4>Login</h4>
        <div class="row">
            <div class="mb-3">
                <label for="mail" class="form-label">E-mail</label>
                <input type="email" class="form-control" required id="mail" placeholder="Enter your mail">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" required id="password" placeholder="Enter your password">
            </div>
        </div>
        <a href="./home" type="submit" class="btn btn-success">Login</a>
    </form>

</div>
</body>
</html>
