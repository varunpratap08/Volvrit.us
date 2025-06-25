<?php
// Function to minify CSS
function minify_css($css) {
    // Remove comments
    $css = preg_replace('!/\*.*?\*/!s', '', $css);
    // Remove whitespace
    $css = preg_replace('/\s+/', ' ', $css);
    // Remove spaces around punctuation
    $css = preg_replace('/\s*([{}|:;,])\s*/', '$1', $css);
    // Remove trailing semicolon
    $css = preg_replace('/;}/', '}', $css);
    // Remove units for zero values
    $css = preg_replace('/(:| )0(\.\d+)(%|em|ex|px|in|cm|mm|pt|pc)/i', '${1}0', $css);
    // Remove leading zero before decimal
    $css = preg_replace('/(:| )\.(\d+)/', '${1}0.${2}', $css);
    // Trim
    return trim($css);
}

// Find all CSS files
$cssFiles = [];
$directory = new RecursiveDirectoryIterator(__DIR__);
$iterator = new RecursiveIteratorIterator($directory);
$regex = new RegexIterator($iterator, '/^.+(\.css)$/i', RecursiveRegexIterator::GET_MATCH);

foreach ($regex as $file) {
    $filePath = $file[0];
    $minPath = str_replace('.css', '.min.css', $filePath);
    
    // Skip already minified files
    if (str_ends_with($filePath, '.min.css')) {
        continue;
    }
    
    // Read and minify CSS
    $css = file_get_contents($filePath);
    $minified = minify_css($css);
    
    // Save minified version
    file_put_contents($minPath, $minified);
    
    // Track for reference updates
    $cssFiles[] = [
        'original' => $filePath,
        'minified' => $minPath
    ];
    
    echo "Minified: " . basename($filePath) . " -> " . basename($minPath) . "\n";
}

// Update references in PHP/HTML files
$filesToUpdate = new RegexIterator(
    new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator(__DIR__)
    ),
    '/\.(php|html|htm)$/i'
);

foreach ($filesToUpdate as $file) {
    $content = file_get_contents($file);
    $originalContent = $content;
    
    foreach ($cssFiles as $css) {
        $originalName = basename($css['original']);
        $minName = basename($css['minified']);
        
        // Replace in link and style tags
        $content = str_replace(
            ['href="' . $originalName . '"', 'href="css/' . $originalName . '"'],
            ['href="' . $minName . '"', 'href="css/' . $minName . '"'],
            $content
        );
    }
    
    if ($content !== $originalContent) {
        file_put_contents($file, $content);
        echo "Updated references in: " . $file->getFilename() . "\n";
    }
}

echo "CSS minification complete!\n";
