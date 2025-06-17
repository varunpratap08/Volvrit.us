<?php
// Include header
$page_title = 'Our Services - Volvrit';
require_once 'includes/header.php';
?>

<!-- Services Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Our Services</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/volvrit-website/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Services</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Services Grid -->
<section class="services-section">
    <div class="container">
        <div class="section-intro">
            <h2>What We Offer</h2>
            <p>We provide a wide range of services to help your business grow and succeed in the digital world.</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon" style="background-color: #D7D7D7; height: 80px; width: 80px; border-radius: 50%; margin: 0 auto 20px;"></div>
                <h3>Web Development</h3>
                <p>Custom websites and web applications built with the latest technologies to meet your business needs.</p>
                <a href="web_development.php" class="read-more">Learn More →</a>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon" style="background-color: #D7D7D7; height: 80px; width: 80px; border-radius: 50%; margin: 0 auto 20px;"></div>
                <h3>Mobile App Development</h3>
                <p>Native and cross-platform mobile applications for iOS and Android platforms.</p>
                <a href="app_development.php" class="read-more">Learn More →</a>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-icon" style="background-color: #D7D7D7; height: 80px; width: 80px; border-radius: 50%; margin: 0 auto 20px;"></div>
                <h3>UI/UX Design</h3>
                <p>Beautiful and intuitive user interfaces that enhance user experience and engagement.</p>
                <a href="ui_ux_development.php" class="read-more">Learn More →</a>
            </div>
            
            <!-- Add more services as needed -->
        </div>
        
        <!-- Service Details Section -->
        <div class="service-details">
            <h2>Our Approach</h2>
            <p>We follow a comprehensive approach to deliver exceptional results:</p>
            <ol>
                <li><strong>Discovery:</strong> Understanding your business goals and requirements.</li>
                <li><strong>Planning:</strong> Creating a detailed project roadmap.</li>
                <li><strong>Design:</strong> Crafting beautiful and functional designs.</li>
                <li><strong>Development:</strong> Building robust and scalable solutions.</li>
                <li><strong>Testing:</strong> Ensuring quality and performance.</li>
                <li><strong>Launch & Support:</strong> Deploying and maintaining your solution.</li>
            </ol>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Ready to Start Your Project?</h2>
        <p>Contact us today to discuss how we can help bring your ideas to life.</p>
        <a href="/volvrit-website/contact.php" class="btn btn-primary">Get in Touch</a>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
