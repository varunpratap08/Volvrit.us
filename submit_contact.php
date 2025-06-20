<?php
// Load Composer's autoloader
require 'vendor/autoload.php';

// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    
    // Your email configuration
    $to = "your-email@example.com"; // Change this to your email address
    $from_name = "Evolvix Contact Form";
    $from_email = "noreply@yourdomain.com"; // Change this to your domain
    
    // Email subject
    $email_subject = "New Contact Form Submission: $subject";
    
    // Get the selected service type
    $service_type = isset($_POST['service_type']) ? $_POST['service_type'] : 'Not specified';
    
    // Email body
    $email_body = "<h2>New Contact Form Submission</h2>".
                 "<p><strong>Name:</strong> $name</p>".
                 "<p><strong>Email:</strong> $email</p>".
                 "<p><strong>Phone:</strong> $phone</p>".
                 "<p><strong>Service Type:</strong> $service_type</p>".
                 "<p><strong>Subject:</strong> $subject</p>".
                 "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Change this to your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@gmail.com'; // Your Gmail address
        $mail->Password = 'your-app-specific-password'; // Your Gmail app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port = 587; // TCP port to connect to
        
        // Recipients
        $mail->setFrom($from_email, $from_name);
        $mail->addAddress($to); // Add a recipient
        $mail->addReplyTo($email, $name);
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = $email_subject;
        $mail->Body = $email_body;
        $mail->AltBody = strip_tags(str_replace("<br>", "\n", $email_body));
        
        // Send the email
        $mail->send();
        
        // Redirect to thank you page
        header('Location: thank-you.html');
        exit();
        
    } catch (Exception $e) {
        // Log the error (optional)
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        
        // Redirect to error page
        header('Location: error.html');
        exit();
    }
} else {
    // If not a POST request, redirect to contact page
    header('Location: contact.php');
    exit();
}
?>
