<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set recipient email address
    $recipient = 'contact@example.com';

    // Set email subject
    $subject = 'New Contact Form Submission';

    // Create email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message";

    // Set additional headers
    $headers = "From: $name <$email>";

    // Send email
    $success = mail($recipient, $subject, $body, $headers);

    // Check if email was sent successfully
    if ($success) {
        // Display success message
        echo 'Thank you for contacting us. We will get back to you soon.';
    } else {
        // Display error message
        echo 'Oops! An error occurred while sending your message. Please try again later.';
    }
} else {
    // Redirect to contact page if accessed directly
    header('Location: contact.html');
    exit;
}
?>
