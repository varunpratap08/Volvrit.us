<?php
// Include header
$page_title = 'Contact Us - Volvrit';
require_once 'includes/header.php';

// Form submission handling
$success_message = '';
$error_message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic form validation
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    // Simple validation
    if (empty($name) || empty($email) || empty($message)) {
        $error_message = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error_message = 'Please enter a valid email address.';
    } else {
        // Process the form (in a real application, you would send an email or save to database)
        $to = 'info@volvrit.com';
        $email_subject = "New Contact Form Submission: $subject";
        $email_body = "You have received a new message from your website contact form.\n\n".
                    "Name: $name\n".
                    "Email: $email\n".
                    "Phone: $phone\n\n".
                    "Message:\n$message";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        // In a real application, you would uncomment and use this:
        // if (mail($to, $email_subject, $email_body, $headers)) {
        //     $success_message = 'Thank you for your message. We will get back to you soon!';
        // } else {
        //     $error_message = 'There was a problem sending your message. Please try again later.';
        // }
        
        // For demo purposes, we'll just show a success message
        $success_message = 'Thank you for your message. We will get back to you soon!';
    }
}
?>

<!-- Contact Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Contact Us</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/volvrit-website/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>Have questions or want to discuss a project? We'd love to hear from you.</p>
                
                <div class="contact-method">
                    <div class="contact-icon" style="background-color: #D7D7D7; width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;"></div>
                    <div>
                        <h3>Email Us</h3>
                        <p><a href="mailto:info@volvrit.com">info@volvrit.com</a></p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon" style="background-color: #D7D7D7; width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;"></div>
                    <div>
                        <h3>Call Us</h3>
                        <p><a href="tel:+1234567890">+1 (234) 567-8900</a></p>
                    </div>
                </div>
                
                <div class="contact-method">
                    <div class="contact-icon" style="background-color: #D7D7D7; width: 50px; height: 50px; border-radius: 50%; margin-right: 15px;"></div>
                    <div>
                        <h3>Visit Us</h3>
                        <p>123 Business Street<br>City, State 12345<br>Country</p>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-container">
                <h2>Send Us a Message</h2>
                
                <?php if ($success_message): ?>
                    <div class="alert alert-success"><?php echo htmlspecialchars($success_message); ?></div>
                <?php elseif ($error_message): ?>
                    <div class="alert alert-error"><?php echo htmlspecialchars($error_message); ?></div>
                <?php endif; ?>
                
                <form action="/volvrit-website/contact.php" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Your Name <span class="required">*</span></label>
                        <input type="text" id="name" name="name" required value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Your Email <span class="required">*</span></label>
                        <input type="email" id="email" name="email" required value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" value="<?php echo htmlspecialchars($_POST['subject'] ?? ''); ?>">
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Your Message <span class="required">*</span></label>
                        <textarea id="message" name="message" rows="5" required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section">
    <div class="map-container">
        <!-- Replace with your actual map embed code -->
        <div style="background-color: #D7D7D7; height: 400px; display: flex; align-items: center; justify-content: center;">
            <p>Map will be embedded here</p>
        </div>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
