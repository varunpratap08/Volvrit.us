<?php
// Include the FAQ data
require_once 'faq_data.php';

// Determine the current page (default to 'home' if not set)
$currentPage = 'home';
$scriptName = basename($_SERVER['SCRIPT_NAME'], '.php');

// Map script names to FAQ page keys
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

// Get the appropriate FAQ key
$faqKey = isset($pageMap[$scriptName]) ? $pageMap[$scriptName] : 'default';

// Get the FAQs for the current page
$faq = getFAQs($faqKey);
?>

<!-- FAQ Section -->
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
    background-color: #fff;
}

.faq-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 6px 12px;
    background: rgba(40, 167, 69, 0.1);
    border-radius: 20px;
    margin-bottom: 15px;
}

.faq-badge span {
    color: #28a745;
    font-weight: 600;
    font-size: 14px;
}

.section-title {
    margin-bottom: 40px;
}

.heading-line {
    font-size: 18px;
    color: #666;
    margin-bottom: 10px;
}

.gradient-text {
    font-size: 36px;
    font-weight: 700;
    background: linear-gradient(90deg, #28a745, #17a2b8);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-bottom: 30px;
}

.faq-list {
    max-width: 900px;
    margin: 0 auto;
}

.faq-item {
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    margin-bottom: 15px;
    overflow: hidden;
    transition: all 0.3s ease;
}

.faq-item:last-child {
    margin-bottom: 0;
}

.faq-question {
    padding: 20px 25px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    background-color: #fff;
    transition: all 0.3s ease;
}

.faq-question:hover {
    background-color: #f9f9f9;
}

.faq-question span {
    font-size: 18px;
    font-weight: 600;
    color: #333;
    flex: 1;
    margin-right: 15px;
}

.arrow-icon {
    transition: transform 0.3s ease;
    flex-shrink: 0;
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
    background-color: #f9f9f9;
}

.faq-answer p {
    padding: 0 25px 25px;
    margin: 0;
    color: #555;
    line-height: 1.6;
}

/* Active state */
.faq-item.active .faq-question {
    background-color: #f9f9f9;
}

.faq-item.active .arrow-icon {
    transform: rotate(180deg);
}

.faq-item.active .faq-answer {
    max-height: 500px;
    border-top: 1px solid #e0e0e0;
}

/* Responsive styles */
@media (max-width: 768px) {
    .faq-section {
        padding: 50px 0;
    }
    
    .gradient-text {
        font-size: 28px;
    }
    
    .faq-question {
        padding: 15px 20px;
    }
    
    .faq-question span {
        font-size: 16px;
    }
    
    .faq-answer p {
        padding: 0 20px 20px;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
            // Toggle active class on clicked item
            const isActive = item.classList.contains('active');
            
            // Close all items
            faqItems.forEach(i => i.classList.remove('active'));
            
            // If the clicked item wasn't active, activate it
            if (!isActive) {
                item.classList.add('active');
            }
        });
    });
    
    // Open first FAQ by default
    if (faqItems.length > 0) {
        faqItems[0].classList.add('active');
    }
});
</script>
