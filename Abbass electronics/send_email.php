<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'your-email@gmail.com'; // Replace with your Gmail address
    $subject = 'New Email from Website';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    $mailBody = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo 'Email sent successfully!';
    } else {
        echo 'Failed to send email. Please try again.';
    }
}
?>
