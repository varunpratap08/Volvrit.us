<!-- expertise.php -->
<div class="container">
    <p class="section-label">What we have done</p>
    <h2 class="fade-in">
        From idea, <span>execution</span>, build, and scale
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
        flex-grow: 1;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .expertise-row {
            grid-template-columns: 1fr; /* Stack cards vertically */
        }

        .small-card,
        .large-card {
            width: 100%; /* Full width on mobile */
        }

        .card-image {
            height: 120px;
            margin: -15px -15px 10px -15px;
        }

        .expertise-card {
            padding: 15px;
        }

        .expertise-card h3 {
            font-size: 18px;
        }

        .expertise-card p {
            font-size: 13px;
        }

        h2 {
            font-size: 24px;
        }

        .deco-dot-orange,
        .deco-dot-purple,
        .deco-dot-green {
            width: 15px;
            height: 15px;
            top: 5px;
            left: 5px;
        }

        .deco-line-blue {
            width: 20px;
            height: 4px;
            bottom: 5px;
            right: 5px;
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
            height: 100px;
        }

        .expertise-card {
            padding: 10px;
        }
    }
</style>