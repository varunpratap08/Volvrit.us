<?php
/**
 * Contact Form Submission Handler
 * Secured version with environment-based configuration
 */

// Load Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

// Load email configuration
$configFile = __DIR__ . '/config/email_config_new.php';
if (!file_exists($configFile)) {
    error_log('Error: Email configuration file not found');
    header('HTTP/1.1 500 Internal Server Error');
    exit('Configuration error. Please try again later.');
}

$config = require $configFile;

// Import PHPMailer classes
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
    
    // Basic input validation
    if (empty($name) || empty($email) || empty($message)) {
        header('HTTP/1.1 400 Bad Request');
        exit('Please fill in all required fields.');
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('HTTP/1.1 400 Bad Request');
        exit('Please provide a valid email address.');
    }

    // Sanitize inputs
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $phone = filter_var($phone, FILTER_SANITIZE_STRING);
    $subject = filter_var($subject, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);
    $service_type = isset($_POST['service_type']) ? filter_var($_POST['service_type'], FILTER_SANITIZE_STRING) : 'Not specified';
    
    // Prepare email
    $email_subject = "New Contact Form Submission: " . (!empty($subject) ? $subject : 'No Subject');
    
    // Email body
    $email_body = "<h2>New Contact Form Submission</h2>".
                 "<p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>".
                 "<p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>".
                 "<p><strong>Phone:</strong> " . htmlspecialchars($phone) . "</p>".
                 "<p><strong>Service Type:</strong> " . htmlspecialchars($service_type) . "</p>".
                 "<p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>".
                 "<p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";
    
    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);
    
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = $config['smtp']['host'];
        $mail->SMTPAuth = true;
        $mail->Username = $config['smtp']['username'];
        $mail->Password = $config['smtp']['password'];
        $mail->SMTPSecure = $config['smtp']['encryption'];
        $mail->Port = $config['smtp']['port'];
        
        // Enable verbose debug output (for testing)
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
        
        // Recipients
        $mail->setFrom($config['smtp']['from_email'], $config['smtp']['from_name']);
        $mail->addAddress($config['smtp']['admin_email']);
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
