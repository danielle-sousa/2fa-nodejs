<?php

declare(strict_types=1);
require 'vendor/autoload.php';
$secret = 'GEZDGNBVGY3TQOJQGEZDGNBVGY3TQOJQ';
$link = \Sonata\GoogleAuthenticator\GoogleQrUrl::generate('admin', $secret, '2fa');
$g = new \Sonata\GoogleAuthenticator\GoogleAuthenticator();

if(isset($_POST['submit'])) {
    $code = $_POST['pass-code'];

    if ($g->checkCode($secret, $code)) {
        header("location: welcome.php");
    } 
    else {
        $message = "Código inválido! Tente novamente.";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }

}
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Autenticação de Dois Fatores</title>

    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container text-center" style="max-width: 600px;">
        <div class="container-fluid ">
        <h1 class="pt-3">Login | Etapa de Verificação</h1>

            <img src="<?=$link;?>">

            <p>Por favor, instale o aplicativo <strong>Google Authenticator</strong> no seu celular, abra e escaneie o código acima. Então, digite abaixo o código informado pelo aplicativo: </p>

            <form action="" method="POST">

            <div class="form-group">
            <input type="text" class="form-control form-control-sm" name="pass-code" placeholder="Digite seu código" autocomplete="off" autofocus required >
            </div>
            
            <input type="submit" value="Enviar" class="btn btn-dark" name="submit">

            </form>

     
        </div>

    </div>

</body>
</html>