<?php
    use PHPMailer\PHPMailer\PHPMailer;

    $correo     = $_POST['email'];
    $telefono   = $_POST['telefono'];
    $mensaje    = $_POST['mensaje'];
require '../public_html/vendor/autoload.php';
$mail =  new PHPMailer;
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'marcodiazzavala@gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'marcodiazzavala@gmail.com';                 // SMTP username
    $mail->Password = 'diazzavala10';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($correo, $mensaje);
    $mail->addReplyTo('marcodiazzavala@gmail.com', $mensaje);




    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 1;
} catch (Exception $e) {
    echo 2;
}
/*
$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Host = 'mx1.hostinger.com';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'test@hostinger-tutorials.com';
$mail->Password = 'EMAIL_ACCOUNT_PASSWORD';
$mail->setFrom('test@hostinger-tutorials.com', 'Your Name');
$mail->addReplyTo('reply-box@hostinger-tutorials.com', 'Your Name');
$mail->addAddress('example@gmail.com', 'Receiver Name');
$mail->Subject = 'PHPMailer SMTP message';
$mail->msgHTML(file_get_contents('message.html'), __DIR__);
$mail->AltBody = 'This is a plain text message body';
$mail->addAttachment('test.txt');
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

*/

?>