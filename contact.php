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
        font-family: 'Roboto', sans-serif;
    }

    body {
        background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');
        line-height: 1.6;
        color: #333;
    }


    /* Hero Section */
    .hero-section {
        position: relative;
        min-height: 600px;
        background: url('assets/images/contact_hero.jpg') center/cover no-repeat;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
        padding: 120px 5% 80px;
        padding-left: max(5%, calc((100% - 1200px) / 2));
    }

    .hero-section h1 {
        font-family: 'Poppins', sans-serif;
        font-size: clamp(2rem, 5vw, 3.5rem);
        font-weight: 700;
        line-height: 1.2;
        color: #2563EB;
        margin: 0 0 1.5rem 0;
        max-width: 800px;
        width: 100%;
    }

    .hero-section p {
        font-size: clamp(0.875rem, 2vw, 1.125rem);
        color: #4B5563;
        margin: 0 0 2.5rem 0;
        max-width: 600px;
        width: 100%;
    }

    .btn {
        background-color: #2563EB;
        color: white;
        padding: 0.75rem 1.75rem;
        border-radius: 1.5rem;
        font-weight: 500;
        font-size: 1rem;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        display: inline-flex;
        align-items: center;
        gap: 0.625rem;
    }

    .btn:hover {
        background-color: #1D4ED8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }

    .btn-icon {
        width: 1.25rem;
        height: 1.25rem;
    }

   

    /* Contact Form Styling */
    .contact-section {
        padding: 5rem 0;
        background-color: #fff;
    }

    .contact-form-container {
        max-width: 75rem;
        margin: 0 auto;
        padding: 0 2.5rem;
    }

    .contact-form {
        background: #fff;
        width: 100%;
        max-width: 37.5rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-group label {
        display: block;
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        font-weight: 500;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group textarea,
    .form-group select {
        width: 100%;
        padding: 12px 16px;
        border: 1px solid #D1D5DB;
        border-radius: 8px;
        font-size: 16px;
        font-family: 'Roboto', sans-serif;
      /*  color: #111827;*/
        background-color: transparent;
        transition: border-color 0.3s, box-shadow 0.3s;
    }

    .form-group textarea {
        min-height: 7.5rem;
        resize: vertical;
    }

    .form-group input:focus,
    .form-group textarea:focus,
    .form-group select:focus {
        outline: none;
        border-color: #3B82F6;
        box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        background-color: transparent;
    }

    .form-submit-btn {
        background: #2563eb;
        color: white;
        padding: 0.75rem 1.75rem;
        border: none;
        border-radius: 0.5rem;
        font-family: 'Roboto', sans-serif;
        font-size: 1rem;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .form-submit-btn:hover {
        background: #1d4ed8;
        transform: translateY(-2px);
        box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-section {
            min-height: 500px;
            padding: 6.25rem 5% 3.75rem;
        }
        
       
    }

    @media (max-width: 768px) {
        .hero-section {
            min-height: 450px;
            padding: 5rem 1.25rem 2.5rem;
            text-align: center;
            align-items: center;
        }

        
        .hero-section h1,
        .hero-section p {
            text-align: center;
            max-width: 90%;
        }
        
        .tech-icons {
            position: relative;
            width: 100%;
            right: 0;
            flex-direction: row;
            justify-content: center;
            margin-top: 1.875rem;
            opacity: 0.6;
        }

        .contact-form-container {
            padding: 0 1.5rem;
        }
        
        .contact-form {
            padding: 1.25rem;
            margin: 0 auto;
        }
        
        .form-group {
            margin-bottom: 1.25rem;
        }
    }
    
    @media (max-width: 480px) {
        .hero-section h1 {
            font-size: 2rem;
        }
        
        .btn,
        .form-submit-btn {
            width: 100%;
            justify-content: center;
        }
    }
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
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        width: 20px;
        height: 20px;
        min-width: 20px;
        min-height: 20px;
        border: 2px solid #D1D5DB;
        border-radius: 50%;
        margin-right: 8px;
        position: relative;
        top: 4px;
        cursor: pointer;
        transition: all 0.2s ease;
        padding: 0;
        flex-shrink: 0;
    }

    .service-option input[type="radio"]:checked::before {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 10px;
        height: 10px;
        background-color: #3B82F6;
        border-radius: 50%;
        box-sizing: border-box;
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
<style>
/* Scrolling Text Styles */
.scrolling-text-section {
    background-color: #2563EB;
    height: 50px;
    overflow: hidden;
    position: relative;
    width: 100%;
    z-index: 1000;
}

.scrolling-text-container {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
}

.scrolling-text {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    white-space: nowrap;
    will-change: transform;
    display: inline-block;
    padding: 0;
    animation: scroll-left 20s linear infinite;
    animation-play-state: running;
    opacity: 1 !important;
    visibility: visible !important;
    min-width: 100%;
}

.scrolling-text.paused {
    animation-play-state: paused;
}

.scrolling-text .text-segment {
    color: white !important;
    font-size: 18px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    line-height: 1;
    white-space: nowrap;
    display: inline-block;
    padding: 0 40px;
    position: relative;
}

@keyframes scroll-left {
    0% {
        transform: translateX(0) translateY(-50%);
    }
    100% {
        transform: translateX(-33.33%) translateY(-50%);
    }
}

/* Responsive styles */
@media (max-width: 768px) {
    .scrolling-text-section {
        height: 40px;
    }
    
    .scrolling-text span {
        font-size: 14px;
        padding: 0 20px;
    }
}

@media (max-width: 480px) {
    .scrolling-text-section {
        height: 35px;
    }
    
    .scrolling-text span {
        font-size: 12px;
        padding: 0 15px;
    }
}
</style>

<script src="js/scrolling-text.js"></script>

<style>
/* Scrolling Text Styles */
.scrolling-text-section {
    background-color: #2563EB;
    overflow: hidden;
    position: relative;
    height: 50px;
    width: 100%;
    z-index: 10;
}

.scrolling-text-container {
    width: 100%;
    height: 100%;
    overflow: hidden;
    position: relative;
}

.scrolling-text-wrapper {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
}

.scrolling-text {
    display: inline-flex;
    white-space: nowrap;
    position: absolute;
    left: 0;
    top: 0;
    height: 100%;
    align-items: center;
    padding: 0;
    margin: 0;
    animation: scroll-left 20s linear infinite;
    will-change: transform;
}

.scrolling-text.paused {
    animation-play-state: paused;
}

.scrolling-text span {
    color: white;
    font-size: 18px;
    font-weight: 500;
    font-family: 'Poppins', sans-serif;
    text-transform: uppercase;
    letter-spacing: 1px;
    white-space: nowrap;
    padding: 0 40px;
    line-height: 1;
    display: inline-block;
}

@keyframes scroll-left {
    0% {
        transform: translateX(100%);
    }
    100% {
        transform: translateX(-100%);
    }
}

/* Responsive styles */
@media (max-width: 768px) {
    .scrolling-text-section {
        height: 40px;
    }
    
    .scrolling-text span {
        font-size: 14px;
        padding: 0 20px;
    }
}

@media (max-width: 480px) {
    .scrolling-text-section {
        height: 35px;
    }
    
    .scrolling-text span {
        font-size: 12px;
        padding: 0 15px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize scrolling text
    const scrollingText = document.querySelector('.scrolling-text');
    const container = document.querySelector('.scrolling-text-container');
    
    if (!scrollingText || !container) return;
    
    // Create a clone of the text for seamless looping
    const textContent = scrollingText.innerHTML;
    scrollingText.innerHTML = textContent + ' ' + textContent; // Duplicate content for seamless loop
    
    // Pause on hover
    container.addEventListener('mouseenter', () => {
        scrollingText.classList.add('paused');
    });
    
    container.addEventListener('mouseleave', () => {
        scrollingText.classList.remove('paused');
    });
    
    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            // Force reflow to reset animation
            scrollingText.style.animation = 'none';
            scrollingText.offsetHeight; // Trigger reflow
            scrollingText.style.animation = 'scroll-left 20s linear infinite';
        }, 100);
    });
});
</script>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <h1>Let’s Build Something Exceptional Together</h1>
        <p>Whether you're a startup seeking a technology partner, an enterprise looking to scale your systems, or a brand aiming to grow online—Evolvix is here to help you take the next step.</p>
        <a href="#contact" class="btn">
            <img src="assets/images/fluent_handshake-20-filled.svg" alt="Handshake" class="btn-icon">
            <span>Let's plan your project</span>
        </a>
    </div>
