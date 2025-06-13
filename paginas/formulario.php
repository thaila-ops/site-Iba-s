<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


// ou use isso se baixou manualmente:
 require 'caminho/para/src/PHPMailer.php';
 require 'caminho/para/src/SMTP.php';
 require 'caminho/para/src/Exception.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nome = $_POST['nome'] ?? '';
  $telefone = $_POST['telefone'] ?? '';
  $email = $_POST['email'] ?? '';
  $qtdpessoas = $_POST['qtdpessoas'] ?? '';
  $local = $_POST['local'] ?? '';
  $tipo_evento = $_POST['tipo_evento'] ?? '';
  $mensagem = $_POST['mensagem'] ?? '';

  $mail = new PHPMailer(true);

  try {
    // Configurações do servidor SMTP do Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'mayna.thayla@gmail.com'; // seu e-mail Gmail
    $mail->Password = 'irkp riud hrmh zxzj'; // veja abaixo como obter
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Remetente e destinatário
    $mail->setFrom('mayna.thayla@gmail.com', 'Formulário do Site');
    $mail->addAddress('mayna.thayla@gmail.com'); // para você mesmo

    // Conteúdo
    $mail->isHTML(false);
    $mail->Subject = 'Novo pedido de orçamento - Iba\'s Buffet';
    $mail->Body    = "Nome: $nome\nTelefone: $telefone\nEmail: $email\nConvidados: $qtdpessoas\nLocal: $local\nTipo de Evento: $tipo_evento\nMensagem: $mensagem";

    $mail->send();
    echo "<div class='alert alert-success mt-3'>Orçamento solicitado com sucesso!</div>";
  } catch (Exception $e) {
    echo "<div class='alert alert-danger mt-3'>Erro ao enviar: {$mail->ErrorInfo}</div>";
  }
}
?>
