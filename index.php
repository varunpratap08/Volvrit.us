<?php
// Check if this is a direct request or routed request
if (isset($_GET['uri'])) {
    // This is a routed request, process it through router
    include 'router.php';
} else {
    // This is a direct request to index, show home page
    $pageTitle = "Home";
    $currentPage = "home";
    include 'includes/header.php';
    include 'hero.php';
    include 'home_about_section.php';
    include 'home_services.php';
    include 'process_home.php';
    include 'home_portfolio.php';
    include 'home_expertise.php';
    include 'home_faq.php';
    include 'home_contact.php';
    include 'includes/footer.php';
}
?>