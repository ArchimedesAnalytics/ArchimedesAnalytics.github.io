<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
    
    // Prepare the email headers
    $from = 'From: ' . $email;
    $to = 'jgosier44@yahoo.com'; // Specify your email address
    $subject = 'Contact Form: ' . $subject;
    
    // Prepare the email body
    $body = "You have received a new message from $name.\n\n";
    $body .= "Email: $email\n";
    $body .= "Message:\n$message\n";
    
    // Send the email
    if (mail($to, $subject, $body, $from)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message!";
    }
} else {
    echo "Form not submitted";
}
?>
