<?php
    $name = $_POST['name'];
    $sender_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'Weston Woods HOA Inquiry';

    $email_subject = "New HOA Contact Us Submission";

    $email_body = "User Name:  $name.\n".
                  "User Email: $sender_email.\n".
                  "User Message: $message.\n";

    $to = "djg5826@gmail.com";

    $headers = "From: $email_from \r\n";

    $headers .="Reply-To: $sender_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: contact.html");



?>