<?php
/**
 * Test Routing Page
 * This script helps test if the routing is working correctly
 */

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Function to test if a URL is accessible
function testUrl($url) {
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    $effectiveUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    
    curl_close($ch);
    
    return [
        'code' => $httpCode,
        'url' => $effectiveUrl,
        'success' => ($httpCode >= 200 && $httpCode < 400)
    ];
}

// Get the base URL
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]";
$testUrls = [
    '/',
    '/about',
    '/services',
    '/portfolio',
    '/contact',
    '/app-development-services-nyc',
    '/crm-development-services-nyc',
    '/ai-development-services-nyc',
    '/api-development-services-nyc',
    '/blockchain-development-services-nyc',
    '/digital-marketing-services-nyc',
    '/ui-ux-design-development-nyc',
    '/web-development-services-nyc'
];

// Test all URLs
$results = [];
foreach ($testUrls as $url) {
    $fullUrl = $baseUrl . $url;
    $results[$url] = testUrl($fullUrl);
    // Add a small delay to avoid overwhelming the server
    usleep(100000); // 100ms
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routing Test Results</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        h1 {
            color: #333;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
        }
        .result {
            margin: 10px 0;
            padding: 10px;
            border-radius: 4px;
        }
        .success {
            background-color: #e8f5e9;
            border-left: 4px solid #4caf50;
        }
        .error {
            background-color: #ffebee;
            border-left: 4px solid #f44336;
        }
        .code {
            font-family: monospace;
            background: #f5f5f5;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>
    <h1>Routing Test Results</h1>
    <p>Base URL: <strong><?php echo htmlspecialchars($baseUrl); ?></strong></p>
    
    <h2>Test Results</h2>
    <div class="results">
        <?php foreach ($results as $url => $result): ?>
            <div class="result <?php echo $result['success'] ? 'success' : 'error'; ?>">
                <h3><?php echo htmlspecialchars($url); ?></h3>
                <p>
                    Status: <span class="code"><?php echo $result['code']; ?></span> |
                    Final URL: <span class="code"><?php echo htmlspecialchars($result['url']); ?></span>
                </p>
                <?php if (!$result['success']): ?>
                    <p><strong>Error:</strong> The URL returned a non-success status code.</p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    
    <h2>Server Information</h2>
    <ul>
        <li>PHP Version: <?php echo phpversion(); ?></li>
        <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE'] ?? 'N/A'; ?></li>
        <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT'] ?? 'N/A'; ?></li>
        <li>mod_rewrite: <?php echo function_exists('apache_get_modules') && in_array('mod_rewrite', apache_get_modules()) ? 'Enabled' : 'Not Enabled'; ?></li>
    </ul>
    
    <h2>Next Steps</h2>
    <ol>
        <li>Check that all URLs return a 200 status code (green).</li>
        <li>If any URLs are failing (red), check the server's error log for more details.</li>
        <li>Ensure that the <code>.htaccess</code> file is present in the root directory.</li>
        <li>Verify that <code>mod_rewrite</code> is enabled on the server.</li>
        <li>Check that the server is configured to allow <code>.htaccess</code> overrides.</li>
    </ol>
</body>
</html>
