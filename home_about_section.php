<!-- about.php -->
<style>
    .about-section {
        margin: 40px 0;
    }
    
    .about-container {
        display: flex;
        align-items: center;
        gap: 40px;
    }
    
    .about-text {
        flex: 1;
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
                    There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't even look slightly believable. If you are going to use a passage of Lorem ipsum.
                </p>
                <a href="contact.php" class="btn fade-in" style="animation-delay: 0.4s;">Contact Us</a>
            </div>
            <div class="about-image">
                <img src="assets/images/home_about_image.png" alt="About Image" class="fade-in" style="animation-delay: 0.6s;">
            </div>
        </div>
    </div>
</div>