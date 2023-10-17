<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/src/Exception.php';
require 'path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    // Configurações do servidor
    $mail->SMTPDebug = 2;                                 // Ativa a saída de debug detalhado
    $mail->isSMTP();                                      // Configura o uso de SMTP
    $mail->Host       = 'brenomiguel79@gmail.com';            // Endereço do servidor SMTP
    $mail->SMTPAuth   = true;                             // Ativa autenticação SMTP
    $mail->Username   = 'brenomiguel79@gmail.com';        // SMTP username
    $mail->Password   = 'sua_senha';                      // SMTP password
    $mail->SMTPSecure = 'tls';                            // Ativa encriptação TLS, `ssl` também é aceito
    $mail->Port       = 587;                              // Porta TCP para conectar

    // Destinatários
    $mail->setFrom('seuemail@seudominio.com', 'Nome');
    $mail->addAddress('destinatario@example.com');        // Adiciona um destinatário

    // Conteúdo
    $mail->isHTML(true);                                  // Define o formato do email como HTML
    $mail->Subject = 'Assunto do Email';
    $mail->Body    = 'Este é o corpo da mensagem em <b>HTML!</b>';
    $mail->AltBody = 'Este é o corpo da mensagem para clientes de e-mail não HTML';

    $mail->send();
    echo 'Mensagem enviada com sucesso';
} catch (Exception $e) {
    echo "Mensagem não pôde ser enviada. Erro: {$mail->ErrorInfo}";
}
?>
