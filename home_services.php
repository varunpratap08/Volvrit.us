<!-- services.php -->
<div class="grid-bg">
    <div class="container">
        <p class="section-label">What we do</p>
        <h2 class="fade-in">
            From idea, <span>execution</span>, build, and scale
        </h2>
        <p class="fade-in" style="animation-delay: 0.2s; margin-bottom: 40px;">
            There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t even look slightly believable.
        </p>
        <div class="services-grid">
            <!-- App Development Card -->
            <div class="service-card app-card fade-in">
                <div class="card-image">
                    <img src="assets/images/home_appdevelopment.png" alt="App Development">
                    <!-- Decorative Elements for App Development -->
                    <span class="deco-dot deco-dot-1"></span>
                    <span class="deco-dot deco-dot-2"></span>
                    <span class="deco-dot deco-dot-3"></span>
                </div>
                <h3>App Development</h3>
                <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected.</p>
                <a href="#contact" class="btn">Contact Us</a>
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
                        <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected.</p>
                        <a href="#contact" class="btn">Contact Us</a>
                    </div>
                    <!-- UI/UX Design Card -->
                    <div class="service-card fade-in" style="animation-delay: 0.4s;">
                        <div class="card-image">
                            <img src="assets/images/home_services_card.png" alt="UI/UX Design">
                        </div>
                        <h3>UI/UX Design</h3>
                        <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected.</p>
                        <a href="#contact" class="btn">Contact Us</a>
                    </div>
                </div>
                <!-- Bottom Row: AI Development -->
                <div class="bottom-card">
                    <!-- AI Development Card -->
                    <div class="service-card fade-in" style="animation-delay: 0.6s;">
                        <div class="card-image">
                            <img src="assets/images/home_AIDevelopment.png" alt="AI Development">
                        </div>
                        <h3>AI Development</h3>
                        <p>There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected.</p>
                        <a href="#contact" class="btn">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Grid Background */
    .grid-bg {
        background: url('https://www.transparenttextures.com/patterns/grid-me.png') repeat;
        background-color: #F5F7FA;
        padding: 60px 0;
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

    /* Services Grid Layout */
    .services-grid {
        display: grid;
        grid-template-columns: 2fr 3fr; /* Adjusted: App Development 40%, Right column 60% */
        gap: 20px;
        height: auto;
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

    /* Bottom Row: AI Development */
    .bottom-card {
        display: flex;
    }
    
    /* AI Development Card Image */
    .bottom-card .card-image {
        height: 300px; /* Increased height for AI Development */
    }

    /* Service Card Styling */
    .service-card {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .app-card {
        grid-row: 1 / span 2;
    }

    /* Card Image */
    .card-image {
        position: relative;
        margin: -30px -30px 20px -30px;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    /* App Development Card Image */
    .app-card .card-image {
        height: 400px; /* Adjusted height for App Development */
    }

    .card-image img {
        width: 100%;
        height: 100%;
        object-fit: contain; /* Changed back to contain to prevent cropping */
        border-radius: 10px 10px 0 0;
        transition: transform 0.3s ease;
    }
    
    /* Center the image in App Development card */
    .app-card .card-image img {
        max-width: 80%; /* Slightly smaller than container to ensure visibility */
        height: auto;
        object-fit: contain;
    }

    /* Adjust Image Height for Other Cards */
    .top-cards .card-image,
    .bottom-card .card-image {
        height: 180px; /* Increased height for other cards */
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

    .service-card p {
        font-size: 14px;
        font-weight: 300;
        color: #666;
        margin-bottom: 20px;
        flex-grow: 1;
    }

    /* Button */
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
        transition: background 0.3s ease;
        align-self: center;
        margin-top: auto;
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

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .services-grid {
            grid-template-columns: 1fr;
            grid-template-rows: auto;
        }

        .app-card {
            grid-row: auto;
        }

        .right-cards-wrapper {
            gap: 20px;
        }

        .top-cards {
            grid-template-columns: 1fr;
        }

        .card-image {
            height: 250px; /* Increased for App Development on mobile */
            margin: -20px -20px 15px -20px;
        }
        
        .app-card .card-image {
            height: 300px; /* Taller for App Development on mobile */
        }

        .top-cards .card-image,
        .bottom-card .card-image {
            height: 140px; /* Increased for other cards on mobile */
        }

        .service-card {
            padding: 20px;
        }

        .service-card h3 {
            font-size: 18px;
        }

        .service-card p {
            font-size: 13px;
        }

        h2 {
            font-size: 24px;
        }

        .deco-dot-1 {
            width: 15px;
            height: 15px;
            top: 5px;
            left: 5px;
        }

        .deco-dot-2 {
            width: 10px;
            height: 10px;
            top: 30px;
            left: 15px;
        }

        .deco-dot-3 {
            width: 20px;
            height: 20px;
            bottom: 5px;
            left: 20px;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 20px 0;
        }

        h2 {
            font-size: 20px;
        }

        .card-image {
height: 200px;
        }

        .top-cards .card-image,
        .bottom-card .card-image {
            height: 160px;
        }
        
        .app-card .card-image {
            height: 250px;
        }

        .service-card {
            padding: 15px;
        }
    }
</style>