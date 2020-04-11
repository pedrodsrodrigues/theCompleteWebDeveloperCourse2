<?php
// NOT WORKING ON LOCALHOST (so I don't really know if it works)

// Receiver
$emailTo = 'pedro93.pr.pd@gmail.com';

// Title of the email
$subject = 'PHP testing';

// Body
$body = 'Testing the body here.';

// Sender
$headers = 'From: pedro93daniel@hotmail.com';

// We can put this in a condition because, if sent, it retrieves TRUE
if (mail($emailTo, $subject, $body, $headers)) {
    echo 'Sent!';
}
