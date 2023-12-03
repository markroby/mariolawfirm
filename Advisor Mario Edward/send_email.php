<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Compose email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Subject: $subject\n\n";
    $email_content .= "Message:\n$message";

    // Set up email headers
    $headers = "From: $email";

    // Send email
    mail('recipient@example.com', $subject, $email_content, $headers);

    // Redirect or display a success message
    header('Location: thank_you.html');
    exit();
}
?>
