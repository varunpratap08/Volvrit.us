<?php
// Include header
$page_title = 'Contact Us - Volvrit';
require_once 'includes/header.php';
?>

<style>
    * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
    /* Hero Section Styling */
    .hero-section {
            position: relative;
            height: 80vh;
            min-height: 600px;
            background: linear-gradient(
                to bottom,
                rgba(255, 255, 255, 0.95) 0%,
                rgba(255, 255, 255, 0.85) 100%
            ), url('assets/images/about_usbg.png') center/cover no-repeat;
            background-blend-mode: overlay;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 120px 20px 80px;
            overflow: hidden;
        }

        .hero-section .section-label {
            font-size: 14px;
            font-weight: 600;
            color: #2563EB;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            position: relative;
            z-index: 2;
        }

        .hero-section h1 {
            font-size: 56px;
            font-weight: 700;
            line-height: 1.2;
            color: #1F2937;
            margin: 0 auto 24px;
            max-width: 800px;
            z-index: 2;
        }

        .hero-section p {
            font-size: 18px;
            color: #4B5563;
            line-height: 1.6;
            margin: 0 auto 40px;
            max-width: 600px;
            z-index: 2;
        }

        .hero-section .btn {
            z-index: 2;
            background-color: #2563EB;
            color: white;
            padding: 12px 28px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .hero-section .btn:hover {
            background-color: #1D4ED8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        .tech-icons {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            pointer-events: none;
            z-index: 1;
            opacity: 0.8;
        }

        .tech-icons img {
            position: absolute;
            width: 120px;
            height: 120px;
            object-fit: contain;
            transition: all 0.4s ease;
        }

        .tech-icons img:nth-child(1) { top: 15%; left: 10%; }
        .tech-icons img:nth-child(2) { top: 20%; right: 12%; }
        .tech-icons img:nth-child(3) { bottom: 25%; left: 15%; }
        .tech-icons img:nth-child(4) { bottom: 20%; right: 10%; }
        /* Section Styling */
        .contact-section {
            background: url('https://www.transparenttextures.com/patterns/grid-me.png') repeat;
            padding: 60px 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Section Header */
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title {
            font-size: 36px;
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .section-divider {
            width: 60px;
            height: 3px;
            background: #2563eb;
            margin: 0 auto 20px;
        }

        .section-subtitle {
            color: #666;
            font-size: 18px;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Contact Grid (Two-Column Layout) */
        .contact-grid {
            display: flex;
            gap: 40px;
            flex-wrap: wrap;
        }

        .contact-info,
        .contact-form {
            flex: 1;
            min-width: 300px;
        }

        /* Contact Information (Left Column) */
        .contact-info {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .info-title {
            font-size: 24px;
            color: #333;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            margin-bottom: 20px;
        }

        .info-icon {
            font-size: 24px;
            color: #2563eb;
        }

        .info-label {
            font-size: 16px;
            color: #333;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .info-text {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin: 0;
        }

        /* Contact Form (Right Column) */
        .contact-form {
            background: #fff;
            border-radius: 12px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 16px;
            color: #333;
            background: #fafafa;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #2563eb;
            outline: none;
            background: #fff;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-submit-btn {
            background: #2563eb;
            color: white;
            padding: 12px 28px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-submit-btn:hover {
            background: #1D4ED8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .contact-section {
                padding: 40px 15px;
            }

            .container {
                max-width: 960px;
            }

            .section-title {
                font-size: 32px;
            }

            .section-subtitle {
                font-size: 16px;
                max-width: 600px;
            }

            .contact-grid {
                gap: 30px;
            }

            .contact-info,
            .contact-form {
                padding: 25px;
            }
        }

        @media (max-width: 768px) {
            .contact-section {
                padding: 30px 10px;
            }

            .section-title {
                font-size: 28px;
            }

            .section-subtitle {
                font-size: 14px;
                max-width: 90%;
            }

            .contact-grid {
                flex-direction: column;
                gap: 20px;
            }

            .contact-info,
            .contact-form {
                width: 100%;
                max-width: 500px;
                margin: 0 auto;
            }
        }

        @media (max-width: 480px) {
            .contact-section {
                padding: 20px 10px;
            }

            .section-title {
                font-size: 24px;
            }

            .section-subtitle {
                font-size: 12px;
            }

            .contact-info,
            .contact-form {
                padding: 20px;
            }

            .info-title {
                font-size: 20px;
            }

            .info-label,
            .info-text,
            .form-group input,
            .form-group textarea {
                font-size: 14px;
            }

            .info-icon {
                font-size: 20px;
            }

            .form-group label {
                font-size: 12px;
            }

            .form-submit-btn {
                font-size: 14px;
                padding: 10px 20px;
            }
            @media (max-width: 1024px) {
            .hero-section {
                height: 70vh;
                min-height: 500px;
                padding: 100px 20px 60px;
            }

            .hero-section h1 {
                font-size: 44px;
                max-width: 600px;
            }

            .hero-section p {
                font-size: 16px;
                max-width: 500px;
            }

            .tech-icons img {
                width: 100px;
                height: 100px;
            }
            @media (max-width: 768px) {
            .hero-section {
                height: 60vh;
                min-height: 450px;
                padding: 80px 15px 40px;
            }

            .hero-section h1 {
                font-size: 32px;
                max-width: 90%;
            }

            .hero-section p {
                font-size: 14px;
                max-width: 90%;
            }

            .hero-section .btn {
                padding: 10px 20px;
                font-size: 14px;
            }

            .tech-icons img {
                width: 80px;
                height: 80px;
                opacity: 0.6;
            }

            .tech-icons img:nth-child(1) { top: 10%; left: 5%; }
            .tech-icons img:nth-child(2) { top: 15%; right: 5%; }
            .tech-icons img:nth-child(3) { bottom: 15%; left: 5%; }
            .tech-icons img:nth-child(4) { bottom: 10%; right: 5%; }
           
            @media (max-width: 480px) {
            .hero-section {
                height: 50vh;
                min-height: 400px;
                padding: 60px 10px 30px;
            }

            .hero-section h1 {
                font-size: 24px;
            }

            .hero-section p {
                font-size: 12px;
            }

            .tech-icons img {
                width: 60px;
                height: 60px;
            }
        }

</style>

<!-- Portfolio Hero Section -->
 <!-- Hero Section -->
 <section class="hero-section">
        <div class="tech-icons">
            <img src="assets/images/react 2.svg" alt="React" loading="lazy">
            <img src="assets/images/php 2.svg" alt="PHP" loading="lazy">
            <img src="assets/images/js 2.svg" alt="JavaScript" loading="lazy">
            <img src="assets/images/figma 2.svg" alt="Figma" loading="lazy">
        </div>
        <div class="container">
            <div class="section-label">What we do</div>
            <h1>We evolve ideas into intelligent digital products.</h1>
            <p>Industry dummy ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <a href="#contact" class="btn">Let's plan your project</a>
        </div>
    </section>
    
<!-- Main Content Section for Contact Us Page -->
<section class="contact-section">
    <div class="container">
        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Get in Touch</h2>
            <div class="section-divider"></div>
            <p class="section-subtitle">We’d love to hear from you. Fill out the form below.</p>
        </div>

        <!-- Two-Column Layout -->
        <div class="contact-grid">
            <!-- Left Column: Contact Information -->
            <div class="contact-info">
                <h3 class="info-title">Contact Information</h3>
                <div class="info-item">
                    <span class="info-icon">📍</span>
                    <div>
                        <p class="info-label">Address</p>
                        <p class="info-text">123 Business Street, Suite 456<br>City, State, 12345</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">📞</span>
                    <div>
                        <p class="info-label">Phone</p>
                        <p class="info-text">+1 (555) 123-4567</p>
                    </div>
                </div>
                <div class="info-item">
                    <span class="info-icon">✉️</span>
                    <div>
                        <p class="info-label">Email</p>
                        <p class="info-text">contact@volvrit.com</p>
                    </div>
                </div>
            </div>

            <!-- Right Column: Contact Form -->
            <div class="contact-form">
                <form action="submit_contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject</label>
                        <input type="text" id="subject" name="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="form-submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'home_faq.php'; ?>
<?php
// Include footer
require_once 'includes/footer.php';
?>
