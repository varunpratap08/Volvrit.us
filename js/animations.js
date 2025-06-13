document.addEventListener('DOMContentLoaded', function() {
    // Text to animate
    const words = ['DESIGN!', 'DEVELOP!', 'DEPLOY!'];
    const textElement = document.querySelector('.design-text');
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100; // Typing speed in milliseconds
    let deleteSpeed = 50; // Deleting speed in milliseconds
    let delayBetweenWords = 2000; // Delay before starting to type next word

    function type() {
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            // Delete characters
            textElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = deleteSpeed;
        } else {
            // Type characters
            textElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 100;
        }

        // When word is fully typed
        if (!isDeleting && charIndex === currentWord.length) {
            typeSpeed = delayBetweenWords;
            isDeleting = true;
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
        }

        // Apply gradient to the text
        textElement.style.background = 'linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%)';
        textElement.style.webkitBackgroundClip = 'text';
        textElement.style.webkitTextFillColor = 'transparent';
        textElement.style.backgroundClip = 'text';
        textElement.style.color = 'transparent';
        textElement.style.display = 'inline-block';
        textElement.style.position = 'relative';
        textElement.style.lineHeight = '1.2';
        textElement.style.padding = '0 2px';

        setTimeout(type, typeSpeed);
    }

    // Start the typing effect
    type();
});
