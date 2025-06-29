<?php
// Include header
$page_title = 'Web Development - Volvrit';
require_once 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Development - Volvrit</title>
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
            background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');
        }

        /* Import Poppins font */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        /* Hero Section Styling */
        .hero-section {
            position: relative;
            height: 80vh;
            min-height: 600px;
            background: url('assets/images/Hero Section.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 20px;
            overflow: hidden;
        }
        
        .hero-section .container {
            max-width: 1000px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0 20px;
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
            font-size: 48px;
            font-weight: 600;
            line-height: 48px;
            letter-spacing: 0;
            color: #2563EB;
            margin: 0 0 24px 0;
            max-width: 800px;
            z-index: 2;
            text-align: center;
            width: 100%;
            padding: 0 20px;
        }

        .hero-section p {
            font-size: 18px;
            color: #4B5563;
            line-height: 1.6;
            margin: 0 0 40px 0;
            max-width: 600px;
            width: 100%;
            padding: 0 20px;
            z-index: 2;
            text-align: center;
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

        /* Intro Section with Scrolling Text */
        .intro-section {
            background-color: #2563EB;
            overflow: hidden;
            position: relative;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .scrolling-text-container {
            width: 100%;
            overflow: hidden;
        }

        .scrolling-text-wrapper {
            display: flex;
            width: 100%;
            overflow: hidden;
        }

        .scrolling-text {
            display: flex;
            white-space: nowrap;
            will-change: transform;
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            align-items: center;
            padding: 0;
            transition: transform 0.3s ease-out;
            transform: translateX(0);
        }
        
        .scrolling-text-container:hover .scrolling-text {
            animation: scroll-left 30s linear infinite;
        }
        
        /* Button Styles */
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background-color: #2563EB;
            color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 16px;
            padding: 12px 30px;
            border-radius: 50px; /* Creates capsule shape */
            text-decoration: none;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            margin-top: 20px;
            line-height: 1.5;
        }
        
        .btn:hover {
            background-color: #1D4ED8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }
        
        .btn:active {
            transform: translateY(0);
            box-shadow: 0 2px 6px rgba(37, 99, 235, 0.2);
        }
        
        .btn-icon {
            width: 20px;
            height: 20px;
            transition: transform 0.3s ease;
        }
        
        .btn:hover .btn-icon {
            transform: translateX(3px);
        }

        /* Offer Tag Styles */
        .offer-tag {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 16px;
            border: 1px solid #E5E7EB;
            border-radius: 24px;
            background-color: white;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 16px;
            line-height: 24px;
            color: #6C7075;
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
        
        .gradient-text {
            display: block;
            background: linear-gradient(90deg, #2563EB 0%, #66C1A9 80.42%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-top: 8px;
        }
        
        /* Common styles for both Business Value and What We Offer sections */
        .business-value-section .item-text,
        .business-value-section .sub-list,
        .business-value-section .sub-list li,
        .intro-list .item-text,
        .intro-list .sub-list,
        .intro-list .sub-list li {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
            font-size: 20px;
            line-height: 36px;
            letter-spacing: 0;
            color: #959595;
            margin-bottom: 16px;
        }
        
        .business-value-section .sub-list,
        .intro-list .sub-list {
            list-style-type: none;
            padding-left: 0;
            margin-top: 16px;
        }
        
        .business-value-section .sub-list li,
        .intro-list .sub-list li {
            position: relative;
            padding-left: 32px;
            margin-bottom: 8px;
        }
        
        .business-value-section .sub-list li:before,
        .intro-list .sub-list li:before {
            content: '•';
            color: #2563EB;
            font-size: 24px;
            position: absolute;
            left: 8px;
            top: 0;
            line-height: 36px;
        }
        
        .intro-list .item-title {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 30px;
            line-height: 1.4;
            color: #000000;
            margin-bottom: 16px;
        }
        
        .intro-list .subtitle-line {
            display: block;
            background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-top: 4px;
        }
        
        /* Title Styles */
        .item-title {
            display: flex;
            flex-direction: column;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            font-size: 30px;
            line-height: 44px;
            letter-spacing: 0;
            margin: 0 0 16px 0;
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
            margin-top: -8px; /* Compensate for line height */
        }
        
        .scrolling-text span {
            color: white;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1px;
            white-space: nowrap;
            flex-shrink: 0;
            padding: 0 40px 0 20px;
            line-height: 1;
            display: inline-flex;
            align-items: center;
            height: 100%;
            position: relative;
        }

        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-100% + 100vw));
            }
        }
        
        .scrolling-text-wrapper {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .section {
            padding: 60px 20px;
            background-color: rgba(255, 255, 255, 0.9);
            position: relative;
            z-index: 1;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Section Title */
        .section-title {
            font-size: 32px;
            font-weight: bold;
            color: #2a2a2a;
            margin-bottom: 30px;
            line-height: 1.3;
        }

        .section-title span {
            color: #007bff;
        }

        /* Intro Section */
        .intro-text {
            font-size: 18px;
            color: #6a6a6a;
            margin-bottom: 30px;
        }

        .intro-list {
            list-style: none;
        }

        .intro-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 30px;
        }

        .icon {
            display: inline-block;
            width: 24px;
            height: 24px;
            background-color: #28a745;
            border-radius: 50%;
            margin-right: 15px;
            flex-shrink: 0;
        }

        .item-title {
            font-size: 20px;
            font-weight: 600;
            color: #2a2a2a;
            margin-bottom: 10px;
        }

        .item-text {
            font-size: 16px;
            color: #6a6a6a;
        }

        .sub-list {
            list-style: disc;
            margin-left: 20px;
            margin-top: 10px;
            font-size: 16px;
            color: #6a6a6a;
        }

        /* Business Value Section (inherits styles from Intro Section) */

        /* Work Process Section */
        .process-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .process-card {
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .card-title {
            font-size: 20px;
            font-weight: 600;
            color: #2a2a2a;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            color: #6a6a6a;
        }

        /* Tech Stack Section */
        .tech-stack-section {
            padding: 60px 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }


/* Section Title */
.section-title {
    font-size: 32px;
    font-weight: bold;
    color: #2a2a2a;
    margin-bottom: 30px;
    line-height: 1.3;
    text-align: left;
}

.section-title span {
    color: #007bff;
}

/* Tech Stack Section (What We Use) */
.tech-mindmap {
    display: flex;
    justify-content: center;
    align-items: center;
}

.mindmap-image {
    max-width: 100%;
    height: auto;
    display: block;
}

/* Responsive Design */
@media (max-width: 1024px) {
    .section-title {
        font-size: 28px;
    }

    .mindmap-image {
        max-width: 90%;
    }

    .process-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .why-choose-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .section {
        padding: 40px 15px;
    }

    .section-title {
        font-size: 24px;
    }

    .mindmap-image {
        max-width: 100%;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 20px;
    }

    .mindmap-image {
        max-width: 100%;
    }
}

        @media (max-width: 768px) {
            .section {
                padding: 40px 15px;
            }
        }

.container {
    max-width: 1200px;
    margin: 0 auto;
}

/* Section Title */
.section-title {
    font-size: 32px;
    font-weight: bold;
    color: #2a2a2a;
    margin-bottom: 30px;
    line-height: 1.3;
}

.section-title span {
    color: #007bff;
}

/* Intro Section */
.intro-text {
    font-size: 18px;
    color: #6a6a6a;
    margin-bottom: 30px;
}

.intro-list {
    list-style: none;
}

.intro-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 30px;
}

.icon {
    display: inline-block;
    width: 24px;
    height: 24px;
    background-color: #28a745;
    border-radius: 50%;
    margin-right: 15px;
    flex-shrink: 0;
}

.item-title {
    font-size: 20px;
    font-weight: 600;
    color: #2a2a2a;
    margin-bottom: 10px;
}

.item-text {
    font-size: 16px;
    color: #6a6a6a;
}

.sub-list {
    list-style: disc;
    margin-left: 20px;
    margin-top: 10px;
    font-size: 16px;
    color: #6a6a6a;
}

/* Business Value Section (inherits styles from Intro Section) */

/* Work Process Section */
.process-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.process-card {
    background-color: #fff;
    padding: 25px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.card-title {
    font-size: 20px;
    font-weight: 600;
    color: #2a2a2a;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    color: #6a6a6a;
}

/* Tech Stack Section */
.tech-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
}

.tech-column {
    display: flex;
    flex-direction: column;
}

.column-title {
    font-size: 20px;
    font-weight: 600;
    color: #2a2a2a;
    margin-bottom: 15px;
}

.tech-list {
    list-style: none;
}

.tech-list li {
    font-size: 16px;
    color: #6a6a6a;
    margin-bottom: 10px;
}
/* Responsive Design */
@media (max-width: 1024px) {
    .section-title {
        font-size: 28px;
    }

    .process-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .tech-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .why-choose-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .section {
        padding: 40px 15px;
    }

    .section-title {
        font-size: 24px;
    }

    .intro-text {
        font-size: 16px;
    }

    .item-title {
        font-size: 18px;
    }

    .item-text, .sub-list, .card-text, .tech-list li {
        font-size: 14px;
    }

    .process-grid {
        grid-template-columns: 1fr;
    }

    .why-choose-grid {
        grid-template-columns: 1fr;
    }

    .column-title, .card-title {
        font-size: 18px;
    }
}

@media (max-width: 480px) {
    .section-title {
        font-size: 20px;
    }

    .intro-item {
        flex-direction: column;
        align-items: flex-start;
    }

    .icon {
        margin-bottom: 10px;
    }
}




</style>
</head>
<body>
    <!-- Page container to prevent horizontal scrolling -->
    <div class="page-container">
    <!-- Hero Section -->
    <section class="hero-section">
        
        <div class="container">
        <h1 >We turn ideas into intelligent, high-performance applications.</h1>
        <p class="item-text">From MVPs to enterprise-grade systems, our US-based team builds custom mobile, web, and cloud-native apps that are secure, scalable, and ready to grow with your business.</p>
            <a href="/contact.php" class="btn">
            <img src="assets/images/fluent_handshake-20-filled.svg" alt="Handshake" class="btn-icon">
            <span>Let's plan your project</span>
            </a>
        </div>
    </section>
    <!-- Intro Section -->
    <section class="intro-section">
        <div class="scrolling-text-container">
            <div class="scrolling-text-wrapper">
                <div class="scrolling-text" id="scrollingText">
                <span class="text-segment">Transforming ideas into powerful digital growth</span>
            <span class="text-segment" aria-hidden="true">Transforming ideas into powerful digital growth</span>
            <span class="text-segment" aria-hidden="true">Transforming ideas into powerful digital growth</span>
                </div>
            </div>
        </div>
    </section>
    <section class="custom-dev-section section">
        <div class="container">
            <h1 class="section-title">From Concept to Code, We Deliver Results That Matter</h1>
            <div class="section-content">
                <p class="item-text">At Evolvix, we specialize in full-cycle app development services tailored for businesses across the United States. Based in New York, we help startups, SMBs, and enterprises transform ideas into impactful digital products—built to perform and evolve. Our agile team designs and develops robust mobile applications, cross-platform solutions, and complex enterprise apps that deliver seamless performance, secure integrations, and outstanding user experiences. Whether it’s your first app or your next big upgrade—we make it future-ready.</p>
            </div>
        </div>
        <style>
            .custom-dev-section {
                padding: 60px 0;
                background-color: #fff;
            }
            .custom-dev-section .section-title {
                font-family: 'Poppins', sans-serif;
                font-weight: 600;
                font-size: 30px;
                line-height: 44px;
                letter-spacing: 0;
                margin-bottom: 24px;
                color: #1a1a1a;
                text-align: left;
            }
            .custom-dev-section .section-content {
                max-width: 100%;
                margin: 0;
                padding: 0;
            }
            .custom-dev-section p {
                font-family: 'Roboto', sans-serif;
                font-weight: 400;
                font-size: 20px;
                line-height: 36px;
                letter-spacing: 0;
                color: #4a4a4a;
                margin: 0;
                text-align: left;
            }
            @media (max-width: 768px) {
                .custom-dev-section {
                    padding: 40px 0;
                }
                .custom-dev-section .section-title {
                    font-size: 26px;
                    line-height: 36px;
                    margin-bottom: 20px;
                }
                .custom-dev-section p {
                    font-size: 18px;
                    line-height: 32px;
                }
            }
            @media (max-width: 480px) {
                .custom-dev-section .section-title {
                    font-size: 24px;
                    line-height: 32px;
                }
                .custom-dev-section p {
                    font-size: 16px;
                    line-height: 28px;
                }
            }
        </style>
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
                            <span class="title-line">Complete Web Solutions by the Best Web Development Company in NYC, USA</span>
                        </h3>
                        <p class="item-text">We build powerful mobile and web applications that combine sleek user experiences with robust backend architecture. Whether it's a startup MVP or an enterprise solution, our apps are designed to scale seamlessly with your business.</p>
                        <h3>We offer end-to-end app development services that blend creativity, performance, and functionality. 
                        Our offerings include</h3>
                        <ul class="sub-list">
                            <li>iOS & Android App Development: Native apps built with Swift, Kotlin, and modern frameworks for optimal performance and device compatibility.</li>
                            <li>Cross-Platform Development (Flutter / React Native): Code once, deploy everywhere. We build apps that work smoothly across iOS, Android, and the web.</li>
                            <li>Progressive Web Apps (PWAs): Lightweight, responsive apps that behave like native apps on mobile and desktop.</li>
                            <li>Enterprise Application Development: Secure, scalable, and modular systems designed to support complex workflows and data-heavy operations</li>
                            <li>Cloud-Native Apps: Leveraging AWS, Azure, and Google Cloud for robust hosting, rapid scalability, and seamless integrations.</li>
                            
                        </ul>
                        <span class="values-tagline">We go beyond aesthetics—building applications that solve real problems, boost engagement, and drive measurable business growth.</span>
                        <style>
                            .values-tagline {
                                font-family: 'Roboto', sans-serif;
                                font-weight: 400;
                                font-size: 20px;
                                line-height: 36px;
                                letter-spacing: 0;
                                display: block;
                                margin-top: 16px;
                            }
                  <section class="business-value-section section">
              @media (max-width: 768px) {
                                .values-tagline {
                                    font-size: 18px;
                                    line-height: 32px;
                                }
                            }
                        </style>
                    </div>
            </ul>
        </div>
    </section>

    <!-- Business Value Section -->
    <section class="section">
        <div class="container">
            <div class="offer-tag">
                <span class="offer-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#28A745"/>
                    </svg>
                </span>
                <span class="offer-text">Business Value</span>
            </div>
            <h2 class="section-title">Rooted in Innovation, Built on Integrity</h2>
            
            <div class="section-content">
                <p class="item-text" style="margin-bottom: 24px;">At Evolvix, we prioritize transparency, agility, and client-centric thinking in every app we build. From ideation to launch, our values ensure every application delivers real business value while staying ethically sound and user-focused.</p>
                
                <h3 class="subtitle" style="margin-bottom: 16px; font-weight: 600; font-size: 20px; color: #2a2a2a;">At Evolvix, we don't just code—we collaborate. Our values shape everything we do</h3>
                
                <ul class="value-list" style="list-style: none; padding-left: 0;">
                    <li class="value-item" style="display: flex; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid #eee;">
                        <span style="color: #28A745; margin-right: 12px; font-weight: bold;">•</span>
                        <span class="item-text" style="margin: 0;"><strong>Client-Centric:</strong> We treat your goals as our mission and build with your users in mind.</span>
                    </li>
                    <li class="value-item" style="display: flex; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid #eee;">
                        <span style="color: #28A745; margin-right: 12px; font-weight: bold;">•</span>
                        <span class="item-text" style="margin: 0;"><strong>Transparent Communication:</strong> We keep you informed at every step, from idea to deployment.</span>
                    </li>
                    <li class="value-item" style="display: flex; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid #eee;">
                        <span style="color: #28A745; margin-right: 12px; font-weight: bold;">•</span>
                        <span class="item-text" style="margin: 0;"><strong>Agile & Accountable:</strong> We iterate quickly and deliver reliably—on time and within budget.</span>
                    </li>
                    <li class="value-item" style="display: flex; align-items: flex-start; margin-bottom: 16px; padding-bottom: 16px; border-bottom: 1px solid #eee;">
                        <span style="color: #28A745; margin-right: 12px; font-weight: bold;">•</span>
                        <span class="item-text" style="margin: 0;"><strong>Innovation-Led:</strong> We use the latest tech to keep your app ahead of trends and competition.</span>
                    </li>
                    <li class="value-item" style="display: flex; align-items: flex-start;">
                        <span style="color: #28A745; margin-right: 12px; font-weight: bold;">•</span>
                        <span class="item-text" style="margin: 0;"><strong>US-Based Team:</strong> Get local expertise with global standards from our office in New York.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    </section>
      <!-- What you get section -->
      <section class="business-value-section section">
        <div class="container">
            <div class="offer-tag">
                <span class="offer-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#28A745"/>
                    </svg>
                </span>
                <span class="offer-text">What you get</span>
            </div>
            <h2 class="section-title" style="margin-top: 16px">
            Apps That Do More Than Just Work—They Win            <div>
                        <p class="item-text">Get high-performance, scalable applications that combine sleek design with robust functionality. We deliver mobile and web apps that drive engagement, enhance efficiency, and scale with your business across the United States.</p>
                        <h4>Our custom-built applications are designed to perform under pressure, scale with demand, and deliver value</h4>
                        <ul class="sub-list">
                            <li>Pixel-Perfect UI/UX tailored for usability and conversion</li>
                            <li>Robust Architecture optimized for performance and scalability</li>
                            <li>Seamless Integrations with third-party APIs, CRMs, and ERPs</li>
                            <li>Real-Time Analytics for data-driven insights and decisions</li>
                            <li>Post-Launch Support to monitor, update, and scale with confidence</li>
                            <li>Fully Customizable Features that align with your business model</li>
                        </ul>
                        <span class="values-tagline">With Evolvix, you get apps that are intuitive, secure, and ready for growth—from the first launch to the next big update.</span>
                        <style>
                            .values-tagline {
                                font-family: 'Roboto', sans-serif;
                                font-weight: 400;
                                font-size: 20px;
                                line-height: 36px;
                                letter-spacing: 0;
                                display: block;
                                margin-top: 16px;
                            }
                            @media (max-width: 768px) {
                                .values-tagline {
                                    font-size: 18px;
                                    line-height: 32px;
                                }
                            }
                        </style>
                    </div>
        </div>
    </section>
  <section>
    <?php include 'process_home.php'; ?>
  </section>

  <!-- Tech Stack Section (What We Use) -->
  <section class="tech-stack-section section">
        <div class="container">
            <h2 class="section-title">
            Tools, Languages, and <br> Frameworks We Excel In
            </h2>
            <div class="tech-mindmap">
                <img src="assets/images/web_development_techstackimg.png" alt="Tech Stack Mindmap" class="mindmap-image">
            </div>
        </div>
    </section>
<section>
    <?php include 'home_expertise.php'; ?>
</section>  
<section>
    <?php include 'home_faq.php'; ?>
</section>  
<section>
    <?php include 'home_contact.php'; ?>
</section>  
<section>
    <?php include 'includes/footer.php'; ?>
</section>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const scrollingText = document.querySelector('.scrolling-text');
    const container = document.querySelector('.scrolling-text-container');
    
    if (!scrollingText || !container) return;
    
    // Ensure smooth scrolling on all devices
    scrollingText.style.willChange = 'transform';
    
    // Handle window resize
    let resizeTimer;
    const handleResize = () => {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            // Force reflow to ensure smooth animation restart
            if (scrollingText) {
                scrollingText.style.animation = 'none';
                scrollingText.offsetHeight; // Trigger reflow
                scrollingText.style.animation = 'scroll-left 20s linear infinite';
            }
        }, 100);
    };
    
    window.addEventListener('resize', handleResize);
    
    // Cleanup on page unload
    window.addEventListener('beforeunload', () => {
        window.removeEventListener('resize', handleResize);
    });
});
</script>

    </div><!-- Close page-container -->
</body>
   
</html>
