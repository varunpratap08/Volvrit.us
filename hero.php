<!-- hero.php -->
<link rel="stylesheet" href="css/hero.min.css">
<link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

<style>
    body {
        margin: 0;
        font-family: 'Poppins', sans-serif;
        background: #F5F7FA;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        position: relative;
    }

    .hero-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        min-height: 80vh;
        padding: 50px 0;
        position: relative;
        overflow: hidden;
    }

    .hero-content {
        z-index: 2;
    }

    .hero-tagline {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 15px;
    }

    .hero-tagline h2 {
        font-family: 'Amita', cursive;
        font-weight: 400;
        font-size: 28px;
        line-height: 48px;
        color: #2563EB;
        margin: 0;
        letter-spacing: 0;
    }

   /* .tagline-gif {
        width: 48px;
        height: 48px;
        object-fit: cover;
        overflow: hidden;
    }*/
    .gif {
        width: 50%;
        height: 50%;
        object-fit: contain;
        overflow: hidden;
        border-radius: 60px;
        border: 1px solid rgb(199, 199, 199);
    }

    .hero-title {
        font-size: 72px;
        font-weight: 700;
        color: #1E293B;
        margin: 0 0 20px;
        line-height: 1.2;
    }

    .hero-title .highlight {
        color: #2563EB;
    }

    .animated-text-container {
        display: inline-block;
        position: relative;
    }

    .animated-text {
        display: inline;
        color: #10B981;
        font-weight: 700;
    }

    .hero-description {
        font-size: 18px;
        color: #64748B;
        max-width: 500px;
        margin-bottom: 30px;
        line-height: 1.6;
    }

    .hero-button {
        display: inline-block;
        padding: 12px 24px;
        background: #2563EB;
        color: white;
        text-decoration: none;
        border-radius: 24px;
        font-weight: 500;
    }

    .hero-images-wrapper {
        position: relative;
        z-index: 1;
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
        overflow: hidden; /* Ensure the overflow is hidden for the background effect */
    }

    .hero-image-container {
        position: relative;
        width: 100%;
        max-width: 600px;
        height: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .hero-image {
        position: relative;
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        border-radius: 12px;
        z-index: 2; /* Ensure main image stays on top */
    }
    
    .hero-image-2-container {
        position: absolute;
        top: 0;
        right: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        z-index: 1;
    }
    
    .hero-image-2 {
        position: absolute;
        width: 120%;
        height: 100%;
        object-fit: cover;
        object-position: right bottom;
        opacity: 0.9;
        right: -20%;
        bottom: 0;
        pointer-events: none;
        transition: all 0.5s ease;
    }

    /* Responsive adjustments for hero image */
    @media (max-width: 1200px) {
        .hero-image-container {
            height: 400px;
            max-width: 550px;
            margin: 0 auto;
        }
        
        .hero-image-2 {
            width: 130%;
            right: -15%;
        }
    }
    
    @media (max-width: 992px) {
        .hero-images-wrapper {
            order: -1;
            margin-bottom: 40px;
        }
        
        .hero-image-container {
            height: 350px;
            max-width: 500px;
        }
        
        .hero-image-2 {
            width: 150%;
            right: -25%;
        }
    }
    
    @media (max-width: 768px) {
        .hero-image-container {
            height: 300px;
            max-width: 400px;
        }
        
        .hero-image-2 {
            width: 170%;
            right: -40%;
        }
    }
    
    @media (max-width: 480px) {
        .hero-image-container {
            height: 250px;
        }
        
        .hero-image-2 {
            width: 200%;
            right: -50%;
        }
    }

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
        left: 0;
        transform: translateY(-50%);
        white-space: nowrap;
        will-change: transform;
        display: flex;
        padding: 0;
        animation: scroll-left 20s linear infinite;
        animation-play-state: running;
        opacity: 1;
        visibility: visible;
        min-width: 100%;
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
        letter-spacing: 1px;
        line-height: 1;
        white-space: nowrap;
        display: inline-block;
        padding: 0 40px;
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

    /* Responsive Design */
    @media (max-width: 1024px) {
        .hero-title { font-size: 56px; }
        .hero-image-1, .hero-image-2, .hero-image-3 { width: 150px; }
    }

    @media (max-width: 768px) {
        .hero-section { flex-direction: column; text-align: center; }
        .hero-content { margin-bottom: 30px; }
        .hero-title { font-size: 40px; }
        .hero-description { font-size: 16px; max-width: 100%; }
        .hero-image-1 { top: 5%; left: 60%; width: 120px; }
        .hero-image-2 { top: 35%; left: 70%; width: 150px; }
        .hero-image-3 { top: 65%; left: 80%; width: 120px; }
        .scrolling-text-section { height: 40px; }
        .scrolling-text .text-segment { font-size: 14px; padding: 0 20px; }
    }

    @media (max-width: 480px) {
        .hero-title { font-size: 32px; }
        .hero-description { font-size: 14px; }
        .hero-image-1, .hero-image-2, .hero-image-3 { width: 100px; }
        .scrolling-text-section { height: 35px; }
        .scrolling-text .text-segment { font-size: 12px; padding: 0 15px; }
    }
</style>

<div class="container">
    <div class="hero-section">
        <div class="hero-content">
            <div class="hero-tagline fade-in">
                <h2>You Evolve</h2>
                <video src="assets/images/home_gif.mp4" autoplay loop muted class="gif"></video>
            </div>
            <h1 class="hero-title fade-in">
                <span class="highlight">WE</span>
                <span class="animated-text-container">
                    <span class="animated-text" id="animated-text">DESIGN!</span>
                </span>
            </h1>
            <p class="hero-description fade-in">
                Your growth needs more than support it requires a clear, strategic approach. We provide customized IT consulting in New York, delivering the best IT services to help your business stay competitive and future ready.
            </p>
            <a href="/contact" class="hero-button fade-in">
                Let's plan your project
            </a>
        </div>
        <div class="hero-images-wrapper">
            <div class="hero-image-container fade-in">
            <img src="assets/images/Hero%20section%20image.png" alt="Hero Image" class="hero-image">
            </div>
        </div>
        <!--<div class="hero-image-2-container">
            <img src="assets/images/Hero Section (2).png" alt="Hero Image 2" class="hero-image-2">
        </div>-->
    </div>
</div>

<!-- Scrolling Text Section -->
<div class="scrolling-text-section">
    <div class="scrolling-text-container">
        <div class="scrolling-text">
            <span class="text-segment">Transforming ideas into powerful digital growth</span>
            <span class="text-segment" aria-hidden="true">Transforming ideas into powerful digital growth</span>
            <span class="text-segment" aria-hidden="true">Transforming ideas into powerful digital growth</span>
        </div>
    </div>
</div>

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
            scrollingText.style.animation = 'none';
            scrollingText.offsetHeight; // Trigger reflow
            scrollingText.style.animation = 'scroll-left 20s linear infinite';
        }, 100);
    };
    
    window.addEventListener('resize', handleResize);
    
    // Cleanup on page unload
    window.addEventListener('beforeunload', () => {
        window.removeEventListener('resize', handleResize);
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const words = ['DESIGN!', 'DEVELOP!', 'DEPLOY!'];
    const textElement = document.getElementById('animated-text');
    if (!textElement) return;
    
    let currentWordIndex = 0;
    let isDeleting = false;
    let charIndex = 0;
    let typingSpeed = 100;
    let delayBeforeDelete = 2000;
    let delayBeforeType = 500;

    function type() {
        const currentWord = words[currentWordIndex];
        
        if (isDeleting) {
            textElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typingSpeed = 50;
        } else {
            textElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typingSpeed = 100;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            typingSpeed = delayBeforeDelete;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            currentWordIndex = (currentWordIndex + 1) % words.length;
            typingSpeed = delayBeforeType;
        }

        setTimeout(type, typingSpeed);
    }

    setTimeout(type, 1000);
});
</script>