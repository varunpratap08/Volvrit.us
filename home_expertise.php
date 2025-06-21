<!-- expertise.php -->
<div class="container">
    <div class="section-intro">
        <svg class="section-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
            <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        <span class="section-label">Why Choose us</span>
    </div>
    <h2 class="fade-in expertise-heading">
        <span class="heading-line">From Concept to launch</span>
        <span class="gradient-text">We make it simple, scalable and successful</span>
    </h2>
    <p class="fade-in" style="animation-delay: 0.2s; margin-bottom: 40px;">
    Choosing the right tech partner matters. At the heart of our IT solutions NYC, we combine innovation, skill, and strategy to help your business grow.
    </p>
    <div class="expertise-grid">
        <!-- First Row -->
        <div class="expertise-row">
            <!-- Future Ready Solution Card (Smaller) -->
            <div class="expertise-card fade-in small-card">
                <div class="card-image">
                    <img src="assets/images/home_wcu1.png" alt="Future Solution">
                    <span class="deco-dot deco-dot-orange"></span>
                </div>
                <h3>Future Ready Solution</h3>
                <p>We develop modern, scalable systems built to support future upgrades ideal for growing startups and enterprises. Our IT consulting experts in New York ensure long-term value for your business.</p>
            </div>
            <!-- Growth-Ready Architecture Card (Larger) -->
            <div class="expertise-card fade-in large-card" style="animation-delay: 0.2s;">
                <div class="card-image">
                    <img src="assets/images/home_wcu2.png" alt="Growth Ready">
                    <span class="deco-line deco-line-blue"></span>
                </div>
                <h3>Growth-Ready Architecture</h3>
                <p>Our solutions are built with long-term growth in mind—ensuring your tech can handle tomorrow’s demand. We align tech with business goals to create high-performing platforms.</p>
            </div>
        </div>
        <!-- Second Row -->
        <div class="expertise-row">
            <!-- Professional and Skilled Team Card (Smaller) -->
            <div class="expertise-card fade-in small-card" style="animation-delay: 0.4s;">
                <div class="card-image">
                    <img src="assets/images/home_wcu4.png" alt="Professional Team">
                    <span class="deco-dot deco-dot-purple"></span>
                </div>
                <h3>Professional and Skilled Team</h3>
                <p>Work with experienced developers, designers, and strategists who bring the best IT services in New York right to your project. We’re with you every step of the way from initial planning to launch and ongoing support.</p>
            </div>
            <!-- Full-Stack Expertise Card (Larger) -->
            <div class="expertise-card fade-in large-card" style="animation-delay: 0.6s;">
                <div class="card-image">
                    <img src="assets/images/home_wcu3.png" alt="Full Stack Expertise">
                    <span class="deco-dot deco-dot-green"></span>
                </div>
                <h3>Full-Stack Expertise</h3>
                <p>From frontend design to backend systems, we handle it all. Our full-stack team delivers fast, secure, and custom solutions tailored to your business needs.</p>
            </div>
        </div>
    </div>
</div>

