<?php

if(!isset($_POST['submit'])) {
    echo"error; you need to go back and submit the form, please.";
}


$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name) || empty($visitor_email)){
    echo "name and email should both be filled in.";
    exit;
}

$email_from = $visitor_email;
$email_subject = "Gallery Woman Suggestion";
$email_body = "My name is $name and my suggestion for a woman you should put up in the gallery is: \n $message
 Sincerely, \n $visitor_email ";

$to = "lujaina.eldelebshany@gmail.com";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
?>

