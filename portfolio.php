<?php
// Include header
$page_title = 'Our Portfolio - Volvrit';
require_once 'includes/header.php';
?>

<!-- Portfolio Hero Section -->
<section class="page-hero">
    <div class="container">
        <h1>Our Portfolio</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/volvrit-website/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio</li>
            </ol>
        </nav>
    </div>
</section>

<!-- Portfolio Filter -->
<section class="portfolio-section">
    <div class="container">
        <div class="portfolio-filter">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="web">Web Design</button>
            <button class="filter-btn" data-filter="app">Mobile Apps</button>
            <button class="filter-btn" data-filter="design">UI/UX</button>
        </div>
        
        <div class="portfolio-grid">
            <!-- Portfolio Item 1 -->
            <div class="portfolio-item" data-category="web">
                <div class="portfolio-image" style="background-color: #D7D7D7; height: 250px; position: relative;">
                    <div class="portfolio-overlay">
                        <h3>E-commerce Website</h3>
                        <p>Web Design</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 2 -->
            <div class="portfolio-item" data-category="app">
                <div class="portfolio-image" style="background-color: #D7D7D7; height: 250px; position: relative;">
                    <div class="portfolio-overlay">
                        <h3>Fitness App</h3>
                        <p>Mobile App</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Item 3 -->
            <div class="portfolio-item" data-category="design">
                <div class="portfolio-image" style="background-color: #D7D7D7; height: 250px; position: relative;">
                    <div class="portfolio-overlay">
                        <h3>Dashboard UI</h3>
                        <p>UI/UX Design</p>
                        <a href="#" class="view-project">View Project</a>
                    </div>
                </div>
            </div>
            
            <!-- Add more portfolio items as needed -->
        </div>
        
        <!-- Testimonials Section -->
        <div class="testimonials">
            <h2>What Our Clients Say</h2>
            <div class="testimonial-slider">
                <div class="testimonial-item">
                    <p class="testimonial-text">"Volvrit delivered exceptional results for our project. Their team was professional and met all our requirements."</p>
                    <div class="client-info">
                        <div class="client-avatar" style="background-color: #D7D7D7; width: 60px; height: 60px; border-radius: 50%; margin: 0 auto 10px;"></div>
                        <h4>Sarah Johnson</h4>
                        <p class="client-role">CEO, TechCorp</p>
                    </div>
                </div>
                <!-- Add more testimonials as needed -->
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2>Have a Project in Mind?</h2>
        <p>Let's discuss how we can help bring your ideas to life.</p>
        <a href="/volvrit-website/contact.php" class="btn btn-primary">Get a Free Quote</a>
    </div>
</section>

<?php
// Include footer
require_once 'includes/footer.php';
?>
