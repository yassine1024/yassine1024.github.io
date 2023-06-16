<?php
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set email parameters
$to = 'atik.yassine.1024@gmail.com';  // Replace with your own email address
$subject = 'Portfolio Contact';
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
$headers = "From: $email";
$mailSent = mail($to, $subject, $body, $headers);

// Check if the email was sent successfully
if ($mailSent) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>
