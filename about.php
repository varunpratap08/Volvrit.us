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
            background-color: #F9FAFB;
        }

        /* Import Fonts */
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');

        /* Hero Section Styling */
        .hero-section {
            position: relative;
            min-height: 70vh;
            background: url('assets/images/about_hero.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 80px 5% 40px; /* Reduced top padding to move content up */
            overflow: hidden;
        }
        
        .hero-section .container {
            max-width: 1000px;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start; /* Align content to the left */
            padding: 0;
            margin: 0;
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
            line-height: 1.2;
            letter-spacing: 0;
            color: #2563EB;
            margin: 0 0 24px 0;
            max-width: 800px;
            z-index: 2;
            text-align: left;
            width: 100%;
            padding: 0;
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
            padding: 0;
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

       

       
         /* Responsive Design */
         @media (max-width: 1024px) {
            .hero-section {
                min-height: auto;
                padding: 70px 5% 40px; /* Adjusted padding for tablet */
            }

            .hero-section h1 {
                font-size: 44px;
                max-width: 600px;
            }

            .hero-section p {
                font-size: 16px;
                max-width: 500px;
            }

           
        }

        @media (max-width: 768px) {
            .hero-section {
                min-height: auto;
                padding: 60px 5% 30px; /* Adjusted padding for mobile */
                text-align: left;
                align-items: flex-start;
            }
            .hero-section h1 {
                font-size: 36px;
                line-height: 1.2;
            }
            .hero-section p {
                font-size: 16px;
                text-align: left;
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

        @media (max-width: 480px) {
            .hero-section {
                padding: 50px 5% 20px; /* Further reduced padding for small screens */
            }

            .hero-section h1 {
                font-size: 28px;
                line-height: 1.3;
            }

            .hero-section p {
                font-size: 16px;
                line-height: 1.5;
            }

           
        }

        /* Intro Section with Scrolling Text */
        .intro-section {
            background-color: #2563EB;
            overflow: hidden;
            position: relative;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            padding: 0 20px;
            margin: 40px 0;
        }
        
        .scrolling-text-container {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            height: 100%;
            overflow: hidden;
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
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            white-space: nowrap;
            will-change: transform;
            display: flex;
            align-items: center;
            height: 100%;
            padding: 0;
            animation: scroll-left 25s linear infinite;
            animation-play-state: running;
        }
        
        .scrolling-text-container:hover .scrolling-text {
            animation-play-state: paused;
        }
        
        .scrolling-text .text-segment {
            color: white;
            font-size: 18px;
            font-weight: 500;
            font-family: 'Poppins', sans-serif;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            padding: 0 50px;
            height: 100%;
            position: relative;
        }
        
        @keyframes scroll-left {
            0% { transform: translateX(0) translateY(-50%); }
            100% { transform: translateX(-33.33%) translateY(-50%); }
        }
        
        /* Ensure smooth scrolling */
        .scrolling-text {
            transition: transform 0.3s ease;
        }
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

/* Content Paragraph Section */
.content-paragraph {
    padding: 40px 20px;
    background-color: #fff;
}

@keyframes float {
    0%, 100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-5px);
    }
}

.large-centered-text {
    font-family: 'Poppins', sans-serif;
    font-weight: 400;
    font-size: 2rem; /* Increased size */
    line-height: 1.3;
    letter-spacing: 1.5px;
    text-align: center;
    color: rgb(22, 22, 24);
    margin: 0 auto;
    padding: 2rem 20px;
    cursor: default;
    transition: all 0.3s ease;
    display: block;
    width: 100%;
    box-sizing: border-box;
    animation: float 3s ease-in-out infinite;
}

.large-centered-text:hover {
    animation-play-state: paused;
    transform: scale(1.03);
    font-weight: 500;
    color: #1a365d;
}

/* About Badge Styling */
.about-badge {
    display: inline-flex;
    align-items: center;
    border: 1px solid #e0e0e0;
    border-radius: 20px;
    padding: 4px 15px;
    margin-bottom: 15px;
    background-color: #ffffff;
    color: #959595;
    font-size: 14px;
}

.about-badge svg path {
    fill: green;
}

.about-badge svg path[stroke] {
    stroke: green;
}

/* About Section Heading Styles */
.about-heading {
    display: flex;
    flex-direction: column;
    gap: 4px; /* Reduced from 10px to 4px */
    margin: 0 0 16px 0; /* Reduced bottom margin */
    font-family: 'Poppins', sans-serif;
    font-weight: 600;
    line-height: 1.2; /* Slightly reduced line height */
}

.about-heading .heading-line {
    display: block;
}

.about-heading .heading-line:first-child {
    color: #000000;
    font-size: 32px;
}

.about-heading .gradient-text {
    background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 32px;
    display: inline-block;
}

/* About Section Paragraph Styling */
.about-text > p {
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 20px;
    line-height: 36px;
    letter-spacing: 0%;
    color: #4B5563;
    margin: 8px 0 0 0;
}

@media (max-width: 768px) {
    .about-text > p {
        font-size: 18px;
        line-height: 32px;
    }
}

@media (max-width: 480px) {
    .about-text > p {
        font-size: 16px;
        line-height: 28px;
    }
}

/* Stair Cards Styling */
.stair-cards-container {
    position: relative;
    width: 100%;
    max-width: 1350px;
    margin: 40px auto 0; /* Reduced top margin from 100px to 40px */
    height: 700px; /* Reduced height from 800px */
    padding-top: 20px; /* Reduced padding from 50px to 20px */
}

.stair-card {
    position: absolute;
    background: #f4f4f4;
    box-sizing: border-box;
    padding: 30px;
}

.card-1 {
    width: 413px;
    height: 257px;
    top: 200px; /* Increased from 100px to push down further */
    left: 0;
    border: 1px solid #D3D3D3;
    border-right: none;
}

.card-2 {
    width: 414px;
    height: 357px;
    top: 100px; /* Increased from 0 to push down */
    left: 413px; /* 513px - 100px (container padding) */
    border: 1px solid #D3D3D3;
    border-right: none;
}

.card-3 {
    width: 413px;
    height: 457px;
    top: 0; /* Changed from -100px to 0 */
    left: 827px; /* 927px - 100px */
    border: 1px solid #D3D3D3;
}

.card-content img {
    width: 40px;
    height: 40px;
    margin-bottom: 15px;
    display: block;
}

.card-content h3 {
    font-family: 'Poppins', sans-serif;
    font-size: 24px;
    margin-bottom: 15px;
    background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.card-content p {
    font-family: 'Roboto', sans-serif;
    font-size: 16px;
    line-height: 1.6;
    color: #4A5568;
}

/* Responsive adjustments */
@media (max-width: 1200px) {
    .stair-cards-container {
        height: 900px;
    }
    
    .stair-card {
        position: relative;
        width: 100% !important;
        height: auto !important;
        top: auto !important;
        left: auto !important;
        margin-bottom: 30px;
        border: 1px solid #D3D3D3 !important;
    }
}

@media (max-width: 768px) {
    .about-heading .heading-line:first-child,
    .about-heading .gradient-text {
        font-size: 28px;
    }
}

@media (max-width: 480px) {
    .about-heading .heading-line:first-child,
    .about-heading .gradient-text {
        font-size: 24px;
    }
}

@media (max-width: 768px) {
    .large-centered-text {
        font-size: 32px;
        line-height: 1.4;
    }
}

@media (max-width: 480px) {
    .large-centered-text {
        font-size: 24px;
        line-height: 1.3;
    }
}

</style>
</head>
<body>
    <!-- Hero Section -->
    <section class="hero-section">
     
        <div class="container">
            <h1>We evolve ideas into<br><span style="display: inline-block;">Intelligent digital products</span></h1>
            <p class="item-text">We bridge business strategy with next-gen technology to build scalable, secure, and user-focused digital solutions. Based in New York, we deliver excellence in Web Development, AI, Blockchain, APIs, and Digital Marketing across the United States.</p>
            <a href="contact.php" class="btn">
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
    <!-- Main Content Paragraph Section -->
    <section class="content-paragraph">
        <div class="container">
            <div class="text-container" style="width: 100%; margin: 0 auto; max-width: 1400px; padding: 0 20px; box-sizing: border-box;">
    <p class="large-centered-text">
        Evolvix is a full-service IT and Digital Solutions company in New York helping businesses thrive in the digital age. Whether you're launching a mobile app, automating operations through custom APIs, or looking to scale your brand through digital marketing, we are your trusted partner for growth.
    </p>
</div>
        </div>
    </section>
    <!-- What we Believe-->
    <section>
    <div class="container">
    <div class="about-section">
        <div class="about-container">
            <div class="about-text">
                <div class="about-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                        <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>Who we are</span>
                </div>
                <h2 class="fade-in about-heading">
                    <span class="heading-line">A team of tech creators,</span>
                    <span class="heading-line gradient-text">problem-solvers and growth enablers</span>
                </h2>
                <p class="fade-in" style="animation-delay: 0.2s; margin: 20px 0;">
                At our core, Evolvix is a team of experienced developers, designers, digital marketers, and product thinkers. Founded in New York, our mission is to deliver future-ready, scalable digital solutions across every business vertical.                </p>
                </div>
                </div>
                </div>
                </div>
                </section>
  <section>
  <div class="container">
    <div class="about-section">
        <div class="about-container">
            <div class="about-text">
                <div class="about-badge">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                        <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span>What We Believe</span>
                </div>
                <h2 class="fade-in about-heading">
                    <span class="heading-line">From idea to execution</span>
                    <span class="heading-line gradient-text">We simplify, build, and scale</span>
                </h2>
                <p class="fade-in" style="animation-delay: 0.2s; margin: 20px 0 40px 0;">
                We believe that technology should empower, not overwhelm. That’s why our services are designed to scale with you — from MVP to enterprise. Every product and campaign we build is grounded in clarity, transparency, and real-world results.                </p>
                
                <!-- Stair-like Cards Section -->
                <div class="stair-cards-container">
                    <!-- Card 1 -->
                    <div class="stair-card card-1">
                        <div class="card-content">
                            <img src="assets/images/Vector.png">
                            <h3>Our Vision</h3>
                            <p class="item-text">To be a global leader in digital transformation by combining innovation, strategy, and technology.</p>
                        </div>
                    </div>
                    
                    <!-- Card 2 -->
                    <div class="stair-card card-2">
                        <div class="card-content">
                            <img src="assets/images/stash_target.png">
                            <h3>Our Mission</h3>
                            <p class="item-text">To deliver intelligent, scalable, and result-driven digital solutions that empower businesses across the United States to grow faster and smarter.</p>
                        </div>
                    </div>
                    
                    <!-- Card 3 -->
                    <div class="stair-card card-3">
                        <div class="card-content">
                            <img src="assets/images/stash_target (1).png">
                            <h3>Our Values</h3>
                            <ul>
                                <li class="item-text">Integrity First</li>
                                <li class="item-text">Innovation-Led</li>
                                <li class="item-text">Client-Centric</li>
                                <li class="item-text">Result-Driven</li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
                
                </div>
                </div>
                </div>
                <div style="margin-top: 40px;"></div>
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
</body>
    
</html>
