<?php
// Get form data
$name = $_POST['firstName'];
$company = $_POST['company'];
$email = $_POST['email'];
$message = $_POST['message'];

// Email recipient
$to = 'dodger.list@proton.me';
$subject = 'CV Contact Form Submission';

// Email headers
$headers = "From: $name <$email>\r\n";
$headers .= "Reply-To: $email\r\n";

// Email body
$body = "Name: $name\n";
$company = "Company: $company\n";
$body .= "Email: $email\n\n";
$body .= "Message:\n$message";

// Send email
if (mail($to, $subject, $body, $headers)) {
  echo "Email sent successfully!";
} else {
  echo "Error sending email.";
}
?>