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
            line-height: 1.6;
            margin-bottom: 40px;
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
        </div>
        <div class="container">
            <div class="section-label">What we do</div>
            <h1>We evolve ideas into intelligent digital products.</h1>
            <p>Industry dummy ipsum has been the industry's standard dummy text. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <a href="#contact" class="btn">Let's plan your project</a>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="content-section">
       
            <div class="two-column">
                <div class="text">
                    <h2>From idea to execution <span>We simplify, build, and scale</span></h2>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                </div>
            </div>

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