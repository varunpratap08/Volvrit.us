<?php
// FAQ data for different pages
$faqData = [
    'home' => [
        'title' => 'From idea to execution',
        'subtitle' => 'We simplify, build and scale',
        'items' => [
            [
                'question' => 'What kind of services is Evolvix offering?',
                'answer' => 'Evolvix delivers complete IT solutions in NYC, including website and mobile app design, custom web development, digital marketing, SEO, and exhibition display services. We\'re known for providing reliable and scalable tech with the help of our IT consulting New York experts.'
            ],
            [
                'question' => 'How long would it take to deliver a website design project?',
                'answer' => 'Timelines vary by project, but most website design work is delivered within 3 to 6 weeks. With our structured process, we ensure fast turnaround without compromising quality.'
            ],
            [
                'question' => 'Are you offering fully responsive website design?',
                'answer' => 'Yes. Every project we build is fully responsive optimized for mobile, tablet, and desktop—to ensure your users have the best experience on all devices.'
            ]
        ]
    ],
    'web_development' => [
        'title' => 'Web Development FAQs',
        'subtitle' => 'Your questions answered',
        'items' => [
            [
                'question' => 'What technologies do you use for web development?',
                'answer' => 'We use modern web technologies including HTML5, CSS3, JavaScript, and popular frameworks like React, Vue.js, and Angular for frontend development. For backend, we use PHP, Node.js, Python, and various databases like MySQL and MongoDB.'
            ],
            [
                'question' => 'Do you provide website maintenance after launch?',
                'answer' => 'Yes, we offer comprehensive maintenance packages to keep your website secure, up-to-date, and performing at its best.'
            ]
        ]
    ],
    'app_development' => [
        'title' => 'App Development FAQs',
        'subtitle' => 'Everything you need to know',
        'items' => [
            [
                'question' => 'Do you develop both iOS and Android apps?',
                'answer' => 'Yes, we develop cross-platform applications that work seamlessly on both iOS and Android devices using frameworks like React Native and Flutter.'
            ],
            [
                'question' => 'How long does it take to develop a mobile app?',
                'answer' => 'The timeline depends on the app\'s complexity, but most projects take between 3-6 months from concept to launch.'
            ]
        ]
    ],
    // Add more page-specific FAQs as needed
    'default' => [
        'title' => 'Frequently Asked Questions',
        'subtitle' => 'Find answers to common questions',
        'items' => [
            [
                'question' => 'How can I contact your support team?',
                'answer' => 'You can reach our support team through the contact form on our website or by emailing support@volvrit.us. We typically respond within 24 hours.'
            ],
            [
                'question' => 'What are your working hours?',
                'answer' => 'Our team is available Monday through Friday, 9:00 AM to 6:00 PM EST.'
            ]
        ]
    ]
];

// Function to get FAQs for a specific page
function getFAQs($page = 'home') {
    global $faqData;
    return isset($faqData[$page]) ? $faqData[$page] : $faqData['default'];
}
?>
