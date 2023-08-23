<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $recipient_email = "emmanueldarko224@gmail.com;"
        $subject = "New Contact Form Submission";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        
        $headers = "From: $email";
        
        if (mail($recipient_email, $subject, $message, $headers)) {
            echo "Thank you! Your message has been sent.";
        } else {
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    } else {
        echo "Invalid request.";
    }
?>
