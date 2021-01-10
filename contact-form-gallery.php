:'<?php

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $brands = $_POST['brands'];
    $message = $_POST['message'];
   
    $mailTo = "green.does.everything@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    
    header("Location: contact-form-gallery.php?mailsend");
}