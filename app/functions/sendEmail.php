<?php

require '../../vendor/autoload.php';

$subject = "HTML E-mail Tester";
$body = $_POST['htmlInput'];
$altBody = $_POST['htmlInput'];


$mail = new app\classes\Email;

try{
    if($mail->forward($subject, $body, $altBody)){
        $toast = "Email Enviado com sucesso";
    }else{
        $toast = "Erro ao tentar enviar mensagem";
    }
    
}catch(Exception $e){
    $toast = "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
<script>
    window.location = "../../?page=home&toast=<?php echo $toast?>"
</script>