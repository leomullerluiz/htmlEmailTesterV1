<?php

require '../../vendor/autoload.php';

$subject = "HTML E-mail Tester";
$body = $_POST['htmlInput'];
$altBody = $_POST['htmlInput'];
$recipientEmail = $_POST['recipientEmail'];

$mail = new app\classes\Email;

try {
    $mail->forward($subject, $body, $altBody, $recipientEmail);
    $toast = "Email Enviado com sucesso";
} catch (Exception $e) {
    $toast = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<script>
    window.location = "../../?page=home&toast=<?php echo $toast; ?>"
</script>