</section>
<!-- Scrolling Text Section -->
<section>
<div class="scrolling-text-section">
    <div class="scrolling-text-container">
        <div class="scrolling-text">
            <span class="text-segment">Transforming ideas into powerful digital growth</span>
            <span class="text-segment" aria-hidden="true">Transforming ideas into powerful digital growth</span>
            <span class="text-segment" aria-hidden="true">Transforming ideas into powerful digital growth</span>
        </div>
    </div>
</div>
</section>
    <!-- Get in Touch section -->
    <section>
    <div class="container" style="margin-top: 80px;">
            <div class="offer-tag">
                <span class="offer-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#28A745"/>
                    </svg>
                </span>
                <span class="offer-text">Get in touch</span>
            </div>
            <h2 class="section-title" style="margin-top: 16px">
            Let’s Build Something Exceptional Together
            </h2>
            
                    <div>
                        <p class="item-text">Whether you're a startup seeking a technology partner, an enterprise looking to scale your systems, or a brand aiming to grow online—Evolvix is here to help you take the next step. Based in New York, we work with clients across the United States and beyond, offering tailored IT and Digital Marketing solutions that bring your vision to life. Let’s connect and craft something impactful, together.</p>

                    </div>
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
                    <span class="offer-text">What you get</span>
                </div>
            </li>
            <div>
                <h3 class="item-title">
                    <span class="title-line">How Can We Help You?</span>
                </h3>
                <p class="item-text">Have a project idea?</p>
                <p class="item-text">Need help scaling your marketing efforts? </p>
                <p class="item-text">Want expert input on your technology roadmap?</p>
                <div>
                    <p class="item-text">Our team is here to provide expert consultation, technical insights, and customized solutions — no matter where you are in your journey.</p>
                </div>
            </div>
        </ul>
    </div>
