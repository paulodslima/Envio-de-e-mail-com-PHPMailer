<?php 
    header('location: ../index.php?envio=sucesso');

    $nome_destinatario = $_POST['nomeDestinatario'];
    $email_destinatario = $_POST['emailDestinatario'];
    $mensagem = $_POST['mensagem'];

    require('../PHPMailer/DSNConfigurator.php');
    require('../PHPMailer/Exception.php');
    require('../PHPMailer/OAuthTokenProvider.php');
    require('../PHPMailer/OAuth.php');
    require('../PHPMailer/PHPMailer.php');
    require('../PHPMailer/POP3.php');
    require('../PHPMailer/SMTP.php');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'enviarmensagem435@outlook.com';                     //SMTP username
        $mail->Password   = '123456789teste';                               //SMTP password
        $mail->SMTPSecure = 'tls';#PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('enviarmensagem435@outlook.com', 'Sistema de envio de e-mail');
        $mail->addAddress($email_destinatario, $nome_destinatario);     //Add a recipient

        // Defina a codificação de caracteres para UTF-8
        $mail->CharSet = 'UTF-8';

        // Defina o cabeçalho Content-Type para texto/html com UTF-8
        $mail->ContentType = 'text/html; charset=UTF-8';

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Mensagem enviada com sucesso!';
        $mail->Body    = "Essa mensagem foi enviada como forma de teste. <br>Mensagem:" . $mensagem;
        $mail->AltBody = 'teste de envio de e-mail PHPMailer';
        $mail->send();
    } catch (Exception $e) {
        echo "A mensagem não pode ser enviada, erro: {$mail->ErrorInfo}";
    }
?>