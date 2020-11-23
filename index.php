<?php

if(isset($_POST['submit'])) {
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if ($login == "admin" || $senha == "12345") {
        header("location: auth.php");
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
    <title>Login | Autenticação Dois Fatores</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

    <div class="container text-center" style="max-width: 600px;">
        <div class="container-fluid justify-content-center">
   
        <h1 class="pt-3">Login</h1>

        <form action="" method="post">

        <div class="form-group ">
            <label for="Usuario">Login</label>
                <input name="login" class="form-control form-control-sm" type="text" required autofocus placeholder="Digite seu usuário" >
        </div>

        <div class="form-group">
            <label for="Senha">Senha</label>
                    <input name="senha" class="form-control form-control-sm" type="password" required placeholder="Digite sua senha">
        </div>
            
            <input type="submit" name="submit" class="btn btn-dark" value="Login">
            
        </form>
        
    </div>
</div>

</body>
</html>