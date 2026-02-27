/* 
   Udyod Granite - Main JavaScript
*/

document.addEventListener('DOMContentLoaded', () => {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        duration: 1000,
        easing: 'ease-out-cubic',
        once: true,
        offset: 50,
    });

    // Scroll Progress Bar
    window.addEventListener('scroll', () => {
        const scrollTop = document.documentElement.scrollTop || document.body.scrollTop;
        const scrollHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (scrollTop / scrollHeight) * 100;
        document.querySelector('.scroll-progress-bar').style.width = scrolled + '%';
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu');
    const navMenu = document.querySelector('.nav-menu');

    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', () => {
            mobileMenuBtn.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }

    // Navbar scroll effect
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Typing Animation
    const typingText = document.querySelector('.typing-text');
    const words = ["Nature's Finest Stone", "Timeless Elegance", "Quality Craftsmanship"];
    let wordIndex = 0;
    let charIndex = 0;
    let isDeleting = false;
    let typeSpeed = 100;

    function type() {
        if (!typingText) return; 
        
        const currentWord = words[wordIndex];
        
        if (isDeleting) {
            typingText.textContent = currentWord.substring(0, charIndex - 1);
            charIndex--;
            typeSpeed = 50;
        } else {
            typingText.textContent = currentWord.substring(0, charIndex + 1);
            charIndex++;
            typeSpeed = 100;
        }

        if (!isDeleting && charIndex === currentWord.length) {
            isDeleting = true;
            typeSpeed = 2000; // Pause at end
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            wordIndex = (wordIndex + 1) % words.length;
            typeSpeed = 500; // Pause before new word
        }

        setTimeout(type, typeSpeed);
    }
    
    // Start typing if element exists
    if(typingText) type();


    // Hero Image Carousel
    const slides = document.querySelectorAll('.carousel-slide');
    let currentSlide = 0;
    const slideInterval = 5000; // time in ms

    function nextSlide() {
        if (!slides.length) return;
        slides[currentSlide].classList.remove('active');
        currentSlide = (currentSlide + 1) % slides.length;
        slides[currentSlide].classList.add('active');
    }

    if (slides.length > 0) {
        setInterval(nextSlide, slideInterval);
    }
    
    // Initialize Rellax Parallax
    if (typeof Rellax !== 'undefined') {
        var rellax = new Rellax('.rellax');
    }

    // ===== Testimonials Carousel =====
function initTestimonials() {
    const testimonialItems = document.querySelectorAll('.testimonial-item');
    const testimonialName = document.getElementById('testimonialName');
    const testimonialTitle = document.getElementById('testimonialTitle');
    const testimonialQuote = document.getElementById('testimonialQuote');
    const quoteText = testimonialQuote.querySelector('.quote-text');

    // Mock data for 10 testimonials
    

    let currentCenterIndex = testimonialsData.length > 2 ? 2 : 0; // Start with index 2 as center (showing items 0-4 initially)
    let autoRotateInterval;

    // Update visible items based on center index
    function updateVisibleItems() {
        testimonialItems.forEach((item, index) => {
            const itemIndex = parseInt(item.getAttribute('data-index'));
            let relativeIndex = itemIndex - currentCenterIndex;

            // Handle wrapping for circular carousel
            if (relativeIndex < -2) {
                relativeIndex = relativeIndex + testimonialsData.length;
            } else if (relativeIndex > 2) {
                relativeIndex = relativeIndex - testimonialsData.length;
            }

            // Show only 5 items at a time (2 left, center, 2 right)
            if (relativeIndex >= -2 && relativeIndex <= 2) {
                item.classList.add('visible');
                item.setAttribute('data-position', relativeIndex);

                // Remove all position classes
                item.classList.remove('center', 'side');

                // Add appropriate class
                if (relativeIndex === 0) {
                    item.classList.add('center');
                } else {
                    item.classList.add('side');
                }
            } else {
                item.classList.remove('visible', 'center', 'side');
                item.removeAttribute('data-position');
            }
        });

        // Update testimonial content
        const centerItemIndex = currentCenterIndex;
        const data = testimonialsData[centerItemIndex];

        if (data) {
            testimonialName.style.opacity = '0';
            testimonialTitle.style.opacity = '0';
            quoteText.style.opacity = '0';

            setTimeout(() => {
                testimonialName.textContent = data.name;
                testimonialTitle.textContent = data.title;
                quoteText.textContent = data.quote;

                testimonialName.style.opacity = '1';
                testimonialTitle.style.opacity = '1';
                quoteText.style.opacity = '1';
            }, 250);
        }
    }

    // Move to next testimonial
    function nextTestimonial() {
        currentCenterIndex = (currentCenterIndex + 1) % testimonialsData.length;
        updateVisibleItems();
    }

    // Move to previous testimonial
    function prevTestimonial() {
        currentCenterIndex = (currentCenterIndex - 1 + testimonialsData.length) % testimonialsData.length;
        updateVisibleItems();
    }

    // Click handler for testimonial items
    testimonialItems.forEach((item) => {
        item.addEventListener('click', function () {
            const clickedIndex = parseInt(this.getAttribute('data-index'));
            const relativeIndex = clickedIndex - currentCenterIndex;

            // Only allow clicking on visible items
            if (Math.abs(relativeIndex) <= 2) {
                if (relativeIndex < 0) {
                    // Clicked item is to the left, move left
                    for (let i = 0; i < Math.abs(relativeIndex); i++) {
                        currentCenterIndex = (currentCenterIndex - 1 + testimonialsData.length) % testimonialsData.length;
                    }
                } else if (relativeIndex > 0) {
                    // Clicked item is to the right, move right
                    for (let i = 0; i < relativeIndex; i++) {
                        currentCenterIndex = (currentCenterIndex + 1) % testimonialsData.length;
                    }
                }
                updateVisibleItems();

                // Reset auto-rotate
                clearInterval(autoRotateInterval);
                startAutoRotate();
            }
        });
    });

    // Start auto-rotation
    function startAutoRotate() {
        autoRotateInterval = setInterval(nextTestimonial, 3500); // Change every 3.5 seconds
    }

    
    // Pause auto-rotation on hover over center image
    function setupHoverPause() {
        testimonialItems.forEach((item) => {
            item.addEventListener('mouseenter', function () {
                if (this.classList.contains('center')) {
                    clearInterval(autoRotateInterval);
                }
            });

            item.addEventListener('mouseleave', function () {
                if (this.classList.contains('center')) {
                    startAutoRotate();
                }
            });
        });
    }

    // Initialize
    updateVisibleItems();
    setupHoverPause();
    startAutoRotate();
    }

    // Call the function to initialize testimonials
    initTestimonials();
    
    // Contact Form Handling
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
    contactForm.addEventListener('submit', () => {

        const btn = contactForm.querySelector('button');
        const originalText = btn.innerText;

        btn.innerText = 'Sending...';
        btn.disabled = true;
            
            setTimeout(() => {
                btn.innerText = 'Message Sent!';
                btn.style.backgroundColor = 'var(--success-green)';
                contactForm.reset();
                
                setTimeout(() => {
                    btn.innerText = originalText;
                    btn.disabled = false;
                    btn.style.backgroundColor = '';
                }, 3000);
            }, 1500);
        });
    }
});
