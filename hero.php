<!-- hero.php -->
<div class="grid-bg">
    <div class="container">
        <div class="hero" style="display: flex; align-items: center; min-height: 80vh;">
            <div class="hero-text" style="flex: 1;">
                <h1 class="fade-in" style="font-size: 66px; margin-bottom: 20px; font-family: 'Poppins', sans-serif; font-weight: 700; line-height: 1.2;">
                    <span style="color: #2563EB;">WE</span> 
                    <span id="animated-text" style="display: inline-block; vertical-align: top; min-width: 250px; height: 70px; overflow: hidden; position: relative;">
                        <span class="text-word" style="display: block; background: linear-gradient(90deg, #2563EB 0%, #2AB7B7 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">DESIGN!</span>
                    </span>
                    <br>
                  <!-- <span style="font-size: 20px; font-weight: 400; color: #4B5563; display: inline-block; margin-top: 15px;">
                        the simply test of printing and typesetting industry
                    </span> -->
                </h1>
                <p class="fade-in" style="animation-delay: 0.2s; margin: 30px 0; font-size: 16px; color: #6B7280;">
                    Lorem ipsum has been the industry's standard dummy text.
                </p>
                <a href="#contact" class="btn fade-in" style="animation-delay: 0.4s; background: #2563EB; color: white; padding: 12px 30px; border-radius: 30px; text-decoration: none; display: inline-block; font-weight: 500; border: none; cursor: pointer; transition: all 0.3s ease;">
                    Let's plan your project
                </a>
            </div>
            <div class="hero-image" style="flex: 1; text-align: right;">
                <img src="assets/images/Hero%20section%20image.png" alt="Hero Image" class="fade-in" style="animation-delay: 0.6s; max-width: 100%; border-radius: 12px;">
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const words = ['DESIGN!', 'DEVELOP!', 'DEPLOY!'];
    const textElement = document.querySelector('.text-word');
    let currentWordIndex = 0;
    let isDeleting = false;
    let charIndex = 0;
    let typingSpeed = 100;
    let delayBeforeDelete = 2000;
    let delayBeforeType = 500;

    function type() {
        const currentWord = words[currentWordIndex];
        
        if (isDeleting) {
            // Delete characters
            textElement.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typingSpeed = 50;
        } else {
            // Type characters
            textElement.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typingSpeed = 100;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            // Word is fully typed, wait before deleting
            isDeleting = true;
            typingSpeed = delayBeforeDelete;
        } else if (isDeleting && charIndex === 0) {
            // Word is fully deleted, move to next word
            isDeleting = false;
            currentWordIndex = (currentWordIndex + 1) % words.length;
            typingSpeed = delayBeforeType;
        }

        setTimeout(type, typingSpeed);
    }


    // Start the animation after a short delay
    setTimeout(type, 1000);
});
</script>