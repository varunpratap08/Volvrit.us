<?php
/**
 * Script to apply horizontal scrolling fixes to all PHP files
 */

// List of PHP files to process (excluding includes and vendor directories)
$files = [
    '404.php',
    'AI_development.php',
    'API_development.php',
    'Blockchain_development.php',
    'about.php',
    'app_development.php',
    'contact.php',
    'crm_development.php',
    'digitalMarketing.php',
    'faq.php',
    'index.php',
    'portfolio.php',
    'services.php',
    'ui_ux_development.php',
    'web_development.php'
];

// Process each file
foreach ($files as $file) {
    if (!file_exists($file)) {
        echo "File not found: $file\n";
        continue;
    }

    $content = file_get_contents($file);
    $originalContent = $content;
    
    // Check if the file already has the page container
    if (strpos($content, 'class="page-container"') !== false) {
        echo "Skipping $file - Already has page container\n";
        continue;
    }
    
    // Add page container after <body> tag
    $content = preg_replace(
        '/(<body[^>]*>)/i',
        "$1\n    <!-- Page container to prevent horizontal scrolling -->\n    <div class=\"page-container\">",
        $content,
        1
    );
    
    // Add closing div before </body> tag
    $content = preg_replace(
        '/(<\/body>)/i',
        "    </div><!-- Close page-container -->\n$1",
        $content,
        1
    );
    
    // Save changes if content was modified
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        echo "Updated: $file\n";
    } else {
        echo "No changes needed: $file\n";
    }
}

echo "\nFixes applied successfully!\n";
?>
