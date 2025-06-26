<!-- about.php -->
<style>
    @keyframes slideInLeft {
        from {
            transform: translateX(-100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @keyframes slideInRight {
        from {
            transform: translateX(100px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    .about-section {
        margin: 40px 0;
        overflow: hidden;
    }
    
    .about-container {
        display: flex;
        align-items: center;
        gap: 40px;
    }
    
    .about-text {
        flex: 1;
        opacity: 0;
        transform: translateX(-100px);
        transition: transform 0.8s ease-out, opacity 0.8s ease-out;
        transition-delay: 0.3s;
    }
    
    .animate .about-text {
        transform: translateX(0);
        opacity: 1;
    }
    
    .about-badge {
        display: inline-flex;
        align-items: center;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        padding: 4px 15px;
        margin-bottom: 15px;
        color: #959595;
        font-size: 14px;
    }
    
    .about-badge svg {
        margin-right: 8px;
        flex-shrink: 0;
    }
    
    .about-heading {
        font-size: 32px;
        line-height: 1.3;
        margin: 15px 0;
    }
    
    .about-image {
        flex: 1;
        text-align: center;
        opacity: 0;
        transform: translateX(100px);
        transition: transform 0.8s ease-out, opacity 0.8s ease-out;
    }
    
    .animate .about-image {
        transform: translateX(0);
        opacity: 1;
        transition-delay: 0.5s;
    }
    
    .about-image img {
        max-width: 100%;
        height: auto;
        display: block;
    }
    
    .btn {
        display: inline-block;
        padding: 10px 25px;
        background-color: #007bff;
        color: white;
        text-decoration: none;
        border-radius: 24px;
        margin-top: 15px;
        transition: background-color 0.3s ease;
    }
    
    .btn:hover {
        background-color: #218838;
    }
    
    /* Responsive Styles */
    @media (max-width: 991.98px) {
        .about-heading {
            font-size: 28px;
        }
        
        .about-container {
            gap: 30px;
        }
    }
    
    @media (max-width: 767.98px) {
        .about-container {
            flex-direction: column;
        }
        
        .about-image {
            order: -1;
            margin-bottom: 30px;
        }
        
        .about-heading {
            font-size: 26px;
        }
        
        .about-text {
            text-align: center;
        }
        
        .about-badge {
            margin-left: auto;
            margin-right: auto;
        }
    }
    
    @media (max-width: 575.98px) {
        .about-heading {
            font-size: 24px;
        }
        
        .about-badge {
            font-size: 13px;
            padding: 3px 12px;
        }
        
        .about-badge svg {
            width: 12px;
            height: 12px;
        }
    }
</style>

<script>
// Animation on page load
document.addEventListener('DOMContentLoaded', function() {
    const aboutSection = document.querySelector('.about-section');
    const aboutText = document.querySelector('.about-text');
    const aboutImage = document.querySelector('.about-image');
    
    function resetAnimations() {
        // Remove animations
        aboutText.style.animation = 'none';
        aboutImage.style.animation = 'none';
        
        // Force reflow
        void aboutText.offsetWidth;
        void aboutImage.offsetWidth;
        
        // Reset styles
        aboutText.style.opacity = '0';
        aboutText.style.transform = 'translateX(-100px)';
        aboutImage.style.opacity = '0';
        aboutImage.style.transform = 'translateX(100px)';
        
        // Re-add animations after a small delay
        setTimeout(() => {
            aboutText.style.opacity = '1';
            aboutText.style.transform = 'translateX(0)';
            aboutImage.style.opacity = '1';
            aboutImage.style.transform = 'translateX(0)';
        }, 50);
    }
    
    // Initial animation
    setTimeout(resetAnimations, 300);
    
    // Reset animation on hover
    aboutSection.addEventListener('mouseenter', resetAnimations);
});
</script>

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
                    From vision to launch, from startups to scale ups we create digital solutions that drive business forward
                </h2>
                <p class="fade-in" style="animation-delay: 0.2s; margin: 20px 0;">
                At every stage from startup launches to enterprise growth. we create digital solutions that power innovation. Our expert team blends great teamwork, the latest tech, and perfect analytics to help you scale with confidence. As a trusted name in IT consulting New York, we’re known for delivering the best IT services in New York, tailored to meet your goals.                </p>
                <a href="/contact" class="btn fade-in" style="animation-delay: 0.4s;">Contact Us</a>
            </div>
            <div class="about-image">
                <img src="assets/images/home_about_image.png" alt="About Image" class="fade-in" style="animation-delay: 0.6s;">
            </div>
        </div>
    </div>
</div>