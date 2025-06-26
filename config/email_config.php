<?php
/**
 * Email Configuration
 * 
 * This file contains sensitive email credentials.
 * Keep this file outside the web root or protect it with .htaccess
 */

return [
    'smtp' => [
        'host' => 'smtp.hostinger.com',
        'username' => 'info@evolvix.us',
        'password' => 'Evolvix@2025',
        'port' => 465,
        'encryption' => 'ssl', // ssl for port 465, tls for port 587
        'from_email' => 'noreply@evolvix.us',
        'from_name' => 'Evolvix Contact Form',
        'admin_email' => 'info@evolvix.us'
    ]
];
?>
