<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $feedback = htmlspecialchars($_POST['feedback']);

    $to = 'hcollaboration69@email.com';
    $subject = 'New Feedback Submission';
    $message = "Name: $name\nEmail: $email\n\nFeedback:\n$feedback";
    $headers = 'From: ' . $email;

    if (mail($to, $subject, $message, $headers)) {
        echo "Feedback sent successfully!";
    } else {
        echo "Error sending feedback.";
    }
}
?>
