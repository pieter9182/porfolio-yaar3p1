document.addEventListener('DOMContentLoaded', () => {
    const dynamicText = document.getElementById('dynamic-text');
    const words = ['software developer', 'front-end developer', 'web designer', 'web developer'];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function type() {
        const currentWord = words[wordIndex];
        if (!isDeleting && charIndex < currentWord.length) {
            dynamicText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            setTimeout(type, 150); // dit is de typing snelheid
        } else if (isDeleting && charIndex > 0) {
            dynamicText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            setTimeout(type, 100); // dit verandert het verwijderings snelheid
        } else if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            setTimeout(type, 1000); // dit pauzeert het na het typen
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            setTimeout(type, 200); // dit pauzeert het voordat het weer begint met typen
        }
    }

    type();
});