<?php
// Test if mod_rewrite is working
if (function_exists('apache_get_modules')) {
    $modules = apache_get_modules();
    $mod_rewrite = in_array('mod_rewrite', $modules);
} else {
    $mod_rewrite = getenv('HTTP_MOD_REWRITE') == 'On' ? true : false;
}

echo "<h1>Server Configuration Test</h1>";
echo "<p>mod_rewrite is " . ($mod_rewrite ? 'enabled' : 'NOT enabled') . "</p>";

// Test if .htaccess is being read
$htaccess_working = (strpos($_SERVER['SERVER_SOFTWARE'], 'Apache') !== false) ? 'Yes' : 'Unknown';
echo "<p>.htaccess is being read: " . $htaccess_working . "</p>";

// Test if PHP can read files
echo "<h2>File System Access</h2>";
$test_file = 'router.php';
$file_exists = file_exists($test_file) ? 'exists' : 'does not exist';
echo "<p>File '$test_file' $file_exists in the root directory.</p>";

// Test if we can access the router directly
if (file_exists('router.php')) {
    include 'router.php';
    echo "<p>Router was included successfully.</p>";
} else {
    echo "<p>Error: Could not find router.php</p>";
}
?>
