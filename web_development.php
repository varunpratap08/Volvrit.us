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
            background-image: url('https://www.transparenttextures.com/patterns/grid-me.png');
            background-repeat: repeat;
            background-size: auto;
        }

        body {
            /* Background styles are inherited from universal selector */
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
            );
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
    <!-- Intro Section -->
    <section class="intro-section section">
        <div class="container">
            <p class="intro-text">
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.
            </p>
            <ul class="intro-list">
                <li class="intro-item">
                    <span class="icon"></span>
                    <div>
                        <h3 class="item-title">What we offer</h3>
                        <p class="item-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                    </div>
                </li>
                <li class="intro-item">
                    <span class="icon"></span>
                    <div>
                        <h3 class="item-title">We develop responsive, and ready to scale.</h3>
                        <p class="item-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        <ul class="sub-list">
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>

    <!-- Business Value Section -->
    <section class="business-value-section section">
        <div class="container">
            <h2 class="section-title">
                Turn clicks into customers with <span>Smart web development</span>
            </h2>
            <ul class="intro-list">
                <li class="intro-item">
                    <span class="icon"></span>
                    <div>
                        <h3 class="item-title">Business value</h3>
                        <p class="item-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        <ul class="sub-list">
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                            <li>Contrary to popular belief, Lorem Ipsum is not simply random text</li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </section>
  <section>
    <?php include 'process_home.php'; ?>
  </section>

  <!-- Tech Stack Section (What We Use) -->
  <section class="tech-stack-section section">
        <div class="container">
            <h2 class="section-title">
                Turn clicks into customers with <span>Smart web development</span>
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

</body>
</html>


 


