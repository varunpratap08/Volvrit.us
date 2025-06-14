<?php
// Include header
$page_title = 'Our Portfolio - Volvrit';
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
    <?php include 'home_portfolio.php'; ?>
    <?php include 'home_contact.php'; ?>

<?php
// Include footer
require_once 'includes/footer.php';
?>
