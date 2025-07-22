<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $comments = htmlspecialchars(trim($_POST['comments']));

    // Recipient email
    $to = "contact@sted.org.in";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $message = "You have received a new message:\n\n";
    $message .= "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Subject: $subject\n\n";
    $message .= "Message:\n$comments\n";

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Failed to send message. Please try again later.'); window.location.href='index.html';</script>";
    }
} else {
    echo "Invalid request.";
}
?>