<style>
    /* Expertise Section Heading */
    .expertise-heading {
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 26px;
        line-height: 1.2;
        letter-spacing: 0%;
        margin: 15px 0 25px;
        display: flex;
        flex-direction: column;
    }
    
    .expertise-heading .heading-line {
        display: block;
        color: #333;
        margin-bottom: 5px;
    }
    
    .expertise-heading .gradient-text {
        display: block;
        background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }
    
    @media (max-width: 768px) {
        .expertise-heading {
            font-size: 22px;
            line-height: 1.3;
        }
    }
    
    @media (max-width: 480px) {
        .expertise-heading {
            font-size: 20px;
        }
    }
    /* Container */
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;
    }

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .fade-in {
        opacity: 0;
        animation: fadeInUp 1s ease forwards;
    }

    /* Section Intro */
    .section-intro {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        font-size: 14px;
        padding: 6px 16px;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        margin-bottom: 15px;
        background: #fff;
    }
    
    .section-intro .section-label {
        color: #959595 !important;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.2;
        margin: 0;
        padding: 0;
    }
    
    .section-intro .section-icon {
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        display: inline-block;
        vertical-align: middle;
    }

    /* Headings */
    h2 {
        font-size: 32px;
        font-weight: 600;
        color: #333;
        line-height: 1.3;
        margin: 10px 0;
    }

    h2 span {
        color: #007BFF;
    }

    /* Section Description */
    .container > p {
        font-size: 16px;
        font-weight: 300;
        color: #666;
        max-width: 700px;
        line-height: 1.6;
        margin-bottom: 40px;
    }

    /* Expertise Grid Layout */
    .expertise-grid {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Expertise Row */
    .expertise-row {
        display: grid;
        grid-template-columns: 2fr 3fr; /* 40% for small card, 60% for large card */
        gap: 20px;
    }

    /* Expertise Card Styling */
    .expertise-card {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        display: flex;
        flex-direction: column;
        text-align: center;
        transition: all 0.3s ease-in-out;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .expertise-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        border-color: rgba(0,0,0,0.1);
    }
    
    .expertise-card::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
        transform: scaleX(0);
        transform-origin: left;
        transition: transform 0.3s ease-in-out;
    }
    
    .expertise-card:hover::after {
        transform: scaleX(1);
    }

    /* Card Image */
    .card-image {
        position: relative;
        margin-bottom: 20px;
        height: 120px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease-in-out;
    }
    
    .expertise-card:hover .card-image {
        transform: scale(1.1);
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: contain; /* Ensure the entire image is visible */
        border-radius: 10px 10px 0 0;
    }

    /* Decorative Elements */
    .deco-dot {
        position: absolute;
        border-radius: 50%;
    }

    .deco-dot-orange {
        width: 20px;
        height: 20px;
        background: #ff6f61;
        top: 10px;
        left: 10px;
    }

    .deco-line {
        position: absolute;
    }

    .deco-line-blue {
        width: 30px;
        height: 5px;
        background: #3b82f6;
        bottom: 10px;
        right: 10px;
    }

    .deco-dot-purple {
        width: 20px;
        height: 20px;
        background: #a855f7;
        top: 10px;
        right: 10px;
    }

    .deco-dot-green {
        width: 20px;
        height: 20px;
        background: #28a745;
        bottom: 10px;
        left: 10px;
    }

    /* Card Content */
    .expertise-card h3 {
        font-size: 18px;
        margin: 10px 0;
        color: #333;
        transition: color 0.3s ease-in-out;
    }
    
    .expertise-card:hover h3 {
        color: #2563EB;
    }

    .expertise-card p {
        font-size: 14px;
        color: #666;
        line-height: 1.6;
        margin: 0;
        transition: color 0.3s ease-in-out;
    }
    
    .expertise-card:hover p {
        color: #555;
    }

    /* Responsive Adjustments */
    @media (max-width: 1200px) {
        .container {
            padding: 30px 0;
        }
        
        .expertise-grid {
            gap: 15px;
        }
    }
    
    @media (max-width: 992px) {
        .expertise-row {
            gap: 15px;
        }
        
        .expertise-card {
            padding: 15px;
        }
        
        .card-image {
            height: 130px;
        }
        
        .expertise-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }
        
        .expertise-card p {
            font-size: 13px;
        }
    }
    
    @media (max-width: 768px) {
        .expertise-row {
            grid-template-columns: 1fr;
            gap: 20px;
        }
        
        .expertise-card {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
            text-align: left;
        }
        
        .card-image {
            height: 160px;
        }
        
        .section-intro {
            font-size: 13px;
            padding: 5px 14px;
        }
        
        .expertise-heading {
            font-size: 22px;
            margin: 10px 0 20px;
        }
        
        .container > p {
            margin-bottom: 30px;
            font-size: 15px;
        }
        
        .deco-dot-orange,
        .deco-dot-purple,
        .deco-dot-green {
            width: 16px;
            height: 16px;
        }
    }
    
    @media (max-width: 576px) {
        .container {
            width: 95%;
            padding: 25px 0;
        }
        
        .card-image {
            height: 140px;
        }
        
        .section-intro {
            font-size: 12px;
            padding: 4px 12px;
        }
        
        .expertise-heading {
            font-size: 20px;
        }
        
        .expertise-card h3 {
            font-size: 17px;
        }
        
        .expertise-card p {
            font-size: 13px;
        }
        
        .deco-dot-orange,
        .deco-dot-purple,
        .deco-dot-green {
            width: 14px;
            height: 14px;
        }
    }
    
    @media (max-width: 400px) {
        .card-image {
            height: 120px;
        }
        
        .section-intro {
            font-size: 11px;
            padding: 3px 10px;
        }
        
        .expertise-heading {
            font-size: 18px;
        }
        
        .expertise-card h3 {
            font-size: 16px;
        }
        
        .expertise-card {
            padding: 12px;
        }
        
        .deco-dot-orange,
        .deco-dot-purple,
        .deco-dot-green {
            width: 12px;
            height: 12px;
            top: 8px;
            left: 8px;
        }
        
        .deco-line-blue {
            width: 20px;
            height: 3px;
        }
    }
</style>