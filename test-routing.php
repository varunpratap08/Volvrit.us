<?php
// Test routing debug file
echo "<h1>Routing Debug Information</h1>";

echo "<h2>Request Information:</h2>";
echo "<p><strong>REQUEST_URI:</strong> " . ($_SERVER['REQUEST_URI'] ?? 'Not set') . "</p>";
echo "<p><strong>SCRIPT_NAME:</strong> " . ($_SERVER['SCRIPT_NAME'] ?? 'Not set') . "</p>";
echo "<p><strong>DOCUMENT_ROOT:</strong> " . ($_SERVER['DOCUMENT_ROOT'] ?? 'Not set') . "</p>";
echo "<p><strong>HTTP_HOST:</strong> " . ($_SERVER['HTTP_HOST'] ?? 'Not set') . "</p>";

echo "<h2>GET Parameters:</h2>";
echo "<pre>" . print_r($_GET, true) . "</pre>";

echo "<h2>Available Files:</h2>";
$files = glob("*.php");
echo "<ul>";
foreach ($files as $file) {
    echo "<li>$file</li>";
}
echo "</ul>";

echo "<h2>Current Directory:</h2>";
echo "<p>" . getcwd() . "</p>";

echo "<h2>Router Test:</h2>";
if (isset($_GET['uri'])) {
    echo "<p>URI from GET: " . $_GET['uri'] . "</p>";
    
    // Test the same logic as router.php
    $request_uri = $_GET['uri'];
    $request_uri = trim($request_uri, '/');
    
    echo "<p>Processed URI: '$request_uri'</p>";
    
    // Check if file exists
    $php_file_candidate = str_replace('-', '_', $request_uri) . '.php';
    echo "<p>Looking for file: $php_file_candidate</p>";
    echo "<p>File exists: " . (file_exists($php_file_candidate) ? 'YES' : 'NO') . "</p>";
    
    // Check with capital letters
    $php_file_capital = ucfirst(str_replace('-', '_', $request_uri)) . '.php';
    echo "<p>Looking for file (capital): $php_file_capital</p>";
    echo "<p>File exists: " . (file_exists($php_file_capital) ? 'YES' : 'NO') . "</p>";
}

echo "<h2>Test Links:</h2>";
echo "<ul>";
echo "<li><a href='/blockchain-development'>Blockchain Development</a></li>";
echo "<li><a href='/web-development'>Web Development</a></li>";
echo "<li><a href='/app-development'>App Development</a></li>";
echo "<li><a href='/about-us'>About Us</a></li>";
echo "<li><a href='/contact-us'>Contact Us</a></li>";
echo "<li><a href='/portfolio'>Portfolio</a></li>";
echo "<li><a href='/services'>Services</a></li>";
echo "</ul>";

echo "<h2>Router Log:</h2>";
if (file_exists('router.log')) {
    echo "<pre>" . file_get_contents('router.log') . "</pre>";
} else {
    echo "<p>No router.log file found. Router may not be executing.</p>";
}
?>
