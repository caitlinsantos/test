<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'YaziCole';

    $email_subject = "New Message from YaziCole";

    $email_body = "Name: $name.\n".
                  "Email: $visitor_email.\n".
                  "Message: $message.\n";

    $to = "green.does.everything@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("location: index.html");

?>