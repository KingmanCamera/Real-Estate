<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Put your email address here
    $to = "KingmanCamera@gmail.com";

    $subject = "New message from your website";

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: ". $email . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";

    if(mail($to,$subject,$body,$headers)){
        echo "Message sent successfully!";
    } else{
        echo "Message could not be sent!";
    }
}
?>
