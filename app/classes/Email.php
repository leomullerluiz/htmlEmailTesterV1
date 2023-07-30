<?php

    namespace app\classes;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    $dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']."/phpmailer");
    $dotenv->load();    

    class Email extends \PHPMailer\PHPMailer\PHPMailer{


        public function check($subject, $body, $altBody){

            
            try {
                //Server settings
                $this->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $this->isSMTP();                                            //Send using SMTP
                $this->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
                $this->SMTPAuth   = true;                                   //Enable SMTP authentication
                $this->Username   = $_ENV['MAIL_USERNAME'];                     //SMTP username
                $this->Password   = $_ENV['MAIL_PASSWORD'];                               //SMTP password
                $this->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $this->Port       = $_ENV['SMTP_PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $this->setFrom('mailer@leomullerluiz.com', 'Mailer');
                $this->addAddress('leomullerluiz@gmail.com');              //Name is optional
                $this->addReplyTo('mailer@leomullerluiz.com', 'Auto Mailer');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');
            
            
                //Content
                $this->isHTML(true);                                  //Set email format to HTML
                $this->Subject = $subject;
                $this->Body    = $body;
                $this->AltBody = $altBody;
            
                $this->send();

            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }