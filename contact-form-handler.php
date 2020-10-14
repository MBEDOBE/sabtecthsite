<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_from = $visitor_email; //'Sabtech67@gmail.com'
$email_subject = "New Form Submission";
$email_body = "User Name : $name. \n".
              "User Email : $visitor_email. \n".
              "User Message : $email. \n";


$to = 'danielbushbaby@gmail.com';

$headers = "From : $email_from \r\n";
$headers = "Reply to : $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")

?>
