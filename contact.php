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
         /*   background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');*/
            background-repeat: repeat;
            background-size: auto;
        }

        body {
            /* Background styles are inherited from universal selector */
            background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');
        }

        /* Import Poppins font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
    /* Hero Section Styling */
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
</style>

<!-- Google Maps API -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>

<!-- Initialize Google Map -->
<script>
    function initMap() {
        // Coordinates for the map center (using the provided coordinates)
        const location = { lat: 28.658206, lng: 77.144194 };
        
        // Create a map centered at the specified location
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.stroke",
                    "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
                },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f5f5f5"}, {"lightness": 20}]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f5f5f5"}, {"lightness": 21}]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{"color": "#dedede"}, {"lightness": 21}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 17}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 18}]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{"color": "#ffffff"}, {"lightness": 16}]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{"color": "#f2f2f2"}, {"lightness": 19}]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [{"color": "#e9e9e9"}, {"lightness": 17}]
                }
            ]
        });

        // Add a marker at the specified location
        new google.maps.Marker({
            position: location,
            map: map,
            title: 'Our Office',
            icon: {
                url: 'https://maps.google.com/mapfiles/ms/icons/red-dot.png',
                scaledSize: new google.maps.Size(40, 40)
            }
        });
    }
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (typeof map !== 'undefined') {
            google.maps.event.trigger(map, 'resize');
        }
    });
</script>

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
        <div class="section-label">What we do</div>
        <h1>We evolve ideas into intelligent digital products.</h1>
        <p>Industry dummy ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
        <a href="#contact" class="btn">
            <img src="assets/images/fluent_handshake-20-filled.svg" alt="Handshake" class="btn-icon">
            <span>Let's plan your project</span>
        </a>
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
            <!-- Left Column: Map Container -->
            <div class="map-container">
                <div id="map"></div>
                <div class="map-overlay">
                    <h3 class="info-title">Our Location</h3>
                    <div class="info-item">
                        <span class="info-icon">📍</span>
                        <div>
                            <p class="info-text">123 Business Street, Suite 456<br>City, State, 12345</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">📞</span>
                        <div>
                            <p class="info-text">+1 (555) 123-4567</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <span class="info-icon">✉️</span>
                        <div>
                            <p class="info-text">contact@volvrit.com</p>
                        </div>
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

<!-- Floating WhatsApp Button -->
<a href="#" id="floating-whatsapp" class="floating-whatsapp" data-phone="15167791394">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
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
<!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">-->

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
