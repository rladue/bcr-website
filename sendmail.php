<?php

if($_POST["message"]) {

mail("blucollarrust@gmail.com", "Here is the subject line",

$_POST["insert your message here"]. "From: an@email.address");

}

/*
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $username = $_POST["username"];
    $server = $_POST["server"];
    $issue = $_POST["issue"];
    $message = $_POST["message"];


    $to = "bluecollarrust@gmail.com";
    $subject = "BlueCollarRust.com Report Submission";
    $body = "Name: {$username}\n\nServer: {$server}\n\nIssue Type: {$issue}\n\nMessage: {$message}";
    $headers = "From: {$username}";


    if (mail($to, $subject, $body, $headers)) {
        echo '<script language="javascript">';
        echo 'alert("Message successfully sent")';
        echo '</script>';
    } else {
        echo '<script language="javascript">';
        echo 'alert("Failed to send message")';
        echo '</script>';
    }
}*/
?>