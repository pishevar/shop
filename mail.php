<?php
require './vendor/autoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'diba.otana.org';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@diba.otana.com';                 // SMTP username
$mail->Password = '1234qwer@';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to
$mail->isHTML(true);                                  // Set email format to HTML
$mail->setFrom('info@diba.otana.com', 'info');

$mail->SMTPOptions = array(
    'SSL' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_sign' => true
    )
);

$mail->addAddress('pishevar.m66@gmail.com', 'mary');

// Add a recipient

$mail->Subject = 'salam';
$mail->Body = 'This is the test <b>in bold!</b>';

if (!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
$email->clearAddresses();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
echo "welcome to my shop";
?>
        <a href="login.php">login</a>
        <a href="register.php">register</a>
    </body>
</html>
