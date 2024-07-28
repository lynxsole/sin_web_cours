<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

function new_Mail($user_Mail) {
    include '..\mail\template.php';

    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'dev.croizat@gmail.com';
        $mail->Password   = 'dhlw ysgm pohn bqhl';  
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Recipients
        $mail->setFrom('do-not-responding@asso-croizat.org', 'Your favorite administrator');
        $mail->addAddress($user_Mail);
        $mail->addReplyTo('info@example.com', 'Information');
        $mail->addBCC('dev.croizat@gmail.com');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Bienvenue parmi nous !';
        $mail->Body = $mail_template;
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        error_log("Mailer Error: {$mail->ErrorInfo}", 3, '../log/mail_error.log');
        echo 'Message could not be sent. Please try again later.';
    }
}

//new_Mail('john1880@outlook.fr');


