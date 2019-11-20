<?php

//echo "hi"
if(!isset($_REQUEST['submit'])){
    header("Location: ../home/home_index.html");
}
$firstName = $_REQUEST['firstname'];
$lastName = $_REQUEST['lastname'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$mailtoEmail = "davidoo1166@hotmail.com";
$mailSubject = "Website Contact Info";
$mailBody = "Contact Name: $firstName $lastname \n".
            "Subject: $subject \n\n".
            "Message: $message";


mail($mailtoEmail, $mailSubject, $mailBody);
header("Location: ../contact_us/contact_us_index.html");
exit;
?>