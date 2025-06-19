<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolvrix - <?php echo $pageTitle ?? 'Home'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://unpkg.com/framer-motion@10.16.4/dist/framer-motion.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Header Styles */
        header {
            /* background-image: url('assets/images/background_grid.png'); */
          /* background-color: #F5F7FA; */
            padding: 5px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 20px 5px;
        }

        .logo {
            font-size: 28px;
            font-weight: 700;
            color: #2563EB;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo img {
            height: 40px;
            width: auto;
        }

        /* Navigation Container */
        .nav-container {
            display: flex;
            align-items: center;
            gap: 30px;
        }

        /* Navigation */
        .nav {
            display: flex;
            align-items: center;
            gap: 30px;
            padding: 12px 30px 14px;
            border: 1px solid #E5E7EB;
            border-radius: 8px;
            background: #fff;
            margin: 0 0 0 10px;
        }

        .nav-link {
            color: #333;
            text-decoration: none;
            font-weight: 500;
            font-size: 15px;
            padding: 10px 5px;
            position: relative;
            transition: all 0.3s ease;
            white-space: nowrap;
        }

        .nav-link:hover {
            color: #2563EB;
        }

        .nav-link.active {
            color: #2563EB;
            font-weight: 600;
        }

        /* Services Dropdown */
        .services-dropdown {
            position: relative;
        }

        .services-toggle {
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            padding: 10px 5px;
            background: transparent;
            transition: all 0.3s ease;
            font-size: 15px;
        }

        .services-toggle:hover {
            border-color: #2563EB;
            color: #2563EB;
        }

        .services-toggle i {
            font-size: 12px;
            transition: transform 0.3s ease;
        }

        .services-toggle.active i {
            transform: rotate(180deg);
        }

        .services-menu {
            position: absolute;
            top: 100%;
            right: 0;
            width: 600px;
            background: #fff;
            border: 1px solid #E5E7EB;
            border-radius: 12px;
            margin-top: 8px;
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.3s ease;
            z-index: 100;
        }

        .services-dropdown:hover .services-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .services-menu h3 {
            margin: 0 0 15px 0;
            color: #111827;
            font-size: 18px;
            font-weight: 600;
            padding: 0 15px;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .service-item {
            display: flex;
            align-items: center;
            padding: 12px 15px;
            border-radius: 8px;
            color: #4B5563;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 14px;
            font-weight: 500;
        }

        .service-item:hover {
            background: #F0F9FF;
            color: #0369A1;
            transform: translateY(-2px);
        }

        .service-icon {
            width: 36px;
            height: 36px;
            background: #EFF6FF;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 12px;
            color: #2563EB;
            font-size: 18px;
            flex-shrink: 0;
        }

        .service-item:hover .service-icon {
            background: #DBEAFE;
        }

        /* Contact Button */
        .contact-btn {
            background: #2563EB;
            color: white !important;
            padding: 12px 24px 14px;
            border-radius: 30px;
            font-weight: 500;
            transition: all 0.3s ease;
            text-decoration: none;
            white-space: nowrap;
            border: 2px solid transparent;
            line-height: 1;
            margin: 0 0 0 10px;
        }

        .contact-btn:hover {
            background: #1D4ED8;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.2);
        }

        /* Responsive adjustments for services dropdown */
        @media (max-width: 768px) {
            .services-menu {
                width: 300px;
                right: 0;
                left: auto;
                transform: translateY(10px);
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 400px) {
            .services-menu {
                width: 280px;
                right: -50%;
            }
        }

        /* Mobile Menu Toggle */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 24px;
            color: #333;
            cursor: pointer;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .menu-toggle {
                display: block;
                position: absolute;
                right: 20px;
                top: 20px;
                z-index: 1000;
            }

            .header-container {
                position: relative;
                padding: 15px 20px;
            }

            .nav-container {
                flex-direction: column;
                width: 100%;
                gap: 0;
                position: static;
            }

            .nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #fff;
                flex-direction: column;
                padding: 15px 20px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
                z-index: 99;
                margin: 0;
                border-radius: 0 0 8px 8px;
            }

            .nav.active {
                display: flex;
            }

            .nav-link {
                padding: 12px 0;
                border-bottom: 1px solid #f0f0f0;
                width: 100%;
                display: block;
            }

            .services-dropdown {
                width: 100%;
                position: relative;
            }

            .services-toggle {
                width: 100%;
                justify-content: space-between;
                padding: 12px 0;
                border-bottom: 1px solid #f0f0f0;
                cursor: pointer;
                display: flex;
                align-items: center;
            }

            .services-toggle i {
                transition: transform 0.3s ease;
                margin-left: 8px;
            }

            .services-dropdown.active .services-toggle i {
                transform: rotate(180deg);
            }

            .services-menu {
                position: static;
                width: 100%;
                border: none;
                box-shadow: none;
                opacity: 1;
                visibility: visible;
                transform: none;
                display: none;
                padding: 10px 0 0 10px;
                margin: 0;
                background: #f9f9f9;
                border-radius: 4px;
            }

            .services-dropdown.active .services-menu {
                display: block;
            }

            .service-item {
                padding: 10px 0;
                display: flex;
                align-items: center;
            }

            .service-item:not(:last-child) {
                border-bottom: 1px solid #eee;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <a href="index.php" class="logo">
              <img src="assets/images/evolvix logo.png" alt="Evolvix Logo"> 
            </a>
            
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>

            <div class="nav-container">
                <nav class="nav" id="mainNav">
                    <a href="index.php" class="nav-link <?php echo $currentPage == 'home' ? 'active' : ''; ?>">Home</a>
                    <a href="about.php" class="nav-link <?php echo $currentPage == 'about' ? 'active' : ''; ?>">About Us</a>
                    
                    <div class="services-dropdown">
                        <div class="services-toggle">
                            <span>Services</span>
                            <i class="fas fa-chevron-down"></i>
                        </div>
                        <div class="services-menu">
                            <h3>Our Services</h3>
                            <div class="services-grid">
                                <a href="web_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-rocket"></i></span>
                                    <span>Web Development</span>
                                </a>
                                <a href="app_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-mobile-alt"></i></span>
                                    <span>Mobile App Development</span>
                                </a>
                                <a href="ui_ux_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-layer-group"></i></span>
                                    <span>UI/UX Design</span>
                                </a>
                                <a href="digitalMarketing.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-bullhorn"></i></span>
                                    <span>Digital Marketing</span>
                                </a>
                                <a href="crm_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-users"></i></span>
                                    <span>CRM Development</span>
                                </a>
                                <a href="API_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-code"></i></span>
                                    <span>API Development</span>
                                </a>
                                <a href="Blockchain_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-link"></i></span>
                                    <span>Blockchain Development</span>
                                </a>
                                <a href="AI_development.php" class="service-item">
                                    <span class="service-icon"><i class="fas fa-brain"></i></span>
                                    <span>AI Development</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <a href="portfolio.php" class="nav-link <?php echo $currentPage == 'portfolio' ? 'active' : ''; ?>">Portfolio</a>
                </nav>
                <a href="contact.php" class="contact-btn">Contact Us</a>
            </div>
        </div>
    </header>
    <div style="padding-top: 80px;"></div> <!-- Spacer for fixed header -->

    <script>
        // Mobile menu functionality
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const mainNav = document.getElementById('mainNav');
            const servicesDropdown = document.querySelector('.services-dropdown');
            const servicesToggle = document.querySelector('.services-toggle');
            
            // Function to check screen size and update menu state
            function handleResponsiveMenu() {
                if (window.innerWidth > 992) {
                    // Always hide menu on desktop
                    mainNav.classList.remove('active');
                    servicesDropdown.classList.remove('active');
                }
            }
            
            // Toggle main navigation
            function toggleMainMenu() {
                mainNav.classList.toggle('active');
                const icon = menuToggle.querySelector('i');
                if (mainNav.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                } else {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    // Close services dropdown when closing main menu
                    servicesDropdown.classList.remove('active');
                }
            }
            
            // Toggle services dropdown
            function toggleServicesDropdown(e) {
                if (window.innerWidth <= 992) { // Only for mobile
                    e.preventDefault();
                    e.stopPropagation();
                    servicesDropdown.classList.toggle('active');
                }
            }
            
            // Event listeners
            menuToggle.addEventListener('click', function(e) {
                e.stopPropagation();
                toggleMainMenu();
            });
            
            // Toggle services dropdown on click
            if (servicesToggle) {
                servicesToggle.addEventListener('click', toggleServicesDropdown);
            }
            
            // Close menu when clicking outside
            document.addEventListener('click', function(event) {
                if (window.innerWidth <= 992) { // Only for mobile
                    if (!mainNav.contains(event.target) && event.target !== menuToggle) {
                        mainNav.classList.remove('active');
                        servicesDropdown.classList.remove('active');
                        const icon = menuToggle.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }
            });
            
            // Handle window resize
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    handleResponsiveMenu();
                    
                    // Reset states on resize
                    if (window.innerWidth > 992) {
                        const icon = menuToggle.querySelector('i');
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }, 250);
            });
            
            // Close dropdown when clicking outside on mobile
            document.addEventListener('click', function(event) {
                if (window.innerWidth <= 992 && 
                    !servicesDropdown.contains(event.target) && 
                    event.target !== servicesToggle) {
                    servicesDropdown.classList.remove('active');
                }
            });
            
            // Initial check
            handleResponsiveMenu();
        });
    </script>