<?php

if(isset($_POST['message']))
{
    $to      = 'sushma2219@gmail.com';
    $subject = 'the subject';
    $message = 'hello';
    $headers = 'From: sushma.bmu.14cse@bml.edu.in' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Email Sent.';
}

?>