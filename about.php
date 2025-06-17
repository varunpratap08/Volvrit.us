<?php
// Include header
$page_title = 'About Us - Volvrit';
require_once 'includes/header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us Page - Volvrit</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
          /*  background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');*/
            background-repeat: repeat;
            background-size: auto;
        }

        body {
            /* Background styles are inherited from universal selector */
           /* background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');
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

            .tech-icons img {
                width: 80px;
                height: 80px;
                opacity: 0.6;
            }

            .tech-icons img:nth-child(1) { top: 10%; left: 5%; }
            .tech-icons img:nth-child(2) { top: 15%; right: 5%; }
            .tech-icons img:nth-child(3) { bottom: 15%; left: 5%; }
            .tech-icons img:nth-child(4) { bottom: 10%; right: 5%; }
        }

        @media (max-width: 480px) {
            .hero-section {
                height: auto;
                min-height: 400px;
                padding: 60px 0 30px;
                padding-left: max(5%, calc((100% - 1200px) / 2));
                padding-right: 5%;
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

        /* Main Content Sections with Grid Background */
        .content-section {
            background: url('https://www.transparenttextures.com/patterns/grid-me.png') repeat;
            padding: 60px 20px;
        }

        .content-section .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .content-section h2 {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
        }

        .content-section h2 span {
            color: #007bff;
        }

        .content-section p {
            font-size: 16px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }

        .two-column {
            display: flex;
            gap: 40px;
            margin-bottom: 60px;
        }

        .two-column .text {
            flex: 1;
        }

        .two-column .image-placeholder {
            flex: 1;
            background: #e0e0e0;
            height: 300px;
            border-radius: 10px;
        }

        /* Label Styling for "What we believe" */
        .label {
            display: flex;
            align-items: center;
            font-size: 14px;
            color: #28a745; /* Green color */
            margin-bottom: 10px;
        }

        .label::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #28a745;
            border-radius: 50%;
            margin-right: 8px;
        }

       /* What We Believe Styling */
       .what-we-believe {
            margin-bottom: 60px;
        }

        /* Label Styling for "What we believe" */
        .label {
            display: flex;
            align-items: center;
            font-size: 14px;
            font-weight: 600;
            color: #28a745; /* Green color */
            margin-bottom: 15px;
        }

        .label::before {
            content: '';
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #28a745;
            border-radius: 50%;
            margin-right: 8px;
        }

        /* Heading and Paragraph Styling */
        .what-we-believe h2 {
            font-size: 36px;
            font-weight: 700;
            color: #333;
            margin-bottom: 20px;
        }

        .what-we-believe h2 span {
            color: #007bff; /* Blue color for the span */
        }

        .what-we-believe p {
            font-size: 16px;
            color: #666;
            
        /* About Label Styling */
        .about-label {
            display: inline-flex;
            align-items: center;
            padding: 8px 20px;
            border: 1px solid #e0e0e0; /* Gray outline */
            border-radius: 24px;
            font-size: 14px;
            font-weight: 500;
            color: #959595;
            margin-bottom: 20px;
            background-color: #ffffff;
            position: relative;
            z-index: 1;
        }
        
        .about-label svg {
            margin-right: 8px;
        }
        
        .about-label-icon {
            margin-right: 8px;
            width: 16px;
            height: 16px;
        }
        
        .gradient-text {
            background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            color: transparent;
            margin-top: -20px;  /* Reduced from -10px to -20px to decrease the gap */
            margin-bottom: 20px;
            font-size: 30px;
            font-weight: 600;
            line-height: 44px;
            display: block
        }
        
        .what-we-believe h2 {
            margin-bottom: 0;
        }
            line-height: 1.6;
            margin-bottom: 30px;
            max-width: 600px;
        }

        /* Stair-Like Cards */
        .stair-cards {
            display: flex;
            position: relative;
            justify-content: center;
            align-items: flex-end;
            min-height: 400px; /* Increased to accommodate taller cards */
            margin: 20px 0;
        }

        .stair-card {
            position: absolute;
            width: 400px; /* Fixed width for all cards */
            padding: 25px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
          /*  box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);*/
            transition: all 0.3s ease;
            box-sizing: border-box;
        }
        
        /* Remove right border and add right padding to create joined effect */
        .stair-card:not(:last-child) {
            border-right: none;
            padding-right: 30px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
        
        /* Add left border radius to next card to create joined effect */
        .stair-card + .stair-card {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        .stair-card h3 {
            font-size: 20px;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }

        .stair-card p {
            font-size: 14px;
            color: #666;
            line-height: 1.5;
        }

        /* Stair-Like Positioning with Increasing Heights */
        .stair-card:nth-child(1) {
            height: 300px;
            transform: translateX(0px);
            z-index: 1;
        }

        .stair-card:nth-child(2) {
            height: 360px;
            transform: translateX(200px);
            z-index: 2;
        }

        .stair-card:nth-child(3) {
            height: 420px;
            transform: translateX(400px);
            z-index: 3;
        }

        .stair-card:nth-child(4) {
            height: 360px;
            transform: translateX(600px);
            z-index: 4;
        }
        /* Features Section */
        .features-section {
            display: flex;
            gap: 20px;
            margin-top: 40px;
        }

        .feature-card {
            flex: 1;
            padding: 20px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 10px;
            text-align: center;
        }

        .feature-card h3 {
            font-size: 18px;
            color: #333;
            margin: 10px 0;
        }

        .feature-card p {
            font-size: 14px;
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
        
            .content-section {
                padding: 40px 15px;
            }

            .content-section .container {
                max-width: 960px;
            }

            .content-section h2 {
                font-size: 32px;
            }

            .two-column {
                gap: 30px;
            }

            

            .features-section {
                gap: 15px;
            }
        }

        /* Intro Section with Scrolling Text */
        /* Scrolling Text Section */
        .intro-section {
            background-color: #2563EB;
            overflow: hidden;
            position: relative;
            height: 60px;
            display: flex;
            align-items: center;
        }

        .scrolling-text-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 100%;
        }

        .scrolling-text-wrapper {
            display: flex;
            width: 100%;
            height: 100%;
            align-items: center;
            position: absolute;
            top: 0;
            left: 0;
        }

        /* Content Text Section Styles */
        .content-text-section {
            padding: 40px 0 50px;  /* Reduced top and bottom padding */
            background-color: #ffffff;
            margin-top: -20px;  /* Pull the section up slightly */
        }
        
        .content-text {
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            font-size: 42px;  /* Increased from 38px */
            line-height: 1.4;  /* Changed to a relative line height */
            letter-spacing: 0%;
            text-align: center;
            color: #333333;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 30px;  /* Increased side padding */
        }
        
        @media (max-width: 1200px) {
            .content-text {
                font-size: 38px;
                padding: 0 25px;
            }
        }
        
        @media (max-width: 1024px) {
            .content-text {
                font-size: 34px;
                line-height: 1.4;
                padding: 0 20px;
            }
        }
        
        @media (max-width: 768px) {
            .content-text-section {
                padding: 30px 0 40px;
            }
            .content-text {
                font-size: 30px;
                line-height: 1.4;
                padding: 0 20px;
            }
        }
        
        @media (max-width: 480px) {
            .content-text-section {
                padding: 25px 0 35px;
            }
            .content-text {
                font-size: 26px;
                line-height: 1.4;
                padding: 0 15px;
            }
        }
        
        .scrolling-text {
            display: flex;
            white-space: nowrap;
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            align-items: center;
            padding: 0 20px;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 18px;
            animation: scroll-left 30s linear infinite;
        }
        
        .scrolling-text span {
            padding-right: 50px;
            display: inline-block;
        }

        @keyframes scroll-left {
            0% { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }
        
        @media (max-width: 768px) {
            .scrolling-text {
                font-size: 16px;
                padding: 0 15px;
            }
            
            .scrolling-text span {
                padding-right: 30px;
            }
        }
        
        @media (max-width: 480px) {
            .scrolling-text {
                font-size: 14px;
                padding: 0 10px;
            }
            
            .scrolling-text span {
                padding-right: 20px;
            }
        }

        @media (max-width: 768px) {
            .content-section {
                padding: 30px 10px;
            }

            .content-section h2 {
                font-size: 28px;
            }

            .content-section p {
                font-size: 14px;
            }

            .two-column {
                flex-direction: column;
                gap: 20px;
            }

            .two-column .image-placeholder {
                height: 200px;
            }

           
            .features-section {
                flex-direction: column;
                gap: 15px;
            }

            .feature-card {
                width: 100%;
                max-width: 300px;
                margin: 0 auto;
            }
        }

        @media (max-width: 480px) {
            .content-section h2 {
                font-size: 24px;
            }

            .content-section p {
                font-size: 12px;
            }
            /* Responsive Design  for what we believe */
        @media (max-width: 1024px) {
            .content-section {
                padding: 40px 15px;
            }

            .content-section .container {
                max-width: 960px;
            }

            .what-we-believe h2 {
                font-size: 32px;
            }

            .what-we-believe p {
                font-size: 15px;
                max-width: 500px;
            }

            .stair-card {
                min-width: 220px;
                max-width: 250px;
            }

            .stair-cards {
                flex-direction: column;
                align-items: center;
                min-height: auto;
                margin: 40px 0;
            }

            .stair-card {
                position: relative;
                width: 90%;
                max-width: 400px;
                height: auto !important;
                min-height: 120px;
                margin: 10px 0;
                transform: none !important;
                border: 1px solid #ddd !important;
                border-radius: 10px !important;
                padding: 20px !important;
            }
            
            .stair-card:not(:last-child) {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .content-section {
                padding: 30px 10px;
            }

            .what-we-believe h2 {
                font-size: 28px;
            }

            .what-we-believe p {
                font-size: 14px;
                max-width: 90%;
            }

            /* Stack stair cards vertically on mobile */
            .stair-cards {
                flex-direction: column;
                align-items: center;
            }

            .stair-card {
                transform: none !important; /* Remove stair effect on mobile */
                margin: 0 auto;
                min-width: 280px;
                max-width: 90%;
            }
        }

        @media (max-width: 480px) {
            .content-section {
                padding: 20px 10px;
            }

            .what-we-believe h2 {
                font-size: 24px;
            }

            .what-we-believe p {
                font-size: 12px;
            }

            .stair-card h3 {
                font-size: 18px;
            }

            .stair-card p {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
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
            <h1>We evolve ideas into Intelligent digital products.</h1>
            <p>Industry dummy ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <a href="contact.php" class="btn">
            <img src="assets/images/fluent_handshake-20-filled.svg" alt="Handshake" class="btn-icon">
            <span>Let's plan your project</span>
            </a>
        </div>
    </section>
    
    <!-- Scrolling Text Section -->
    <section class="intro-section">
        <div class="scrolling-text-container">
            <div class="scrolling-text-wrapper">
                <div class="scrolling-text">
                    <span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
                </div>
            </div>
        </div>
    </section>
    <section class="content-text-section">
        <div class="container">
            <p class="content-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="content-section">
        <div class="container">
            <div class="what-we-believe">
                <div class="about-label">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                        <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Who we are</span>
                </div>
                <h2><span style="color: black;">From idea to execution</span><br>
                <span class="gradient-text">We simplify, build, and scale</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
            </div>
        </div>
    </section>
            <!-- What We Believe Section -->
    <section class="content-section">
        <div class="container">
            <div class="what-we-believe">
                <div class="label">What we believe</div>
                <h2>From idea to execution <span>We simplify, build, and scale</span></h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                
                <!-- Stair-Like Cards -->
                <div class="stair-cards">
                    <div class="stair-card">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="stair-card">
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="stair-card">
                        <h3></h3>
                        <p></p>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>

           
    <?php include 'process_home.php'; ?>
    <?php include 'home_expertise.php'; ?>
    <?php include 'home_faq.php'; ?>
    <?php include 'home_contact.php'; ?>

    <!-- Include Footer -->
    <?php require_once 'includes/footer.php'; ?>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const scrollingText = document.querySelector('.scrolling-text');
            if (!scrollingText) return;
            
            // Clone the text for seamless looping
            const textElement = scrollingText.querySelector('span');
            if (textElement) {
                const clone = textElement.cloneNode(true);
                scrollingText.appendChild(clone);
            }
            
            // Make sure the text is visible
            scrollingText.style.opacity = '1';
            
            // Handle window resize
            let resizeTimer;
            const handleResize = function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(updateAnimation, 250);
            };
            
            window.addEventListener('resize', handleResize);
            
            // Initial update
            updateAnimation();
            
            function updateAnimation() {
                const container = document.querySelector('.scrolling-text-container');
                if (!container || !textElement) return;
                
                const containerWidth = container.offsetWidth;
                const textWidth = textElement.offsetWidth;
                
                // Only enable scrolling if text is wider than container
                if (textWidth > containerWidth) {
                    const duration = textWidth / 50; // Adjust speed as needed
                    scrollingText.style.width = (textWidth * 2) + 'px';
                    scrollingText.style.animation = `scroll-left ${duration}s linear infinite`;
                } else {
                    scrollingText.style.animation = 'none';
                    scrollingText.style.width = 'auto';
                }
            }
            
            // Cleanup event listener on component unmount
            return function cleanup() {
                window.removeEventListener('resize', handleResize);
            };
        });
            };
            
            // Initial setup
            updateAnimation();
            
            // Handle window resize
            const handleResize = () => {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(updateAnimation, 250);
            };
            
            window.addEventListener('resize', handleResize);
            
            // Pause/play on hover
            const container = document.querySelector('.scrolling-text-container');
            container.addEventListener('mouseenter', () => {
                if (scrollingText.style.animation) {
                    scrollingText.style.animationPlayState = 'running';
                }
            });
            
            container.addEventListener('mouseleave', () => {
                if (scrollingText.style.animation) {
                    scrollingText.style.animationPlayState = 'paused';
                    // Reset position when mouse leaves
                    scrollingText.style.animation = 'none';
                    scrollingText.style.transform = 'translateX(0)';
                    scrollingText.offsetHeight; // Trigger reflow
                    updateAnimation();
                }
            });
        }
        
        // Run on DOMContentLoaded and when the page is fully loaded
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', initScrollingText);
        } else {
            initScrollingText();
        }
    </script>