</section>

<!-- Contact Form Section -->
<section class="section contact-section">
    <div class="contact-section-inner">
        <div class="contact-form-container">
    <div class="offer-tag">
                <span class="offer-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#28A745"/>
                    </svg>
                </span>
                <span class="offer-text">Contact Us </span>
            </div>
            <h2 class="section-title" style="margin-top: 16px">
            Let’s Get Started
            </h2>
            
                    <div>
                        <p class="item-text">Use the form below to tell us more about your needs, and our team will reach out within 24 hours.</p>

                    </div>
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
        <div class="contact-image-container">
            <img src="assets/images/contact_form_img.png" alt="Contact Us" class="contact-image">
        </div>
    </div>
</section>

<!-- Floating WhatsApp Button -->
<a href="#" id="floating-whatsapp" class="floating-whatsapp" data-phone="15167791394">
    <i class="fab fa-whatsapp"></i>
</a>

<style>
    /* Section Styles */
    .section {
        padding: 60px 0;
        background-color: rgba(255, 255, 255, 0.9);
        position: relative;
        z-index: 1;
    }
    
    .contact-section-inner {
        display: flex;
        flex-wrap: nowrap;
        max-width: 1200px;
        margin: 0 auto;
        /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1); */
        border-radius: 12px;
        overflow: hidden;
        align-items: stretch;
    }
    
    .contact-form-container {
        flex: 1;
        min-width: 300px;
        padding: 40px;
        background: #fff;
    }
    
    .contact-image-container {
        flex: 1;
        min-width: 300px;
      /*  background: #f8f9fa; */
        display: flex;
        align-items: stretch;
        justify-content: center;
        overflow: hidden;
    }
    
    .contact-image {
        width: 100%;
        height: auto;
        object-fit: contain;
        object-position: center;
        display: block;
    }
    
    @media (max-width: 768px) {
        .contact-section-inner {
            flex-direction: column;
        }
        
        .contact-image-container {
            height: 300px;
            order: -1;
        }
        
        .contact-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
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
                const whatsappUrl = `https://wa.me/${cleanNumber}?text=Hey%20Evolvix%2C%20I%20have%20a%20question`;
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
