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
            ],
            [
                'question' => 'Do you provide SEO and how can I rank higher?',
                'answer' => 'Absolutely. As part of our best IT services in New York, we offer smart SEO strategies, including keyword planning, content optimization, and performance tracking—to help your business rank higher and reach the right audience.'
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
    // Default FAQs (used when no specific page FAQs are found)
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

// Determine the current page (default to 'home' if not set)
$currentPage = 'home';
if (isset($currentPage)) {
    $pageKey = $currentPage;
} else {
    $scriptName = basename($_SERVER['SCRIPT_NAME'], '.php');
    $pageMap = [
        'index' => 'home',
        'web_development' => 'web_development',
        'app_development' => 'app_development',
        'ui_ux_development' => 'ui_ux_development',
        'digitalMarketing' => 'digital_marketing',
        'crm_development' => 'crm_development',
        'Blockchain_development' => 'blockchain_development',
        'API_development' => 'api_development',
        'AI_development' => 'ai_development',
        'about' => 'about',
        'contact' => 'contact'
    ];
    $pageKey = $pageMap[$scriptName] ?? 'default';
}

// Get the appropriate FAQs
$faq = $faqData[$pageKey] ?? $faqData['default'];
?>

<div class="faq-section">
    <div class="container">
        <div class="faq-badge">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none">
                <path d="M12 2L3 9L12 16L21 9L12 2Z" fill="#28a745"/>
                <path d="M3 13L12 20L21 13" stroke="#28a745" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span>FAQ</span>
        </div>
        <h2 class="section-title">
            <div class="heading-line"><?php echo htmlspecialchars($faq['title']); ?></div>
            <div class="gradient-text"><?php echo htmlspecialchars($faq['subtitle']); ?></div>
        </h2>
        <div class="faq-list">
            <?php foreach ($faq['items'] as $item): ?>
            <div class="faq-item">
                <div class="faq-question">
                    <span><?php echo htmlspecialchars($item['question']); ?></span>
                    <svg class="arrow-icon" width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 1L8 8L1 1" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="faq-answer">
                    <p><?php echo nl2br(htmlspecialchars($item['answer'])); ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
.faq-section {
    padding: 80px 0;
    width: 100%;
    box-sizing: border-box;
}

.faq-badge {
    display: inline-flex;
    align-items: center;
    border: 1px solid #e0e0e0;
    border-radius: 20px;
    padding: 4px 15px;
    margin-bottom: 15px;
    color: #959595;
    font-size: 14px;
}

.faq-badge svg {
    margin-right: 8px;
    flex-shrink: 0;
}

.section-subtitle {
    color: #28a745;
    font-size: 14px;
    margin: 0;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.section-title {
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    font-weight: 600;
    line-height: 44px;
    text-align: left;
    margin: 15px 0 30px;
}

.heading-line {
    display: block;
    margin-bottom: 8px;
}

.gradient-text {
    background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
}

.faq-list {
    max-width: 100%;
    margin: 0;
    padding: 0 15px;
    box-sizing: border-box;
}

.faq-item {
    background: #fff;
    border-radius: 8px;
    margin-bottom: 15px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    transition: all 0.3s ease;
    padding: 0 20px;
    box-sizing: border-box;
}

.faq-item:hover {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
}

.faq-question {
    padding: 20px 0;
    margin: 0;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    font-size: 18px;
    font-weight: 600;
    color: #333;
    transition: all 0.3s ease;
    text-align: left;
    width: 100%;
    border-bottom: 1px solid #eee;
}

.faq-question span {
    flex: 1;
    padding-right: 15px;
}

.faq-question:hover {
    color: #007BFF;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease, padding 0.3s ease;
    background: #f8f9fa;
}

.faq-item.active .faq-answer {
    max-height: 300px;
    padding: 20px 25px;
}

.faq-item.active .faq-question {
    color: #007BFF;
}

.arrow-icon {
    transition: transform 0.3s ease;
    margin-left: 15px;
    flex-shrink: 0;
}

.faq-item.active .arrow-icon {
    transform: rotate(180deg);
}

/* Responsive Design */
@media (max-width: 768px) {
    .section-title {
        font-size: 28px;
        padding: 0 15px;
    }
    
    .section-subtitle {
        padding: 0 15px;
    }
    
    .faq-item {
        padding: 0 15px;
    }
    
    .faq-question {
        font-size: 16px;
        padding: 15px 0;
    }
    
    .faq-answer {
        font-size: 14px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        // Auto-open on hover
        item.addEventListener('mouseenter', () => {
            closeAllFaqs();
            item.classList.add('active');
        });
        
        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (!item.contains(e.target)) {
                item.classList.remove('active');
            }
        });
        
        // Toggle on click
        question.addEventListener('click', (e) => {
            e.stopPropagation();
            const isActive = item.classList.contains('active');
            closeAllFaqs();
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
    
    function closeAllFaqs() {
        faqItems.forEach(faq => faq.classList.remove('active'));
    }
});
</script>