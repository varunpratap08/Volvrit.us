<?php
// List of files to update
$filesToUpdate = [
    'web_development.php',
    'ui_ux_development.php',
    'index.php',
    'digitalMarketing.php',
    'crm_development.php',
    'contact.php',
    'Blockchain_development.php',
    'app_development.php',
    'API_development.php',
    'AI_development.php',
    'about.php'
];

// Pattern to search for
$searchPattern = "/(include\s*\(?\s*['\"])home_faq\.php(['\"]\s*\)?\s*;?|include\s*['"]home_faq\.php['"]\s*;?)/i";
$replacement = "include 'faq.php';";

// Process each file
foreach ($filesToUpdate as $file) {
    $filePath = __DIR__ . DIRECTORY_SEPARATOR . $file;
    
    if (file_exists($filePath)) {
        $content = file_get_contents($filePath);
        $updatedContent = preg_replace($searchPattern, $replacement, $content);
        
        if ($content !== $updatedContent) {
            file_put_contents($filePath, $updatedContent);
            echo "Updated: $file\n";
        } else {
            echo "No changes needed for: $file\n";
        }
    } else {
        echo "File not found: $file\n";
    }
}

echo "\nFAQ include update complete!\n";
?>
