<?php
// Server Configuration Test
header('Content-Type: text/plain');

echo "=== Server Configuration Test ===\n\n";

// 1. Check if mod_rewrite is enabled
echo "1. Checking mod_rewrite:\n";
if (function_exists('apache_get_modules')) {
    $modules = apache_get_modules();
    $mod_rewrite = in_array('mod_rewrite', $modules);
    echo "   mod_rewrite is " . ($mod_rewrite ? 'enabled' : 'NOT enabled') . "\n";
} else {
    echo "   Could not determine if mod_rewrite is enabled (not running Apache?)\n";
}

// 2. Check if .htaccess is being read
echo "\n2. Checking .htaccess access:\n";
$htaccess = '.htaccess';
if (file_exists($htaccess)) {
    echo "   .htaccess file exists\n";
    echo "   .htaccess last modified: " . date("F d Y H:i:s.", filemtime($htaccess)) . "\n";
    
    // Try to read the first few lines of .htaccess
    $handle = @fopen($htaccess, "r");
    if ($handle) {
        echo "   First line of .htaccess: " . fgets($handle) . "\n";
        fclose($handle);
    }
} else {
    echo "   .htaccess file NOT FOUND\n";
}

// 3. Check if router.php is accessible
echo "\n3. Checking router.php access:\n";
$router = 'router.php';
if (file_exists($router)) {
    echo "   router.php exists\n";
    echo "   router.php last modified: " . date("F d Y H:i:s.", filemtime($router)) . "\n";
    
    // Check if we can include the router
    ob_start();
    $included = @include $router;
    ob_end_clean();
    echo "   router.php is " . ($included ? 'includable' : 'NOT includable') . "\n";
} else {
    echo "   router.php NOT FOUND\n";
}

// 4. Check PHP version
echo "\n4. PHP Version: " . phpversion() . "\n";

// 5. Check if we can write to directory
echo "\n5. Directory permissions:\n";
$test_file = 'test_write.txt';
if (@file_put_contents($test_file, 'test') !== false) {
    echo "   Can write to directory\n";
    unlink($test_file);
} else {
    echo "   CANNOT write to directory (permission issue)\n";
}

// 6. Check for common PHP modules
echo "\n6. Checking PHP modules:\n";
$modules = [
    'pdo_mysql',
    'mysqli',
    'curl',
    'openssl',
    'mbstring',
    'json',
    'session',
    'filter'
];

foreach ($modules as $module) {
    echo "   $module: " . (extension_loaded($module) ? '✓' : '✗') . "\n";
}

// 7. Check for common rewrite rules issues
echo "\n7. Current URL: " . $_SERVER['REQUEST_URI'] . "\n";
echo "   Script Name: " . $_SERVER['SCRIPT_NAME'] . "\n";
echo "   PHP_SELF: " . $_SERVER['PHP_SELF'] . "\n";
echo "   SCRIPT_FILENAME: " . $_SERVER['SCRIPT_FILENAME'] . "\n";

// 8. Check for common configuration issues
echo "\n8. Server configuration:\n";
echo "   Server Software: " . ($_SERVER['SERVER_SOFTWARE'] ?? 'N/A') . "\n";
echo "   Document Root: " . ($_SERVER['DOCUMENT_ROOT'] ?? 'N/A') . "\n";
echo "   AllowOverride: " . (ini_get('allow_url_fopen') ? 'On' : 'Off') . " (allow_url_fopen)\n";

// 9. Check for common .htaccess issues
echo "\n9. .htaccess test:\n";
$test_htaccess = @file_get_contents($htaccess);
if ($test_htaccess === false) {
    echo "   Cannot read .htaccess file\n";
} else {
    echo "   .htaccess is readable\n";
    if (strpos($test_htaccess, 'RewriteEngine On') === false) {
        echo "   WARNING: RewriteEngine On not found in .htaccess\n";
    }
}

// 10. Check for common routing issues
echo "\n10. Routing test:\n";
$test_url = 'test-route-' . time();
$routes[$test_url] = ['file' => 'index.php', 'seo_slug' => 'test-route'];

if (isset($routes[$test_url])) {
    echo "   Route array is working correctly\n";
} else {
    echo "   WARNING: Could not add test route to routes array\n";
}

unset($routes[$test_url]);

echo "\n=== End of Server Configuration Test ===\n";
?>
