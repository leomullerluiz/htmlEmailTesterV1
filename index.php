<?php

    require 'vendor/autoload.php';

    $mail = new app\classes\Email;
    $mail->check("Assunto", "Corpo do E-mail", "Corpo alternativo, usado para clientes non-HTML ");