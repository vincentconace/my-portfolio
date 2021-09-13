<?php
    $addressee = 'conacevincent@gmail.com';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $affair = $_POST['affair'];
    $message = $_POST['message'];

    $header = "My Web Site"
    $fullMessage = $message . "\nATT:" . $name;

    mail($addressee, $affair, $fullMessage, $header);
?>