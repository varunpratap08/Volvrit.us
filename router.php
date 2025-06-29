<?php
/**
 * Simple Router for Clean URLs
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Log function for debugging
function logMessage($message) {
    $logFile = __DIR__ . '/router.log';
    $timestamp = date('Y-m-d H:i:s');
    file_put_contents($logFile, "[$timestamp] $message\n", FILE_APPEND);
}

// Get the requested URL path, preferring explicit rewrite param
if (isset($_GET['uri'])) {
    $request_uri = $_GET['uri'];
} else {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '/';
}
$request_uri = trim($request_uri, '/'); // Remove leading/trailing slashes

// Remove any query string from the URI
if (($pos = strpos($request_uri, '?')) !== false) {
    $request_uri = substr($request_uri, 0, $pos);
}

// Remove the base directory if present
$base_dir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
if ($base_dir !== '/') {
    $request_uri = preg_replace("#^" . preg_quote($base_dir, '#') . "#", '', $request_uri);
}

$request_uri = trim($request_uri, '/');
logMessage("Processed URI: '$request_uri'");

// Define your routes
$routes = [
    // Main Pages
    '' => ['file' => 'index.php', 'seo_slug' => 'home'],
    'about' => ['file' => 'about.php', 'seo_slug' => 'about-us'],
    'services' => ['file' => 'services.php', 'seo_slug' => 'our-services'],
    'portfolio' => ['file' => 'portfolio.php', 'seo_slug' => 'our-work'],
    'contact' => ['file' => 'contact.php', 'seo_slug' => 'contact-us'],
    'thank-you' => ['file' => 'thank-you.php', 'seo_slug' => 'thank-you'],
    'submit-contact' => ['file' => 'submit_contact.php', 'seo_slug' => 'submit-contact'],
    '404' => ['file' => '404.php', 'seo_slug' => 'page-not-found'],
    
    // Service Pages with SEO-optimized slugs
    'app-development' => [
        'file' => 'app_development.php',
        'seo_slug' => 'app-development-services-nyc',
        'title' => 'App Development Services NYC | Custom Mobile App Development',
        'description' => 'Top-rated mobile app development company in NYC. We create custom iOS and Android applications that drive business growth and user engagement.',
        'canonical' => 'app-development-services-nyc'
    ],
    'app-development-services-nyc' => [
        'file' => 'app_development.php',
        'seo_slug' => 'app-development-services-nyc',
        'title' => 'App Development Services NYC | Custom Mobile App Development',
        'description' => 'Top-rated mobile app development company in NYC. We create custom iOS and Android applications that drive business growth and user engagement.',
        'canonical' => 'app-development-services-nyc'
    ],
    // ... (other service pages remain unchanged)
    'crm-development' => [
        'file' => 'crm_development.php',
        'seo_slug' => 'crm-development-services-nyc',
        'title' => 'CRM Development Services NYC | Custom CRM Solutions',
        'description' => 'Expert CRM development services in NYC. We build custom CRM solutions that streamline your sales, marketing, and customer service operations.',
        'canonical' => 'crm-development-services-nyc'
    ],
    'crm-development-services-nyc' => [
        'file' => 'crm_development.php',
        'seo_slug' => 'crm-development-services-nyc',
        'title' => 'CRM Development Services NYC | Custom CRM Solutions',
        'description' => 'Expert CRM development services in NYC. We build custom CRM solutions that streamline your sales, marketing, and customer service operations.',
        'canonical' => 'crm-development-services-nyc'
    ],
    
    'ai-development' => [
        'file' => 'AI_development.php',
        'seo_slug' => 'ai-development-services-nyc',
        'title' => 'AI Development Services NYC | Artificial Intelligence Solutions',
        'description' => 'Leading AI development company in NYC. We deliver cutting-edge artificial intelligence solutions including machine learning, computer vision, and natural language processing.',
        'canonical' => 'ai-development-services-nyc'
    ],
    'ai-development-services-nyc' => [
        'file' => 'AI_development.php',
        'seo_slug' => 'ai-development-services-nyc',
        'title' => 'AI Development Services NYC | Artificial Intelligence Solutions',
        'description' => 'Leading AI development company in NYC. We deliver cutting-edge artificial intelligence solutions including machine learning, computer vision, and natural language processing.',
        'canonical' => 'ai-development-services-nyc'
    ],
    
    'api-development' => [
        'file' => 'API_development.php',
        'seo_slug' => 'api-development-services-nyc',
        'title' => 'API Development Services NYC | Custom API Integration',
        'description' => 'Professional API development services in NYC. We design and develop secure, scalable, and well-documented APIs for seamless system integration.',
        'canonical' => 'api-development-services-nyc'
    ],
    'api-development-services-nyc' => [
        'file' => 'API_development.php',
        'seo_slug' => 'api-development-services-nyc',
        'title' => 'API Development Services NYC | Custom API Integration',
        'description' => 'Professional API development services in NYC. We design and develop secure, scalable, and well-documented APIs for seamless system integration.',
        'canonical' => 'api-development-services-nyc'
    ],
    
    'blockchain-development' => [
        'file' => 'blockchain_development.php',
        'seo_slug' => 'blockchain-development-services-nyc',
        'title' => 'Blockchain Development Services NYC | Blockchain Solutions',
        'description' => 'Expert blockchain development company in NYC. We build secure, decentralized applications and smart contracts on various blockchain platforms.',
        'canonical' => 'blockchain-development-services-nyc'
    ],
    'blockchain-development-services-nyc' => [
        'file' => 'blockchain_development.php',
        'seo_slug' => 'blockchain-development-services-nyc',
        'title' => 'Blockchain Development Services NYC | Blockchain Solutions',
        'description' => 'Expert blockchain development company in NYC. We build secure, decentralized applications and smart contracts on various blockchain platforms.',
        'canonical' => 'blockchain-development-services-nyc'
    ],
    
    'digital-marketing' => [
        'file' => 'digitalMarketing.php',
        'seo_slug' => 'digital-marketing-services-nyc',
        'title' => 'Digital Marketing Services NYC | Online Marketing Agency',
        'description' => 'Top digital marketing agency in NYC. We provide comprehensive digital marketing services including SEO, PPC, social media, and content marketing to grow your business online.',
        'canonical' => 'digital-marketing-services-nyc'
    ],
    'digital-marketing-services-nyc' => [
        'file' => 'digitalMarketing.php',
        'seo_slug' => 'digital-marketing-services-nyc',
        'title' => 'Digital Marketing Services NYC | Online Marketing Agency',
        'description' => 'Top digital marketing agency in NYC. We provide comprehensive digital marketing services including SEO, PPC, social media, and content marketing to grow your business online.',
        'canonical' => 'digital-marketing-services-nyc'
    ],
    
    'ui-ux-development' => [
        'file' => 'ui_ux_development.php',
        'seo_slug' => 'ui-ux-design-development-nyc',
        'title' => 'UI/UX Design Services NYC | User Experience Design Agency',
        'description' => 'Award-winning UI/UX design agency in NYC. We create intuitive, user-centered digital experiences that drive engagement and conversions.',
        'canonical' => 'ui-ux-design-services-nyc'
    ],
    'ui-ux-design-development-nyc' => [
        'file' => 'ui_ux_development.php',
        'seo_slug' => 'ui-ux-design-development-nyc',
        'title' => 'UI/UX Design Services NYC | User Experience Design Agency',
        'description' => 'Award-winning UI/UX design agency in NYC. We create intuitive, user-centered digital experiences that drive engagement and conversions.',
        'canonical' => 'ui-ux-design-services-nyc'
    ],
    
    'web-development' => [
        'file' => 'web_development.php', 
        'seo_slug' => 'web-development-services-nyc',
        'title' => 'Web Development Services NYC | Custom Website Development',
        'description' => 'Professional web development services in NYC. We create custom, responsive, and scalable websites tailored to your business needs.',
        'canonical' => 'web-development-services-nyc'
    ],
    'web-development-services-nyc' => [
        'file' => 'web_development.php',
        'seo_slug' => 'web-development-services-nyc',
        'title' => 'Web Development Services NYC | Custom Website Development',
        'description' => 'Professional web development services in NYC. We create custom, responsive, and scalable websites tailored to your business needs.',
        'canonical' => 'web-development-services-nyc'
    ]

];

// Function to find route by SEO slug
function findRouteBySeoSlug($request_uri, $routes) {
    foreach ($routes as $path => $route) {
        if (isset($route['seo_slug']) && $request_uri === $route['seo_slug']) {
            return ['path' => $path, 'route' => $route];
        }
    }
    return false;
}

// Function to redirect to SEO-friendly URL if needed
function redirectToSeoUrl($request_uri, $routes) {
    foreach ($routes as $path => $route) {
        // Redirect from non-SEO path to SEO slug
        if ($request_uri === $path && isset($route['seo_slug']) && $route['seo_slug'] !== $path) {
            $seo_url = '/' . $route['seo_slug'];
            logMessage("Redirecting from $request_uri to $seo_url");
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: $seo_url");
            exit();
        }
    }
}

// Check for SEO slug match first
$matched_route = findRouteBySeoSlug($request_uri, $routes);
if ($matched_route) {
    $route = $matched_route['route'];
    $page = $route['file'];
} elseif (array_key_exists($request_uri, $routes)) {
    // If no SEO slug match, check for direct route match
    $route = $routes[$request_uri];
    $page = $route['file'];
    // Redirect to SEO slug if necessary
    redirectToSeoUrl($request_uri, $routes);
} else {
    // No route match, fall back to 404
    $route = $routes['404'];
    $page = $route['file'];
    header("HTTP/1.0 404 Not Found");
}

// Set SEO variables if they exist
if (isset($route['title'])) {
    $GLOBALS['page_title'] = $route['title'];
}
if (isset($route['description'])) {
    $GLOBALS['page_description'] = $route['description'];
}
if (isset($route['canonical'])) {
    $GLOBALS['canonical_url'] = $route['canonical'];
}

// Check if the file exists
if (file_exists($page)) {
    logMessage("Including file: $page");
    include $page;
} else {
    logMessage("File not found: $page");
    header("HTTP/1.0 404 Not Found");
    include '404.php';
}
?>