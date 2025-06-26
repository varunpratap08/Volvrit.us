<!-- footer.php -->
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');
    
    footer {
        background: #F4F4F4;
        padding: 40px 0;
        border-top: 1px solid #e0e0e0;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 18px;
        line-height: 24px;
        letter-spacing: 0%;
    }
    .footer-container {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
        gap: 30px;
    }
    .footer-logo {
        flex: 1;
        min-width: 250px;
        max-width: 300px;
    }
    .footer-logo img {
        max-width: 150px;
    }
    .footer-logo p {
        margin: 20px 0;
        max-width: 100%;
        font-size: 16px;
        line-height: 1.6;
        color: #555;
    }
    .footer-links, .footer-services, .footer-contact {
        flex: 1;
        min-width: 150px;
        margin: 0 10px;
    }
    .footer-links h4, .footer-services h4, .footer-contact h4 {
        font-size: 18px;
        margin-bottom: 20px;
        color: #333;
    }
    .footer-links a, .footer-services a {
        display: block;
        color: #333;
        text-decoration: none;
        margin-bottom: 10px;
        transition: color 0.3s ease;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 18px;
        line-height: 24px;
        letter-spacing: 0%;
    }
    .footer-links a:hover, .footer-services a:hover {
        color: #007BFF;
    }

    .footer-contact p {
        margin-bottom: 10px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
        font-size: 16px;
        line-height: 1.6;
        color: #555;
    }
    .social-icons {
        display: flex;
        gap: 15px;
        margin-top: 15px;
    }
    .social-icons a {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        background-color: #333;
        color: white;
        border-radius: 50%;
        transition: all 0.3s ease;
        text-decoration: none;
    }
    .social-icons a:hover {
        background-color: #007BFF;
        transform: translateY(-3px);
    }
</style>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <a href="index.php">
            <img src="assets/images/evolvix logo.png" alt="Evolvix Logo">
            </a>
            <p>At Evolvix, we deliver smart, scalable IT solutions in NYC that help businesses grow with confidence. From startups to enterprises, our team blends technology and strategy to solve real world problems making us one of the best IT services in New York.</p>
            <div class="social-icons">
                <a href="https://www.facebook.com/people/Evolvix/61577887046469/" target="_blank" aria-label="Facebook">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/evolvix.us/" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="/contact/">Contact Us</a>
        </div>
        <div class="footer-services">
            <h4>Services</h4>
            <a href="web_development.php">Web Development</a>
            <a href="app_development.php">App Development</a>
            <a href="crm_development.php">CRM Development</a>
            <a href="ui_ux_development.php">UX Designing</a>
            <a href="API_development.php">API Development</a>
            <a href="AI_development.php">AI Development</a>
            <a href="digitalMarketing.php">Digital Marketing</a>
            
        </div>
        <div class="footer-contact">
            <h4>Contact Us</h4>
            <p>📞 +1 516 779 1394</p>
            <p>📧 evolvix@gmail.com</p>
            <p>📍 41 Wingate Road,Valley Stream, NY 11581</p>
        </div>
    </div>
    </div> <!-- Close page-container -->
</footer>

<!-- Global WhatsApp Floating Button -->
<a href="#" id="global-whatsapp" class="whatsapp-float" data-phone="15167791394" aria-label="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
</a>

<!-- WhatsApp Button Styles -->
<style>
    /* WhatsApp Floating Button */
    .whatsapp-float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 30px;
        right: 30px;
        background-color: #25D366;
        color: #FFF;
        border-radius: 50%;
        text-align: center;
        font-size: 30px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .whatsapp-float:hover {
        background-color: #128C7E;
        transform: translateY(-3px);
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    }

    .whatsapp-float i {
        margin-top: 3px;
    }

    /* Add animation */
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    .whatsapp-float:hover {
        animation: pulse 1.5s infinite;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .whatsapp-float {
            width: 50px;
            height: 50px;
            font-size: 26px;
            bottom: 20px;
            right: 20px;
        }
    }
</style>

<!-- WhatsApp Button JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const whatsappBtn = document.getElementById('global-whatsapp');
        if (whatsappBtn) {
            const phoneNumber = whatsappBtn.getAttribute('data-phone');
            if (phoneNumber) {
                const cleanNumber = phoneNumber.replace(/\D/g, '');
                const whatsappUrl = `https://wa.me/${cleanNumber}?text=Hey%20Evolvix%2C%20I%20have%20a%20question`;
                
                // Set the href attribute
                whatsappBtn.href = whatsappUrl;
                
                // Add click event for smooth interaction
                whatsappBtn.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Small delay for any animations
                    setTimeout(() => {
                        window.open(whatsappUrl, '_blank');
                    }, 100);
                });
            }
        }
    });
</script>

<!-- Font Awesome for WhatsApp icon -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</body>
</html>