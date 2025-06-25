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
            background: url('assets/images/portfolio_hero.jpg');
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
            justify-content: center;
            gap: 10px;
        }
        
        .hero-section .btn .btn-icon {
            width: 20px;
            height: 20px;
            object-fit: contain;
        }

        .hero-section .btn:hover {
            background-color: #1D4ED8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
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


<!-- Portfolio Hero Section -->
<!-- Hero Section -->
    <section class="hero-section">
       
        <div class="container">
            <h1>Solutions Engineered for Impact</h1>
            <p>Explore a showcase of our most impactful projects—crafted with innovation, precision, and a focus on real-world results.</p>
            <a href="contact.php" class="btn">
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
    <?php include 'home_portfolio.php'; ?>
    <?php include 'home_contact.php'; ?>

<?php
// Include footer
require_once 'includes/footer.php';
?>
