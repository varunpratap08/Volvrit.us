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
        <h1>Drive Results, Not Just Traffic<br><span style="display: inline-block;">With Performance-First Digital Marketing</span></h1>
        <p>Transform your brand’s online presence with Evolvix’s data-driven, full-funnel digital marketing solutions. Based in New York, we help businesses across the United States grow smarter, rank faster, and convert better</p>
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
                    <span>Transforming ideas into powerful digital growth</span>
                  <span>Transforming ideas into powerful digital growth</span>
                    <span aria-hidden="true">Transforming ideas into powerful digital growth</span> -->
                </div>
            </div>
        </div>
    </section>
    <section class="custom-dev-section section">
        <div class="container">
            <h1 class="section-title">Performance-Driven <br> Digital Marketing Solutions for Modern Brands</h1>
            <div class="section-content">
                <p>At Evolvix, we understand that digital marketing is more than just online visibility—it's about measurable growth. Our team combines strategic planning, creative execution, and analytics-driven decisions to ensure your brand doesn’t just compete but leads in your niche and delivers maximum ROI. We cater to both B2B and B2C clients across the United States, helping startups, SMEs, and enterprises create sustainable digital ecosystems with tailored marketing campaigns.</p>
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
                            <span class="title-line">Comprehensive Digital Marketing Services in <br> NYC and across the United States</span>
                           
                        </h3>
                        <p class="item-text">At Evolvix, we offer tailored digital marketing strategies that combine creativity with performance. From SEO and PPC to content marketing, social media campaigns, and email automation, we help businesses across the United States increase visibility, generate qualified leads, and convert them into loyal customers — all through data-driven and channel-specific execution.</p>
                        <h3 class="item-title">Our services include</h3>
                        <ul class="sub-list">
                            <li><span class="sub-list-text" style="color: black">Search Engine Optimization (SEO):</span> <p >We improve your website’s visibility on search engines like Google by optimizing your content, keywords, site structure, and speed. Our SEO strategies drive long-term organic traffic, helping your business rank higher, get discovered more easily, and reach the right audience.</p></li>
                            <li><span class="sub-list-text" style="color: black">Social Media Marketing (SMM):</span> <p >We craft platform-specific strategies for Facebook, Instagram, LinkedIn, and more to help your brand grow its community, build engagement, and drive sales. From content creation to audience targeting, we turn social media into a revenue-generating channel for your business.</p></li>
                            <li><span class="sub-list-text" style="color: black">Content Marketing:</span> <p >We create engaging, high-quality content that resonates with your audience and helps you build trust, authority, and visibility. Whether it's blog posts, videos, or infographics, our content marketing strategies are designed to keep your audience coming back for more.</p></li>
                            <li><span class="sub-list-text" style="color: black">Email Marketing:</span> <p >We build and manage email campaigns that nurture leads and retain customers. From drip sequences to newsletters, our strategies personalize your outreach, boost open rates, and drive repeat sales through automation and timely communication.</p></li>
                            <li><span class="sub-list-text" style="color: black">Pay-Per-Click (PPC):</span> <p >Through targeted ad campaigns on Google, Bing, and social platforms, we help you get instant visibility and measurable returns. Whether it’s search ads, display banners, or remarketing, our PPC experts optimize every click to maximize your ROI and conversions.</p></li>
                            <li><span class="sub-list-text" style="color: black">Local SEO & GMB Optimization:</span> <p >Want to rank locally and attract nearby customers? We optimize your Google Business Profile, citations, reviews, and local keywords to help your business appear in local search results and maps — critical for brick-and-mortar or region-specific services.</p></li>
                            <li><span class="sub-list-text" style="color: black">Web Analytics & Conversion Tracking:</span> <p >Using tools like Google Analytics, GA4, and Meta Pixel, we track every click, conversion, and campaign. Our team transforms data into actionable insights so you can see what’s working, where to improve, and how to grow smarter.</p></li>
                            <li><span class="sub-list-text" style="color: black">CGI & 3D Visualization Services:</span> <p > We bring your ideas to life with hyper-realistic 3D renders, animations, and visual storytelling. From product visualizations and architectural walkthroughs to motion graphics for social media, our CGI experts craft immersive content that captures attention and drives engagement. Whether you're launching a new product or building brand presence, our 3D visuals enhance user experience, boost conversions, and make your digital presence unforgettable.</p></li>
                            
                        </ul>
                    </div>
            </ul>
        </div>
    </section>

    <!-- Business Value Section -->
    <section class="business-value-section section">
        <div class="container">
            <div class="offer-tag">
                <span class="offer-icon">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 2C6.48 2 2 6.48 2 12C2 17.52 6.48 22 12 22C17.52 22 22 17.52 22 12C22 6.48 17.52 2 12 2ZM10 17L5 12L6.41 10.59L10 14.17L17.59 6.58L19 8L10 17Z" fill="#28A745"/>
                    </svg>
                </span>
                <span class="offer-text">Business Value</span>
            </div>
            <h2 class="section-title" style="margin-top: 16px">
            Integrity, Innovation, Impact<br>The Foundation of Every Campaign We Build
                
            </h2>
            
                    <div>
                        <p class="item-text">At Evolvix, we operate with complete transparency, clear communication, and measurable intent. Every campaign is backed by ethical marketing standards, continuous learning, and a deep understanding of user behavior. We don’t just follow trends — we create value-driven strategies that are honest, adaptable, and focused on long-term success for our clients in NYC and across the United States.</p>
                       <h3>Our values drive more than just strategy—they shape results. We believe great marketing is built on trust, clarity, and adaptability. That’s why every campaign we deliver reflects who we are and how we work</h3>
                        <ul class="sub-list">
                            <li class="sub-list-text">Transparency in planning, execution, and reporting</li>
                            <li class="sub-list-text">Data-driven strategies focused on measurable outcomes</li>
                            <li class="sub-list-text">Ethical marketing that strengthens brand credibility</li>
                            <li class="sub-list-text">Continuous learning to stay ahead of algorithm shifts</li>
                        </ul>
                        <span class="values-tagline">Our mission is simple: to create lasting digital growth through honest, performance-led partnerships.</span>
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
            Measurable Growth. Real ROI</h2>
            <div>
                        <p class="item-text">With Evolvix, you gain more than just traffic—you gain traction. From improved search rankings and lead conversions to stronger brand engagement and customer retention, our digital marketing services are built to deliver tangible outcomes. Every strategy is crafted to fuel visibility, build credibility, and drive sustained business growth in NYC and across the United States.</p>
                       
                       <h3>Partnering with Evolvix means you gain</h3>
                        <ul class="sub-list">
                            <li class="sub-list-text">A dedicated team of certified digital marketers.</li>
                            <li class="sub-list-text">Personalized marketing roadmap based on your industry.</li>
                            <li class="sub-list-text">Growth-focused SEO and performance marketing strategies</li>
                            <li class="sub-list-text">Monthly reports with actionable insights.</li>
                            <li class="sub-list-text">Cross-platform expertise from search engines to social media</li>
                        </ul>
                        <span class="values-tagline">Whether it’s brand awareness or revenue growth, we deliver marketing that drives tangible business results.</span>
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
