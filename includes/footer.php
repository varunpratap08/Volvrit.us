<!-- footer.php -->
<style>
    footer {
        background: #F4F4F4;
        padding: 40px 0;
        border-top: 1px solid #e0e0e0;
    }
    .footer-container {
        display: flex;
        justify-content: space-between;
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        flex-wrap: wrap;
    }
    .footer-logo img {
        max-width: 150px;
    }
    .footer-links h4, .footer-services h4, .footer-contact h4 {
        font-size: 18px;
        margin-bottom: 15px;
    }
    .footer-links a, .footer-services a {
        display: block;
        color: #333;
        text-decoration: none;
        margin-bottom: 10px;
        transition: color 0.3s ease;
    }
    .footer-links a:hover, .footer-services a:hover {
        color: #007BFF;
    }
    .footer-contact p {
        margin-bottom: 10px;
    }
</style>
<footer>
    <div class="footer-container">
        <div class="footer-logo">
            <img src="https://via.placeholder.com/150x50?text=Evolve+Logo" alt="Evolve Logo">
            <p>Lorem ipsum has been the industry's standard dummy text making it.</p>
        </div>
        <div class="footer-links">
            <h4>Quick Links</h4>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="portfolio.php">Portfolio</a>
            <a href="contact.php">Contact Us</a>
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
            <p>📞 +1 223 456 7890</p>
            <p>📧 evolve@gmail.com</p>
            <p>📍 2212 4th Street NY, USA</p>
        </div>
    </div>
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
                const whatsappUrl = `https://wa.me/${cleanNumber}?text=Hello%20Volvrit%2C%20I%20have%20a%20question`;
                
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