<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "nasedkin@tcd.ie"; // Replace with your email address
    $subject = "Contact Form Submission";
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    $headers = "From: $name <$email>";

    if (mail($to, $subject, $message, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>