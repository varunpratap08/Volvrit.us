// Initialize scrolling text with slower speed
document.addEventListener('DOMContentLoaded', function() {
    initScrollingText();
});

function initScrollingText() {
    const scrollingText = document.querySelector('.scrolling-text');
    const container = document.querySelector('.scrolling-text-container');
    
    if (!scrollingText || !container) {
        console.error('Scrolling text elements not found');
        return;
    }
    
    // Make text visible immediately
    scrollingText.style.opacity = '1';
    scrollingText.style.visibility = 'visible';
    
    // Set initial animation duration to 40s for slower speed
    const animationDuration = 40; // seconds
    
    // Force reflow and start animation
    const startAnimation = () => {
        // Reset any existing animations
        scrollingText.style.animation = 'none';
        scrollingText.offsetHeight; // Trigger reflow
        
        // Start the animation with slower speed
        scrollingText.style.animation = `scroll-left ${animationDuration}s linear infinite`;
        scrollingText.style.animationPlayState = 'running';
        
        // Make sure it's visible
        scrollingText.style.opacity = '1';
        scrollingText.style.visibility = 'visible';
    };
    
    // Initial start with small delay to ensure rendering is complete
    setTimeout(startAnimation, 50);
    
    // Pause on hover
    container.addEventListener('mouseenter', function() {
        scrollingText.style.animationPlayState = 'paused';
    });
    
    container.addEventListener('mouseleave', function() {
        scrollingText.style.animationPlayState = 'running';
    });
    
    // Handle window resize
    let resizeTimer;
    window.addEventListener('resize', function() {
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(function() {
            startAnimation();
        }, 100);
    });
}
