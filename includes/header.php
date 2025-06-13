<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evolvrix - <?php echo $pageTitle ?? 'Home'; ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        header {
            background: #fff;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }
        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .logo {
            font-size: 24px;
            font-weight: 600;
            color: #007BFF;
        }
        .nav a {
            margin-left: 20px;
            text-decoration: none;
            color: #333;
            font-weight: 400;
            transition: color 0.3s ease;
        }
        .nav a:hover {
            color: #007BFF;
        }
        .nav .active {
            color: #007BFF;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">Evolvrix</div>
            <nav class="nav">
                <a href="index.php" class="<?php echo $currentPage == 'home' ? 'active' : ''; ?>">Home</a>
                <a href="about.php" class="<?php echo $currentPage == 'about' ? 'active' : ''; ?>">About</a>
                <a href="services.php" class="<?php echo $currentPage == 'services' ? 'active' : ''; ?>">Services</a>
                <a href="portfolio.php" class="<?php echo $currentPage == 'portfolio' ? 'active' : ''; ?>">Portfolio</a>
                <a href="contact.php" class="<?php echo $currentPage == 'contact' ? 'active' : ''; ?>">Contact Us</a>
            </nav>
        </div>
    </header>
    <div style="padding-top: 80px;"></div> <!-- Spacer for fixed header -->