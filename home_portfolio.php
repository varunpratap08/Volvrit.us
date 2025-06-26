<!-- portfolio.php -->
<style>
    .portfolio-section {
        padding: 80px 0;
        width: 100%;
        box-sizing: border-box;
        overflow: hidden;
    }

    .portfolio-badge {
        display: inline-flex;
        align-items: center;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        padding: 6px 16px;
        margin-bottom: 15px;
        color: #959595;
        font-size: 14px;
    }

    .portfolio-badge svg {
        margin-right: 8px;
        flex-shrink: 0;
    }

    .section-title {
        font-family: 'Poppins', sans-serif;
        font-size: 30px;
        font-weight: 600;
        line-height: 1.3;
        margin: 15px 0 25px;
    }

    .heading-line {
        display: block;
        margin-bottom: 5px;
    }

    .gradient-text {
        background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        display: inline-block;
    }

    .portfolio-description {
        font-size: 16px;
        line-height: 1.6;
        color: #666;
        margin-bottom: 40px;
        max-width: 800px;
    }

    .portfolio-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 30px;
        width: 100%;
        max-width: 1300px;
        margin: 0 auto;
        padding: 0 20px;
        box-sizing: border-box;
    }

    .portfolio-card {
        background: #F4F4F4;
        border-radius: 20px;
        border: 1px solid #D3D3D3;
        overflow: hidden;
        width: 100%;
        max-width: 403px;
        height: 444px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        position: relative;
        margin: 0 auto;
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .portfolio-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        border-radius: 20px;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1;
    }

    .portfolio-content {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        padding: 20px;
        background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);
        z-index: 2;
        color: white;
        border-radius: 0 0 20px 20px;
    }
    
    .portfolio-title {
        color: white !important;
        margin: 0 0 10px 0;
        font-size: 20px;
        text-shadow: 0 2px 4px rgba(0,0,0,0.5);
    }
    
    .tech-tags {
        display: flex;
        gap: 8px;
        margin-top: 8px;
        flex-wrap: wrap;
    }
    
    .tech-tag {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 103px;
        height: 32px;
        border: 0.79px solid #cccccc;
        border-radius: 23.65px;
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(5px);
        color: white;
        font-size: 12px;
        font-weight: 400;
        text-shadow: 0 1px 2px rgba(0,0,0,0.3);
    }

    .portfolio-title {
        font-size: 18px;
        font-weight: 600;
        margin: 15px 0 10px;
        color: #333;
    }

    /* Responsive Styles */
    @media (max-width: 1250px) {
        .portfolio-grid {
            grid-template-columns: repeat(2, 1fr);
            justify-items: center;
            max-width: 900px;
        }
        
        .portfolio-card {
            width: 100%;
            max-width: 403px;
        }
        
        .section-title {
            font-size: 28px;
        }
    }

    @media (max-width: 991.98px) {
        .portfolio-section {
            padding: 60px 0;
        }
        
        .section-title {
            font-size: 26px;
            margin: 15px 0 20px;
        }
        
        .portfolio-description {
            font-size: 15px;
            margin-bottom: 30px;
        }
        
        .portfolio-grid {
            gap: 25px;
        }
    }

    @media (max-width: 900px) {
        .portfolio-grid {
            grid-template-columns: 1fr;
            max-width: 403px;
        }
        
        .portfolio-card {
            width: 100%;
            max-width: 403px;
            height: 444px;
        }
    }
    
    @media (max-width: 767.98px) {
        .portfolio-section {
            padding: 40px 0;
        }
        
        .section-title {
            font-size: 24px;
            text-align: center;
            padding: 0 15px;
        }
        
        .portfolio-badge {
            font-size: 13px;
            padding: 5px 14px;
            margin: 0 auto 15px;
            display: table;
        }
        
        .portfolio-badge svg {
            width: 12px;
            height: 12px;
        }
        
        .portfolio-description {
            font-size: 14px;
            margin-bottom: 25px;
            padding: 0 15px;
            text-align: center;
        }
        
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 20px;
            max-width: 100%;
            padding: 0 15px;
            margin: 0 auto;
        }
        
        .portfolio-card {
            width: 100%;
            max-width: 450px;
            height: auto;
            aspect-ratio: 1/1.1;
            margin: 0 auto;
        }
    }

    @media (max-width: 575.98px) {
        .portfolio-section .container {
            text-align: center;
            padding: 0 15px;
        }
        
        .portfolio-badge {
            margin: 0 auto 15px;
            display: inline-flex;
            justify-content: center;
        }
        
        .section-title {
            font-size: 24px;
            line-height: 1.3;
            padding: 0;
            margin: 15px auto 20px;
            text-align: center;
        }
        
        .heading-line {
            display: block;
            margin-bottom: 5px;
        }
        
        .portfolio-description {
            text-align: center;
            margin: 0 auto 25px;
            padding: 0 10px;
        }
        
        .portfolio-badge {
            font-size: 12px;
            padding: 4px 16px;
        }
        
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 25px;
            padding: 0;
            max-width: 100%;
        }
        
        .portfolio-card {
            width: 100%;
            max-width: 100%;
            aspect-ratio: 16/18;
        }
        
        .portfolio-content {
            padding: 15px;
        }
        
        .portfolio-title {
            font-size: 18px;
        }
    }
