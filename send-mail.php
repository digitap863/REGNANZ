<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$name = $_POST['name'];
$number = $_POST['number'];
$from = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message']; 

$mailHeaders = "Name: " . $name . "\r\nMail: " . $from . "\r\nNumber: " . $number . "\r\nSubject: " . $subject . "\r\nMessage: " . $message. "\r\n";

$to = "admissions@regnanzedu.co.in";

$headers = "From:" . $from;

if(mail($to, $subject,$mailHeaders, $headers)) {
    header("Location: contact-us.php?success=Mail send successfully");
    exit();
} 
else {
    echo "The email message was not sent.";
}
?>