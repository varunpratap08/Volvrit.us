// Main JavaScript file for Volvrit Website

document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle functionality will be added here
    console.log('Volvrit website loaded');
    
    // Add smooth scrolling to internal page anchors only
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        // Only process if it's a simple hash link (like #section) and not a path with hash (like page.html#section)
        if (anchor.getAttribute('href').match(/^#[^\/\s]+$/) && anchor.getAttribute('href') !== '#') {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);
                
                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Update URL without adding to history
                    history.pushState(null, null, targetId);
                }
            });
        }
    });

    // Add active class to current navigation item
    const currentPage = window.location.pathname.split('/').pop() || 'index.php';
    document.querySelectorAll('.nav-item a').forEach(link => {
        const href = link.getAttribute('href');
        if (href && href.endsWith(currentPage)) {
            link.parentElement.classList.add('active');
        }
    });
});
