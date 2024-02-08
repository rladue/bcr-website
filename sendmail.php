<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(
        !empty($_POST['username'])
        && !empty($_POST['server'])
        && !empty($_POST['issue'])
        && !empty($_POST['message'])
    ){
        $username = $_POST["username"];
        $server = $_POST["server"];
        $issue = $_POST["issue"];
        $message = $_POST["message"];


        $to = "bluecollarrust@gmail.com";
        $subject = "BlueCollarRust.com Report Submission";
        $body = "Name: {$username}\n\nServer: {$server}\n\nIssue Type: {$issue}\n\nMessage: {$message}";
        $headers = "From: {$username}";


        if (mail($to, $subject, $body, $headers)) {
            echo "Report sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    }
}
?>