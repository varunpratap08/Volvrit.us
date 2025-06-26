<?php
/**
 * Email Configuration
 * 
 * This file loads email configuration from environment variables
 * Make sure to set up your .env file with the required values
 */

// Load environment variables from .env file if it exists
$envFile = dirname(__DIR__) . '/.env';
if (file_exists($envFile)) {
    $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Skip comments
        
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value, "'\" ");
        
        if (!array_key_exists($name, $_ENV)) {
            $_ENV[$name] = $value;
            putenv("$name=$value");
        }
    }
}

// Required environment variables
$requiredVars = [
    'SMTP_HOST',
    'SMTP_USERNAME',
    'SMTP_PASSWORD',
    'SMTP_PORT',
    'SMTP_ENCRYPTION',
    'MAIL_FROM',
    'MAIL_FROM_NAME',
    'ADMIN_EMAIL'
];

// Check if all required variables are set
$missingVars = [];
foreach ($requiredVars as $var) {
    $value = getenv($var);
    if ($value === false || $value === '') {
        $missingVars[] = $var;
    }
}

if (!empty($missingVars)) {
    error_log('Missing required email configuration: ' . implode(', ', $missingVars));
    if (getenv('APP_ENV') === 'production') {
        header('HTTP/1.1 500 Internal Server Error');
        exit('Email configuration error. Please try again later.');
    }
}

return [
    'smtp' => [
        'host' => getenv('SMTP_HOST') ?: 'smtp.hostinger.com',  // Default values for local development
        'username' => getenv('SMTP_USERNAME') ?: 'noreply@example.com',
        'password' => getenv('SMTP_PASSWORD') ?: '',
        'port' => (int)(getenv('SMTP_PORT') ?: 465),
        'encryption' => getenv('SMTP_ENCRYPTION') ?: 'ssl',
        'from_email' => getenv('MAIL_FROM') ?: 'noreply@example.com',
        'from_name' => getenv('MAIL_FROM_NAME') ?: 'Your Site Name',
        'admin_email' => getenv('ADMIN_EMAIL') ?: 'admin@example.com'
    ]
];
