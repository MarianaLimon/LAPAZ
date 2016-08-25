<?php

  $name = @trim(stripslashes($_POST['name']));
  $email = @trim(stripslashes($_POST['email']));
  $phoneno = @trim(stripslashes($_POST['phoneno']));
  $message = @trim(stripslashes($_POST['message']));

  $email_from = $email;
  $email_to = 'losreyeslapaz-gobiernomunicipal@hotmail.com';
  $asunto = 'Contacto desde nuestro sitio web';

    $body = 'Nombre: ' . $name . "\n\n" . 'E-mail: ' . $email . "\n\n" . 'No. Telefonico: ' . $phoneno . "\n\n"  . 'Message: ' . $message;
    $success = @mail($email_to, $asunto, $body, 'From: <'.$email_from.'>');

header("Location: http://www.lapazedomex.com.mx/");?>