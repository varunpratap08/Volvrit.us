<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volvrit</title>
    <?php 
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $base_url = $protocol . '://' . $_SERVER['HTTP_HOST'];
    $doc_root = str_replace('\\', '/', $_SERVER['DOCUMENT_ROOT']);
    $script_name = str_replace('\\', '/', dirname(dirname(__FILE__)));
    $relative_path = str_replace($doc_root, '', $script_name);
    $base_url .= $relative_path;
    ?>
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/style.css">
</head>
<body>
    <div class="header-container">
        <div class="logo">
            <img src="<?php echo $base_url; ?>/assets/images/logo.png" alt="Evolvrix Logo" class="logo-img">
        </div>
        
        <div class="navbar">
            <nav class="main-nav">
                <ul class="nav-list">
                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                        <a href="<?php echo $base_url; ?>/index.php">Home</a>
                    </li>
                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>">
                        <a href="<?php echo $base_url; ?>/about.php">About</a>
                    </li>
                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?> has-dropdown">
                        <a href="<?php echo $base_url; ?>/services.php">Services <span class="dropdown-arrow">▼</span></a>
                        <ul class="dropdown-menu">
                            <!-- Dropdown items will be added here -->
                        </ul>
                    </li>
                    <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>">
                        <a href="<?php echo $base_url; ?>/portfolio.php">Portfolio</a>
                    </li>
                </ul>
            </nav>
        </div>
        
        <a href="<?php echo $base_url; ?>/contact.php" class="btn-contact">Contact Us</a>
    </div>
    <main>
