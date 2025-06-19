<!-- portfolio.php -->
<style>
    .portfolio-section {
        padding: 80px 0;
        width: 100%;
        box-sizing: border-box;
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
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 30px;
        width: 100%;
    }

    .portfolio-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .portfolio-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }

    .portfolio-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 12px 12px 0 0;
    }

    .portfolio-content {
        padding: 20px;
    }

    .portfolio-title {
        font-size: 18px;
        font-weight: 600;
        margin: 15px 0 10px;
        color: #333;
    }

    /* Responsive Styles */
    @media (max-width: 1199.98px) {
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

    @media (max-width: 767.98px) {
        .portfolio-section {
            padding: 50px 0;
        }
        
        .section-title {
            font-size: 24px;
        }
        
        .portfolio-badge {
            font-size: 13px;
            padding: 5px 14px;
        }
        
        .portfolio-badge svg {
            width: 12px;
            height: 12px;
        }
        
        .portfolio-description {
            font-size: 14px;
            margin-bottom: 25px;
        }
        
        .portfolio-grid {
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
    }

    @media (max-width: 575.98px) {
        .section-title {
            font-size: 22px;
            line-height: 1.4;
        }
        
        .portfolio-badge {
            font-size: 12px;
            padding: 4px 12px;
        }
        
        .portfolio-grid {
            grid-template-columns: 1fr;
            gap: 15px;
        }
        
        .portfolio-image {
            height: 180px;
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
            <div class="heading-line">From idea to execution</div>
            <div class="gradient-text">We simplify, build and scale</div>
        </h2>
        
        <p class="portfolio-description fade-in" style="animation-delay: 0.2s;">
            There are many variations of passages of Lorem ipsum available but the majority have suffered alteration in some form, by injected humour, or randomised words which don't even look slightly believable.
        </p>
        
        <div class="portfolio-grid">
            <div class="portfolio-card fade-in">
                <img src="https://via.placeholder.com/600x400?text=Finch+1" alt="Finch 1" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Finch Locks</h3>
                </div>
            </div>
            
            <div class="portfolio-card fade-in" style="animation-delay: 0.2s">
                <img src="https://via.placeholder.com/600x400?text=Finch+2" alt="Finch 2" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Finch Locks</h3>
                </div>
            </div>
            
            <div class="portfolio-card fade-in" style="animation-delay: 0.4s">
                <img src="https://via.placeholder.com/600x400?text=Finch+3" alt="Finch 3" class="portfolio-image">
                <div class="portfolio-content">
                    <h3 class="portfolio-title">Finch Locks</h3>
                </div>
            </div>
        </div>
    </div>
</div>