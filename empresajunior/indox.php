<?php
include('conexao1.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM cadastros WHERE email = '$email' AND senha = '$senha'";
        // var_dump($sql_code);
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: painel.php");

        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login</title>
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">Acesse sua conta</h1>
        <form action="" method="POST" class="login-form" method="POST">
            <p class="input-field">
                <label for="email">E-mail</label>
                <input id="email" type="email" name="email">
            </p>
            <p class="input-field">
                <label  for="senha">Senha</label>
                <input type="password" id="senha" name="senha">
            </p>
            <p class="input-field">
                <button class="login-button" type="submit">Entrar</button>
            </p>
        </form>
    </div>
</body>
</html>