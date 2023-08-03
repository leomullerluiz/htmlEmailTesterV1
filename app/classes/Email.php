<?php

    namespace app\classes;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;

    //$dotenv = \Dotenv\Dotenv::createImmutable("./");
    //$dotenv->load();    

    class Email extends \PHPMailer\PHPMailer\PHPMailer{
        public $dotenv;

        public function __construct(){
            $this->dotenv = \Dotenv\Dotenv::createImmutable(__DIR__, 'smtp.env');
            $this->dotenv->load();
        }

        public function forward($subject, $body, $altBody, $recipientEmail){

            // try {
                //Server settings
                $this->SMTPDebug = 0;                      //Enable verbose debug output
                $this->isSMTP();                                            //Send using SMTP
                $this->Host       = $_ENV['SMTP_HOST'];                     //Set the SMTP server to send through
                $this->SMTPAuth   = true;                                   //Enable SMTP authentication
                $this->Username   = $_ENV['MAIL_USERNAME'];                     //SMTP username
                $this->Password   = $_ENV['MAIL_PASSWORD'];                               //SMTP password
                $this->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $this->Port       = $_ENV['SMTP_PORT'];                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
            
                //Recipients
                $this->setFrom('mailer@leomullerluiz.com', 'Mailer');
                $this->addAddress($recipientEmail);              //Name is optional
                $this->addReplyTo('mailer@leomullerluiz.com', 'Auto Mailer');
                //$mail->addCC('cc@example.com');
                //$mail->addBCC('bcc@example.com');
            
            
                //Content
                $this->isHTML(true);                                  //Set email format to HTML
                $this->Subject = $subject;
                $this->Body    = $body;
                $this->AltBody = $altBody;
            
                $this->send();
            // } catch (Exception $e) {
            //     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            // }
        }

    }