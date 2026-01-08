<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    
    $to = "zulufletcher02@gmail.com";

    
    $subject = "New message from your website contact form";
    $body = "You have received a new message from your website:\n\n" .
            "Name: $name\n" .
            "Email: $email\n" .
            "Message:\n$message";

    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name. Your message has been sent successfully!</h2>";
    } else {
        echo "<h2>Sorry, something went wrong. Please try again later.</h2>";
    }
} else {
    echo "<h2>Access denied.</h2>";
}
?>
