<?php

    $fName = $_POST['fName']; // getting the field name associated to their name fields 
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $email_from = 'Your Website'; // setting the website name
    $email_subject = 'New Message From Website'; // subject name
    $email_body = "Name: $fName.\n". // email contents 
                "Name: $lName.\n".
                "Email:$email.\n".
                "Phone:$phone.\n".
                "Message: $message.\n";

    $to = "akmyscich@hotmail.com"; // sending the email out to my personal email
    $headers = "From: $email_from\r\n";
    $headers .= "Reply-To: $email\r\n";

    mail($to, $email_subject, $email_body, $headers); // email sent

    header("location: contact.html"); // rooted contents

?>