</style>

<div class="portfolio-section">
    <div class="container">
        <div class="portfolio-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>What we have done</span>
        </div>
        
        <h2 class="section-title">
            <div class="heading-line">Delivering Smart IT Solutions</div>
            <div class="gradient-text">NYC Businesses Trust</div>
        </h2>
        
        <p class="portfolio-description fade-in" style="animation-delay: 0.2s;">
        We build powerful websites and secure mobile apps that make a real difference. Finch Locks is one of our success stories. where we combined design, development, and strategy to create a smart, scalable solution With our IT consulting New York experience and modern tools, we deliver reliable and custom IT solutions in NYC that help businesses grow.        </p>
        
        <div class="portfolio-grid">
            <div class="portfolio-card fade-in">
                <img src="assets/images/portfolio(1).jpg" alt="Finch 1" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Kallakuri Foods</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">React Native</span>
                        <span class="tech-tag">Node.js</span>
                        <!--<span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
            
            <div class="portfolio-card fade-in" style="animation-delay: 0.2s">
                <img src="assets/images/portfolio(2).jpg" alt="Finch 2" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Saturn Advertisement</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">React</span>
                        <span class="tech-tag">Node.js</span>
                        <!--<span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
            
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="assets/images/portfolio(3).jpg" alt="Finch 3" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Pdf Scanner</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">React Native</span>
                       <!-- <span class="tech-tag">Node.js</span>
                        <span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="assets/images/portfolio(4).jpg" alt="Finch 4" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Dostkicar</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">React.js</span>
                        <span class="tech-tag">Node.js</span>
                       <!-- <span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="assets/images/portfolio(5).jpg" alt="Finch 5" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Finch Locks</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">HTML</span>
                        <span class="tech-tag">CSS</span>
                        <span class="tech-tag">JavaScript</span>
                        <span class="tech-tag">PHP</span>
                    </div>
                </div>
            </div>
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="assets/images/portfolio_image.png" alt="Finch 5" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Amit Sales</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Node.js</span>
                       <!-- <span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="assets/images/portfolio_cricket.png" alt="Finch 5" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Cricket Academy</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Node.js</span>
                       <!-- <span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="assets/images/portfolio_wallet.png" alt="Finch 5" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">C2C</h3>
                    <div class="tech-tags">
                        <span class="tech-tag">Flutter</span>
                        <span class="tech-tag">Laravel</span>
                       <!-- <span class="tech-tag">MongoDB</span>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>