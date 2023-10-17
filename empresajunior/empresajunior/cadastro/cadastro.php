<?php
include('conexao.php');

$showForm = true;
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"] ?? null;
    $email = $_POST["email"] ?? null;
    $telefone = $_POST["telefone"] ?? null;
    $senha = $_POST["senha"] ?? null;
    $confirmar_senha = $_POST["confirmar_senha"] ?? null;

    if (empty($nome) || empty($email) ||empty($telefone) || empty($senha) || empty($confirmar_senha)) {
        $message = "<div class='alert alert-error'>Todos os campos são obrigatórios!</div>";
    } elseif ($senha !== $confirmar_senha) {
        $message = "<div class='alert alert-error'>As senhas não coincidem!</div>";
    } else {
        $email = $conn->real_escape_string($email);
        $senha = $conn->real_escape_string($senha);
        $sql = "INSERT INTO voluntarios (nome, email, telefone, senha) VALUES ('$nome','$email', '$telefone','$senha')";

        if ($conn->query($sql) === TRUE) {
            $message = "<div class='alert alert-success'>Cadastro realizado com sucesso! <a href='../index.html'>Voltar ao início</a></div>";
            $showForm = false;
        } else {
            $message = "<div class='alert alert-error'>Erro ao inserir dados: " . $conn->error . "</div>";
        }
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../"> 
    <title>Cadastro</title>
</head>
<body>

    <?php
    if (!empty($message)) {
        echo $message;
    }

    if ($showForm):
    ?>

    <?php endif; ?>
</body>
</html>