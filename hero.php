<!-- hero.php -->
<link rel="stylesheet" href="css/hero.css">
<link href="https://fonts.googleapis.com/css2?family=Amita:wght@400;700&display=swap" rel="stylesheet">

<style>
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
    
    .tagline-gif {
        width: 48px;
        height: 48px;
        object-fit: contain;
    }
</style>

<div >
    <div class="container">
        
        <div class="hero-section">
            <div class="hero-content">
                <div class="hero-tagline fade-in">
                    <h2>You Evolve</h2>
                    <img src="assets/images/evolve-gif.gif" alt="Evolution" class="tagline-gif">
                </div>
                <h1 class="hero-title fade-in">
                    <span class="highlight">WE</span> 
                    <span class="animated-text-container">
                        <span class="animated-text" id="animated-text">DESIGN!</span>
                    </span>
                </h1>
                <p class="hero-description fade-in">
                    Lorem ipsum has been the industry's standard dummy text.
                </p>
                <a href="contact.php" class="hero-button fade-in">
                    Let's plan your project
                </a>
            </div>
            <div class="hero-images-wrapper">
                <div class="hero-image-container fade-in">
                    <img src="assets/images/Hero%20section%20image.png" alt="Hero Image" class="hero-image">
                </div>
               
            </div>
        </div>
    </div>
</div>

</div>

<!-- Scrolling Text Section -->
<div class="scrolling-text-section">
    <div class="scrolling-text-container">
        <div class="scrolling-text">
            <span class="text-segment">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
            <span class="text-segment" aria-hidden="true">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
            <span class="text-segment" aria-hidden="true">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</span>
        </div>
    </div>
</div>

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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Hero text animation
    const words = ['DESIGN!', 'DEVELOP!', 'DEPLOY!'];
    const textElement = document.getElementById('animated-text');
    if (!textElement) return; // Exit if element not found
    
    let currentWordIndex = 0;
    let isDeleting = false;
    let charIndex = 0;
    let typingSpeed = 100;
    let delayBeforeDelete = 2000;
    let delayBeforeType = 500;

    function type() {
        const currentWord = words[currentWordIndex];
        
        if (isDeleting) {
            // Delete characters
            textElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typingSpeed = 50;
        } else {
            // Type characters
            textElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typingSpeed = 100;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            // Word is fully typed, wait before deleting
            isDeleting = true;
            typingSpeed = delayBeforeDelete;
        } else if (isDeleting && charIndex === 0) {
            // Word is fully deleted, move to next word
            isDeleting = false;
            currentWordIndex = (currentWordIndex + 1) % words.length;
            typingSpeed = delayBeforeType;
        }

        setTimeout(type, typingSpeed);
    }


    // Start the animation after a short delay
    setTimeout(type, 1000);
});
</script>