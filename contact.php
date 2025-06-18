<?php
// Include header
$page_title = 'Contact Us - Volvrit';
require_once 'includes/header.php';
?>

<style>
    /* Import Roboto and Poppins fonts */
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Arial', sans-serif;
        background-repeat: repeat;
        background-size: auto;
    }

    body {
        background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');
    }

    /* Hero Section */
    .hero-section {
        position: relative;
        height: 80vh;
        min-height: 600px;
        background: linear-gradient(
                to bottom,
                rgba(255, 255, 255, 0.9) 0%,
                rgba(255, 255, 255, 0.8) 100%
            ),
            url('assets/images/about_usbg.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        text-align: left;
        padding: 120px 0 80px;
        padding-left: max(5%, calc((100% - 1200px) / 2));
        padding-right: 5%;
        overflow: hidden;
    }

    .hero-section h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 56px;
        font-weight: 700;
        line-height: 1.2;
        color: #2563EB;
        margin: 0 0 24px 0;
        max-width: 800px;
        z-index: 2;
        text-align: left;
        width: 100%;
    }

    .hero-section p {
        font-size: 18px;
        color: #4B5563;
        line-height: 1.6;
        margin: 0 0 40px 0;
        max-width: 600px;
        z-index: 2;
        text-align: left;
        width: 100%;
    }

    .hero-section .btn {
        z-index: 2;
        background-color: #2563EB;
        color: white;
        padding: 12px 28px;
        border-radius: 24px;
        font-weight: 500;
        font-size: 18px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 10px;
    }

    .hero-section .btn-icon {
        width: 20px;
        height: 20px;
    }

    .hero-section .btn:hover {
        background-color: #1D4ED8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }

    .tech-icons {
        position: absolute;
        width: 40%;
        height: 100%;
        top: 0;
        right: 5%;
        pointer-events: none;
        z-index: 1;
        opacity: 0.8;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-end;
        gap: 20px;
    }

    .tech-icons img {
        position: relative;
        width: 100px;
        height: 100px;
        object-fit: contain;
        transition: all 0.4s ease;
        margin: 10px 0;
    }

    /* Responsive adjustments for tech icons */
    @media (max-width: 1024px) {
        .tech-icons {
            width: 50%;
            right: 2%;
        }
        .tech-icons img {
            width: 80px;
            height: 80px;
        }
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-section {
            height: 70vh;
            min-height: 500px;
            padding: 100px 5% 60px;
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
    }

    @media (max-width: 768px) {
        .hero-section {
            height: auto;
            min-height: 450px;
            padding: 80px 0 40px;
            padding-left: max(5%, calc((100% - 1200px) / 2));
            padding-right: 5%;
            text-align: center;
            align-items: center;
        }
        .hero-section h1,
        .hero-section p {
            text-align: center;
        }
        .tech-icons {
            position: relative;
            width: 100%;
            right: 0;
            flex-direction: row;
            justify-content: center;
            margin-top: 30px;
            opacity: 0.6;
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
    }

    /* Contact Form Styling */
    .contact-section {
        padding: 80px 0;
        background-color: #fff;
    }

    .contact-form-container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 40px;
        display: flex;
        justify-content: flex-start;
    }

    .contact-form {
        background: #fff;
        width: 100%;
        max-width: 600px;
        margin: 0;
        padding: 0;
    }

    .form-group {
        margin-bottom: 24px;
        text-align: left;
    }

    .form-group label {
        display: block;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 500;
        color: #333;
        margin-bottom: 8px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        color: #111827;
        background: #f9fafb;
        transition: border-color 0.2s;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #2563eb;
        background: #fff;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
    }

    .form-submit-btn {
        background: #2563eb;
        color: white;
        border: none;
        border-radius: 8px;
        padding: 12px 28px;
        font-family: 'Roboto', sans-serif;
        font-size: 16px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s;
    }

    .form-submit-btn:hover {
        background: #1d4ed8;
        transform: translateY(-1px);
    }

    @media (max-width: 768px) {
        .contact-form-container {
            padding: 0 24px;
        }

        .form-group {
            margin-bottom: 20px;
        }
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
    @media (max-width: 768px) {
        .contact-form {
            padding: 20px;
            margin: 0 15px;
        }

        .form-group input,
        .form-group textarea {
            font-size: 14px;
        }

        .form-group label {
            font-size: 14px;
        }

        .form-submit-btn {
            font-size: 14px;
            padding: 10px 20px;
        }
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

        .tech-icons img:nth-child(1) {
            top: 10%;
            left: 5%;
        }

        .tech-icons img:nth-child(2) {
            top: 15%;
            right: 5%;
        }

        .tech-icons img:nth-child(3) {
            bottom: 15%;
            left: 5%;
        }

        .tech-icons img:nth-child(4) {
            bottom: 10%;
            right: 5%;
        }
    }

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

    /* Map Container Styles */
    .map-container {
        position: relative;
        width: 100%;
        height: 100%;
        min-height: 500px;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    #map {
        width: 100%;
        height: 100%;
        min-height: 500px;
        border: none;
    }

    .map-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255, 255, 255, 0.95);
        padding: 20px;
        border-top: 1px solid #e5e7eb;
    }

    .map-overlay .info-title {
        color: #1f2937;
        font-size: 1.25rem;
        margin-bottom: 15px;
        font-weight: 600;
    }

    .map-overlay .info-item {
        display: flex;
        align-items: center;
        margin-bottom: 12px;
    }

    .map-overlay .info-icon {
        margin-right: 12px;
        font-size: 1.1rem;
    }

    .map-overlay .info-text {
        color: #4b5563;
        font-size: 0.95rem;
        line-height: 1.5;
        margin: 0;
    }

    @media (max-width: 768px) {
        .map-container {
            min-height: 400px;
        }

        #map {
            min-height: 300px;
        }

        .map-overlay {
            position: relative;
            padding: 15px;
        }
    }

    /* Services Grid */
    .form-group {
        background: #f9f9f9;
        padding: 10px;
    }

    .services-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        max-width: 400px;
    }

    .service-option {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 12px;
    }

    .service-option input[type="radio"] {
        margin: 0 0 0 12px;
        width: 16px;
        height: 16px;
        accent-color: #007bff;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        border: 2px solid #007bff;
        border-radius: 50%;
        outline: none;
        cursor: pointer;
        position: relative;
        flex-shrink: 0;
    }

    .service-option input[type="radio"]:checked::before {
        content: '';
        position: absolute;
        width: 8px;
        height: 8px;
        background-color: #007bff;
        border-radius: 50%;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .service-option label {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 30px;
        letter-spacing: 0%;
        color: #333;
        cursor: pointer;
        margin: 0;
        padding: 4px 0;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .services-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 576px) {
        .services-grid {
            grid-template-columns: 1fr;
        }
    }
</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="tech-icons">
        <img src="assets/images/react 2.svg" alt="React" loading="lazy">
        <img src="assets/images/php 2.svg" alt="PHP" loading="lazy">
        <img src="assets/images/js 2.svg" alt="JavaScript" loading="lazy">
        <img src="assets/images/figma 2.svg" alt="Figma" loading="lazy">
        <img src="assets/images/chatgpt 3.svg" alt="ChatGpt" loading="lazy">
    </div>
    <div class="container">
        <h1>We evolve ideas into intelligent digital products.</h1>
        <p>Industry dummy ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <a href="#contact" class="btn">
            <img src="assets/images/fluent_handshake-20-filled.svg" alt="Handshake" class="btn-icon">
            <span>Let's plan your project</span>
        </a>
    </div>
</section>
<section class="section">
    <div class="container">
        <ul class="intro-list">
            <li class="intro-item">
                <div class="offer-tag">
                    <span class="offer-icon">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#28A745"/>
                        </svg>
                    </span>
                    <span class="offer-text">What we offer</span>
                </div>
            </li>
            <div>
                <h3 class="item-title">
                    <span class="title-line">We Develop</span>
                    <span class="subtitle-line">Robust, responsive, and ready to scale.</span>
                </h3>
                <p class="item-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                <ul class="sub-list">
                    <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                    <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                    <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                </ul>
            </div>
        </ul>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section contact-section">
    <div class="contact-form-container">
        <form action="submit_contact.php" method="POST" class="contact-form">
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

            <div class="form-group">
                <label style="font-size: 16px; font-weight: 500; color: #111827; margin-bottom: 12px; display: block;">Services</label>
                <div class="services-grid">
                    <div class="service-option">
                        <label for="web-dev">Web Development</label>
                        <input type="radio" id="web-dev" name="service_type" value="Web Development">
                    </div>
                    <div class="service-option">
                        <label for="app-dev">App Development</label>
                        <input type="radio" id="app-dev" name="service_type" value="App Development">
                    </div>
                    <div class="service-option">
                        <label for="blockchain">Blockchain Development</label>
                        <input type="radio" id="blockchain" name="service_type" value="Blockchain Development">
                    </div>
                    <div class="service-option">
                        <label for="ui-ux">UI/UX Design</label>
                        <input type="radio" id="ui-ux" name="service_type" value="UI/UX Design">
                    </div>
                    <div class="service-option">
                        <label for="api">API Development</label>
                        <input type="radio" id="api" name="service_type" value="API Development">
                    </div>
                    <div class="service-option">
                        <label for="ai-dev">AI Development</label>
                        <input type="radio" id="ai-dev" name="service_type" value="AI Development">
                    </div>
                </div>
            </div>

            <div class="form-group" style="margin-top: 8px;">
                <button type="submit" class="form-submit-btn">Send Message</button>
            </div>
        </form>
    </div>
</section>

<!-- Floating WhatsApp Button -->
<a href="#" id="floating-whatsapp" class="floating-whatsapp" data-phone="15167791394">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    /* Section Styles */
    .section {
        padding: 60px 20px;
        background-color: rgba(255, 255, 255, 0.9);
        position: relative;
        z-index: 1;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .intro-list {
        list-style: none;
    }

    .intro-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 30px;
    }

    .offer-tag {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #F3F4F6;
        border-radius: 20px;
        padding: 8px 16px;
        width: fit-content;
        margin-bottom: 20px;
        box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
    }

    .offer-icon {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 20px;
        height: 20px;
    }

    .offer-icon svg {
        width: 16px;
        height: 16px;
    }

    .offer-text {
        white-space: nowrap;
        letter-spacing: 0.01em;
    }

    .item-title {
        display: flex;
        flex-direction: column;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 30px;
        line-height: 1.4;
        color: #000000;
        margin-bottom: 16px;
    }

    .title-line {
        color: #000;
    }

    .subtitle-line {
        background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        display: block;
        margin-top: -8px;
    }

    .item-text {
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 20px;
        line-height: 36px;
        letter-spacing: 0;
        color: #959595;
        margin-bottom: 16px;
    }

    .sub-list {
        list-style-type: none;
        padding-left: 0;
        margin-top: 16px;
    }

    .sub-list li {
        position: relative;
        padding-left: 32px;
        margin-bottom: 8px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 20px;
        line-height: 36px;
        letter-spacing: 0;
        color: #959595;
    }

    .sub-list li:before {
        content: '•';
        color: #2563EB;
        font-size: 24px;
        position: absolute;
        left: 8px;
        top: 0;
        line-height: 36px;
    }

    /* Floating WhatsApp Button Styles */
    .floating-whatsapp {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        color: white;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .floating-whatsapp i {
        margin-top: 3px;
    }

    .floating-whatsapp:hover {
        background-color: #128C7E;
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .floating-whatsapp {
            width: 50px;
            height: 50px;
            font-size: 26px;
            bottom: 20px;
            right: 20px;
        }
    }
</style>

<!-- Font Awesome for WhatsApp icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
    // Initialize floating WhatsApp button
    document.addEventListener('DOMContentLoaded', function() {
        const whatsappBtn = document.getElementById('floating-whatsapp');
        if (whatsappBtn) {
            // Get the phone number from data-phone attribute
            const phoneNumber = whatsappBtn.getAttribute('data-phone');
            if (phoneNumber) {
                // Clean the phone number (remove any non-numeric characters)
                const cleanNumber = phoneNumber.replace(/\D/g, '');
                // Create the WhatsApp URL with the cleaned number
                const whatsappUrl = `https://wa.me/${cleanNumber}?text=Hello%20Volvrit%2C%20I%20have%20a%20question`;
                // Set the href attribute
                whatsappBtn.href = whatsappUrl;
                // For debugging - you can remove this in production
                console.log('WhatsApp URL:', whatsappUrl);

                // Add click event for smooth scroll before redirect
                whatsappBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Small delay to allow any animations to complete
                    setTimeout(() => {
                        window.location.href = whatsappUrl;
                    }, 100);
                });
            }
        }
    });
</script>

<?php include 'home_faq.php'; ?>
<?php
// Include footer
require_once 'includes/footer.php';
?>
