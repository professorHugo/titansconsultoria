<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'assets/PHPMailer/Exception.php';
require 'assets/PHPMailer/PHPMailer.php';
require 'assets/PHPMailer/SMTP.php';

  $mail = new PHPMailer(true);

  //Dados do e-mail
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $assunto = $_POST['subject'];
  $mensagem = $_POST['message'];
  $data_envio = date('d/m/Y');
  $hora_envio = date('H:i:s');

  //Server settings
  $mail->SMTPDebug = 2;                                 // Enable verbose debug output
  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'mail.n2y.com.br';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'contato@n2y.com.br';                 // SMTP username
  $mail->Password = 'ctM0bNL0c]9h';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  //Recipients
  $mail->setFrom($email, $nome);
  $mail->addAddress('hugo@n2y.com.br', 'Hugo');     // Add a recipient
  $mail->addAddress('hugo.n2y@gmail.com');               // Name is optional
  $mail->addReplyTo('contato@n2y.com.br', 'Information');
  $mail->addCC('cc@example.com');
  $mail->addBCC('bcc@example.com');
  // $mail->mailHeader("
  //   MIME-Version: 1.0 \r\n Content-type: text/html; charset=iso-8859-1 \r\n From: $nome <$email>
  // ");

  //Attachments
  //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
  //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

  //Content
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = $assunto;
  $mail->Body    = 
  //Corpo do E-mail
  "
  <style type='text/css'>
    body{
      margin: 0px;
      font-family: Verdana;
      font-size: 12px;
      color: #333;
    }
    a{
      color: #333;
      text-decoration: none;
      transition: all 0.2s;
    }
    a:hover{
      color: #03f;
      text-decoration:none;
    }
  </style>

  <html>
    <table width='90%' border='1' cellpadding='1' cellspacing='1' bgcolor='#ccc'>
      <tr>
        <td colspan='2'>Nome: $nome </td>
      </tr>
      <tr>
        <td colspan='2'>E-mail: $email</td>
      </tr>
      <tr>
        <td colspan='2'>Telefone: $assunto</td>
      <tr>
      <tr>
        <td colspan='2'>Mensagem: $assunto</td>
      <tr>
      <tr>
        <td>Data: $data_envio</td>
        <td>Hora: $hora_envio</td>
      </tr>
    </table>
  </html>
  ";
  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

  if( $mail->send() ){
    echo "
      <script>
        alert('Email Enviado');
      </script>
      <meta http-equiv='refresh' content='0;index.php'>

    ";
  }else{
    echo "
      <script>
        alert('Email não Enviado: ' $mail->ErroInfo);
      </script>

    ";
  }

