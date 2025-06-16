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
        <span class="heading-line">From idea to execution</span>
        <span class="gradient-text">We simplify, build, and scale</span>
    </h2>
    <p class="fade-in" style="animation-delay: 0.2s; margin-bottom: 40px;">
        There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t even look slightly believable.
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
                <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration.</p>
            </div>
            <!-- Growth-Ready Architecture Card (Larger) -->
            <div class="expertise-card fade-in large-card" style="animation-delay: 0.2s;">
                <div class="card-image">
                    <img src="assets/images/home_wcu2.png" alt="Growth Ready">
                    <span class="deco-line deco-line-blue"></span>
                </div>
                <h3>Growth-Ready Architecture</h3>
                <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration.</p>
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
                <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration.</p>
            </div>
            <!-- Full-Stack Expertise Card (Larger) -->
            <div class="expertise-card fade-in large-card" style="animation-delay: 0.6s;">
                <div class="card-image">
                    <img src="assets/images/home_wcu3.png" alt="Full Stack Expertise">
                    <span class="deco-dot deco-dot-green"></span>
                </div>
                <h3>Full-Stack Expertise</h3>
                <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration.</p>
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
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    /* Card Image */
    .card-image {
        position: relative;
        margin: -20px -20px 15px -20px;
        height: 150px; /* Fixed height for consistency */
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
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin: 15px 0;
    }

    .expertise-card p {
        font-size: 14px;
        font-weight: 300;
        color: #666;
        line-height: 1.5;
        margin: 0 0 15px;
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