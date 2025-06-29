<!-- services.php -->
<div>
    <div class="container">
        <div class="section-intro">
            <svg class="section-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>What we do</span>
        </div>
        <h2 class="services-heading">
            <span class="heading-line">From idea to execution</span>
            <span class="gradient-text">Custom IT Solutions NYC That Work for You</span>
        </h2>
        <p class="fade-in" style="animation-delay: 0.2s; margin-bottom: 40px;">
        We simplify, build, and scale digital platforms helping you grow smarter with reliable tech. As a leader in IT consulting New York, we offer the best IT services in New York designed to match your business goals.        </p>
        <div class="services-grid">
            <!-- App Development Card -->
            <div class="service-card app-card fade-in">
                <div class="card-image">
                    <img src="assets/images/app_development.jpg" alt="App Development">
                    <!-- Decorative Elements for App Development -->
                    <span class="deco-dot deco-dot-1"></span>
                    <span class="deco-dot deco-dot-2"></span>
                    <span class="deco-dot deco-dot-3"></span>
                </div>
                <h3>App Development</h3>
                <p>Build powerful mobile apps with intuitive design and reliable performance—tailored for business success.</p>
                <a href="/contact.php" class="btnn">Contact Us</a>
            </div>
            <!-- Right Column Wrapper for Other Cards -->
            <div class="right-cards-wrapper">
                <!-- Top Row: Web Development and UI/UX Design -->
                <div class="top-cards">
                    <!-- Web Development Card -->
                    <div class="service-card fade-in" style="animation-delay: 0.2s;">
                        <div class="card-image">
                            <img src="assets/images/home_webdevelopment.png" alt="Web Development">
                        </div>
                        <h3>Web Development</h3>
                        <p>Create responsive, secure websites that drive engagement and deliver results.</p>
                        <a href="/contact.php" class="btn">Contact Us</a>
                    </div>
                    <!-- UI/UX Design Card -->
                    <div class="service-card fade-in" style="animation-delay: 0.4s;">
                        <div class="card-image">
                            <img src="assets/images/home_services_card.png" alt="UI/UX Design">
                        </div>
                        <h3>CRM Development</h3>
                        <p>Create responsive, secure websites that drive engagement and deliver results.</p>
                        <a href="/contact.php" class="btn">Contact Us</a>
                    </div>
                </div>
                <!-- Bottom Row: AI Development -->
                <div class="bottom-card">
                    <!-- AI Development Card -->
                    <div class="service-card fade-in ai-development-card" style="animation-delay: 0.6s;">
                        <div class="ai-card-content">
                            <div class="ai-text-content">
                                <h3>AI Development</h3>
                                <p>Unlock the future with smart AI-driven tools that enhance operations and decision-making.</p>
                                <a href="/contact.php" class="btn">Contact Us</a>
                            </div>
                            <div class="ai-card-image">
                                <img src="assets/images/home_AIDevelopment.png" alt="AI Development">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Grid Background 
    .grid-bg {
        background-image: url('assets/images/background_grid.png');
        background-color: #F5F7FA;
        padding: 60px 0;
    }*/

    /* Container */
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        padding: 40px 0;
        box-sizing: border-box;
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

    /* Section Label */
    .section-label {
        color: #28a745;
        font-size: 14px;
        font-weight: 400;
        margin-bottom: 10px;
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

    /* Services Grid */
    .services-grid {
        display: grid;
        gap: 20px;
        width: 100%;
    }

    /* Tablet and up (768px) */
    @media (min-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr 1fr;
            grid-template-rows: auto auto;
        }
        
        .app-card {
            grid-row: 1 / 3;
        }
        
        .right-cards-wrapper {
            grid-column: 2;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        
        .top-cards {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
    }
    
    /* Desktop (1024px and up) */
    @media (min-width: 1024px) {
        .services-grid {
            grid-template-columns: 2fr 3fr;
            gap: 30px;
        }
        
        .right-cards-wrapper {
            gap: 30px;
        }
        
        .top-cards {
            gap: 30px;
        }
    }

    /* Tablet (768px - 1023px) */
    @media (min-width: 768px) and (max-width: 1023px) {
        .services-grid {
            grid-template-columns: 1fr;
            gap: 25px;
        }
        
        .top-cards {
            grid-template-columns: 1fr 1fr;
            gap: 25px;
        }
        
        .service-card {
            margin-bottom: 0;
        }
        
        .ai-development-card {
            max-width: 100%;
        }
        
        .ai-card-image {
            width: 40%;
        }
    }
    
    /* Small Tablets (600px - 767px) */
    @media (min-width: 600px) and (max-width: 767px) {
        .top-cards {
            display: none;
        }
        
        .ai-card-image {
            width: 50%;
        }
        
        .service-card {
            padding: 1.25rem;
        }
    }
    
    /* Mobile (up to 767px) */
    @media (max-width: 767px) {
        .container {
            width: 100%;
            padding: 20px 15px;
            box-sizing: border-box;
            margin: 0 auto;
        }
        
        .services-grid {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding: 0;
        }
        
        .services-heading {
            font-size: 24px;
            line-height: 1.3;
            text-align: center;
            margin-bottom: 15px;
        }
        
        .section-intro {
            text-align: center;
            margin-bottom: 15px;
        }
        
        .service-card {
            width: 100%;
            max-width: 100%;
            margin: 0 0 25px 0;
            padding: 20px;
            box-sizing: border-box;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .top-cards {
            display: none;
        }
        
        .right-cards-wrapper {
            width: 100%;
            margin: 0;
            padding: 0;
        }
        
        .ai-development-card .ai-card-content {
            flex-direction: column-reverse;
        }
        
        .card-image {
            height: 180px;
            margin: -20px -20px 20px -20px;
            width: calc(100% + 40px);
            border-radius: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow: hidden;
        }
        
        .ai-card-image {
            height: 180px;
            margin: -20px -20px 20px -20px;
            width: calc(100% + 40px);
            border-radius: 0;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            overflow: hidden;
        }
        
        .ai-text-content {
            padding: 0;
            width: 100%;
        }
        
        .service-card h3 {
            font-size: 18px;
            margin: 0 0 10px 0;
            line-height: 1.3;
        }
        
        .service-card p {
            font-size: 14px;
            line-height: 1.5;
            margin: 0 0 20px 0;
            color: #555;
        }
        
        .btn {
            width: 100%;
            text-align: center;
            padding: 12px 20px;
            font-size: 15px;
            margin-top: auto;
        }
        
        .app-card .btn {
            margin: 15px 0 0 20px;
            width: calc(100% - 40px);
            margin-right: 10px;
            margin-bottom: 5px;
            max-width: calc(100% - 40px);
        }
    }
    
    /* Small Mobile Devices (up to 375px) */
    @media (max-width: 375px) {
        .container {
            padding: 15px 10px;
        }
        
        .services-heading {
            font-size: 22px;
        }
        
        .service-card h3 {
            font-size: 19px;
        }
        
        .service-card p {
            font-size: 14px;
            line-height: 1.5;
        }
        
        .card-image,
        .ai-card-image {
            height: 180px;
        }
        
        .btn {
            padding: 10px 15px;
            font-size: 14px;
        }
    }

    /* Right Cards Wrapper */
    .right-cards-wrapper {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Top Row: Web Development and UI/UX Design */
    .top-cards {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 20px;
    }
    
    .top-cards .service-card {
        display: flex;
        flex-direction: column;
        height: 100%;
    }
    
    .top-cards .card-image {
        flex: 0 0 auto;
    }
    
    .top-cards .service-card h3,
    .top-cards .service-card p {
        flex: 0 0 auto;
    }
    
    .top-cards .service-card p {
        flex-grow: 1;
        margin: 10px 0 15px;
    }

    /* Bottom Row: AI Development */
    .bottom-card {
        display: flex;
    }
    
    /* AI Development Card Styling */
    .ai-development-card {
        padding: 0;
        max-width: 1000px;
        margin: 0 auto;
    }
    
    .ai-card-content {
        display: flex;
        align-items: stretch;
        height: 100%;
    }
    
    .ai-text-content {
        flex: 1;
        padding: 1.5rem;
        display: flex;
        flex-direction: column;
    }
    
    .ai-text-content .btn {
        margin-top: 15px;
    }
    
    .ai-card-image {
        width: 45%;
        display: flex;
        overflow: hidden;
        border-top-right-radius: 0.625rem;
        border-bottom-right-radius: 0.625rem;
        margin: -1px 0;
    }
    
    .ai-card-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }
    
    @media (max-width: 768px) {
        .ai-card-content {
            flex-direction: column-reverse;
        }
        
        .ai-card-image {
            width: 100%;
            height: 200px;
            border-radius: 0;
            border-top-left-radius: 0.625rem;
            border-top-right-radius: 0.625rem;
        }
        
        .ai-text-content {
            width: 100%;
        }
    }

    /* Service Card Styling */
    .service-card {
        background: #fff;
        padding: 1.5rem;
        border-radius: 0.625rem;
        box-shadow: 0 0.125rem 0.3125rem rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100%;
        margin-bottom: 0;
        box-sizing: border-box;
    }
    
    .service-card:last-child {
        margin-bottom: 0;
    }

    .app-card {
        grid-row: 1 / 3;
    }

    /* Card Image */
    .card-image:not(.ai-card-image) {
        position: relative;
        margin: -1.5rem -1.5rem 1.25rem -1.5rem;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        width: calc(100% + 3rem);
        height: 200px;
    }
    
    /* App Development Card */
    .app-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        padding: 0 0 20px 0;
    }
    
    .app-card .card-image {
        position: relative;
        width: calc(100% - 40px);
        height: 220px;
        overflow: hidden;
        margin: 0 20px 15px;
        padding: 0;
        box-sizing: border-box;
    }
    
    .app-card .card-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center top;
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        border-radius: 10px 10px 0 0;
        transition: transform 0.3s ease;
    }
    
    /* Center the image in App Development card */
    .app-card .card-image img {
        max-width: 80%;
        height: auto;
        object-fit: contain;
    }

    /* Adjust Image Height for Other Cards */
    .top-cards .card-image,
    .bottom-card .card-image {
        height: 180px;
    }

    /* Decorative Dots for App Development Card */
    .app-card .card-image {
        position: relative;
    }

    .deco-dot {
        position: absolute;
        border-radius: 50%;
    }

    .deco-dot-1 {
        width: 20px;
        height: 20px;
        background: #ff6f61;
        top: 10px;
        left: 10px;
    }

    .deco-dot-2 {
        width: 15px;
        height: 15px;
        background: #a855f7;
        top: 40px;
        left: 20px;
    }

    .deco-dot-3 {
        width: 25px;
        height: 25px;
        background: #3b82f6;
        bottom: 10px;
        left: 30px;
    }

    /* Card Content */
    .service-card h3 {
        font-size: 20px;
        font-weight: 600;
        color: #333;
        margin-bottom: 15px;
    }

    .app-card h3 {
        font-size: 1.5rem;
        margin: 20px 20px 12px;
        color: #1a1a1a;
        line-height: 1.3;
        padding: 0;
    }

    .service-card p {
        font-size: 14px;
        font-weight: 300;
        color: #666;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    .app-card p {
        margin: 0 20px 15px;
        color: #666;
        line-height: 1.5;
        flex-grow: 1;
        font-size: 15px;
        padding: 0;
    }

    /* Button */
    .section-intro {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        color: #959595;
        font-size: 14px;
        padding: 6px 12px;
        border: 1px solid #e0e0e0;
        border-radius: 20px;
        margin-bottom: 15px;
    }
    
    .section-icon {
        width: 16px;
        height: 16px;
    }

    .services-heading {
        display: flex;
        flex-direction: column;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 26px;
        line-height: 1.2;
        letter-spacing: 0%;
        margin: 15px 0 25px;
    }
    
    .heading-line {
        display: block;
        color: #333;
        margin-bottom: 5px;
    }
    
    .gradient-text {
        display: block;
        background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        color: transparent;
    }

    .service-card .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 400;
        transition: background 0.3s ease, transform 0.2s ease;
        align-self: flex-start;
        margin-top: 15px;
        width: auto;
        min-width: 120px;
    }
    .service-card .btnn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #007BFF;
        color: #fff;
        padding: 10px 20px;
        border-radius: 20px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 400;
        transition: background 0.3s ease, transform 0.2s ease;
        align-self: flex-start;
        margin-top: 15px;
        width: auto;
        min-width: 120px;
        margin-left: 5%;
    }

    .service-card .btn:hover {
        background: #0056b3;
    }

    /* Hover Effect */
    .service-card:hover {
        transform: translateY(-5px);
    }
    
    .service-card:hover .card-image img {
        transform: scale(1.05);
    }

    /* Responsive Image Heights */
    .card-image {
        height: 12.5rem;
    }
    
    /* Small devices (576px and up) */
    @media (min-width: 576px) {
        .card-image {
            height: 15.625rem;
        }
    }
    
    /* Medium devices (768px and up) */
    @media (min-width: 768px) {
        .top-cards .card-image,
        .bottom-card .card-image {
            height: 11.25rem;
        }
        
        .app-card .card-image {
            height: calc(100% + 3.75rem);
        }
    }
    
    /* Large devices (992px and up) */
    @media (min-width: 992px) {
        .top-cards .card-image,
        .bottom-card .card-image {
            height: 12.5rem;
        }
    }
    
    /* Extra large devices (1200px and up) */
    @media (min-width: 1200px) {
        .top-cards .card-image,
        .bottom-card .card-image {
            height: 15.625rem;
        }
    }

    /* Decorative Dots for App Development Card */
    .deco-dot-1 {
        width: 0.9375rem;
        height: 0.9375rem;
        top: 0.3125rem;
        left: 0.3125rem;
    }

    .deco-dot-2 {
        width: 0.625rem;
        height: 0.625rem;
        top: 1.875rem;
        left: 0.9375rem;
    }

    .deco-dot-3 {
        width: 1.25rem;
        height: 1.25rem;
        bottom: 0.3125rem;
        left: 1.25rem;
    }

    @media (max-width: 480px) {
        .container {
            padding: 15px 10px;
        }
        
        .service-card {
            padding: 15px;
            margin-bottom: 20px;
        }
        
        .card-image {
            height: 150px;
            margin: -15px -15px 15px -15px;
            width: calc(100% + 30px);
            border-top-left-radius: 8px !important;
            border-top-right-radius: 8px !important;
        }
        
        .ai-card-image {
            height: 150px;
            margin: -15px -15px 15px -15px;
            width: calc(100% + 30px);
            border-top-left-radius: 8px !important;
            border-top-right-radius: 8px !important;
        }
        
        .service-card h3 {
            font-size: 1.125rem;
        }
        
        .service-card p {
            font-size: 0.875rem;
            margin-bottom: 1rem;
        }
        
        .btn {
            padding: 0.5rem 1rem;
            font-size: 0.875rem;
        }
    }
</style>