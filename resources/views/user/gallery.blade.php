<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery | Udyod Granite</title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Fonts, Icons, CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>

    <!-- Header & Navigation -->
    <header id="header">
        <nav class="navbar">
            <div class="logo">
                <a href="index.html">
                    <img src="assets/images/logo_main3.png" alt="Udyod Granite Logo">
                    <!-- <span>Udyod Granite</span> -->
                </a>
            </div>
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            <ul class="nav-menu">
               <li><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                <li><a href="{{ route('about') }}" class="nav-link active">About</a></li>
                <li><a href="{{ route('products') }}" class="nav-link">Products</a></li>
                <li><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li><a href="{{ route('home') }}#services" class="nav-link">Services</a></li>
                <li><a href="{{ route('careers') }}" class="nav-link">Careers</a></li>
                <li><a href="{{ route('offers') }}" class="nav-link">Offers</a></li>
                <li><a href="{{ route('home') }}#contact" class="nav-link">Contact Us</a></li>
            </ul>
        </nav>
        <div class="scroll-progress-bar"></div>
    </header>

    <div style="height: 100px;"></div>

    <section class="container">
        <div class="text-center" style="margin-top: 50px;">
            <h1 class="section-title">Our Gallery</h1>
            <p style="max-width: 600px; margin: 0 auto; color: var(--secondary-dark);">A visual journey through our projects, work process, and team celebrations.</p>
        </div>
        
        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="projects">Projects</button>
            <button class="filter-btn" data-filter="process">Work Process</button>
            <button class="filter-btn" data-filter="team">Team</button>
            <button class="filter-btn" data-filter="celebrations">Celebrations</button>
        </div>
        
        <!-- Gallery Grid -->
        <div class="gallery-grid-page">
            <!-- Projects -->
            <div class="gallery-img-container gallery-item-grid" data-category="projects">
                <img src="assets/images/w1.jpg" alt="Luxury Kitchen">
            </div>
            <div class="gallery-img-container gallery-item-grid" data-category="projects">
                <img src="assets/images/w2.jpg" alt="Modern Bathroom">
            </div>
            
            <!-- Process -->
            <div class="gallery-img-container gallery-item-grid" data-category="process">
                <img src="assets/images/wp1.jpg" alt="Polishing Granite">
            </div>
            <div class="gallery-img-container gallery-item-grid" data-category="process">
                <img src="assets/images/wp2.jpg" alt="Cutting Stone">
            </div>
            <div class="gallery-img-container gallery-item-grid" data-category="process">
                <img src="assets/images/wp3.jpg" alt="Cutting Stone">
            </div>
            
            <!-- Team -->
            <div class="gallery-img-container gallery-item-grid" data-category="team">
                <img src="assets/images/tm1.jpg" alt="Team Meeting">
            </div>
            <div class="gallery-img-container gallery-item-grid" data-category="team">
                <img src="assets/images/tm2.jpg" alt="Team Meeting">
            </div>
            <div class="gallery-img-container gallery-item-grid" data-category="team">
                <img src="assets/images/tm3.jpg" alt="Team Meeting">
            </div>
            
             <!-- Celebrations -->
            <div class="gallery-img-container gallery-item-grid" data-category="celebrations">
                <img src="assets/images/cb1.jpg" alt="Company Anniversary">
            </div>
             <div class="gallery-img-container gallery-item-grid" data-category="celebrations">
                <img src="assets/images/cb2.jpg" alt="Diwali Celebration">
            </div>
             <div class="gallery-img-container gallery-item-grid" data-category="celebrations">
                <img src="assets/images/cb3.jpg" alt="Diwali Celebration">
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <span class="lightbox-close">&times;</span>
        <img src="" alt="Gallery Image" class="lightbox-img">
        <div class="lightbox-caption"></div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-col footer-about">
                    <div class="footer-logo">
                        <img src="assets/images/logo_main3.png" alt="Udyod Granite">
                        <!-- <span>Udyod Granite</span> -->
                    </div>
                    <p class="footer-desc">Providing premium quality granite and marble solutions for residential and commercial projects since 2005.</p>
                </div>
                
                <div class="footer-col footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="products.html">Products</a></li>
                        <li><a href="index.html#services">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                    </ul>
                </div>
                
                <div class="footer-col footer-links">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="index.html#contact">Contact Us</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="offers.html">Offers</a></li>
                    </ul>
                </div>
                
             <div class="footer-col footer-social">
                    <h4>Contact Us</h4>
                    <ul class="footer-contact-details">
                        <li><i class="fas fa-map-marker-alt"></i> Granite udyog, Kinfra small industries Park, seethangoli 671321</li>
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:04994240331">04994 240331</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:info@udyodgranite.com">info@udyodgranite.com</a></li>
                    </ul>

                    <h4 style="margin-top: 20px;">Follow Us</h4>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2026 Udyod Granite. All Rights Reserved.</p>
                <p class="designer-credits">Designed by Astra Software Solutions</p>
            </div>
        </div>
    </footer>

    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
     <script src="assets/js/dist_aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        // Filters
        const filterBtns = document.querySelectorAll('.filter-btn');
        // Changed selector to match new class name
        const items = document.querySelectorAll('.gallery-item-grid');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                const filterValue = btn.getAttribute('data-filter');
                
                items.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.classList.remove('hide');
                        item.style.animation = 'none';
                        item.offsetHeight; 
                        item.style.animation = 'fadeIn 0.5s ease forwards';
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });

        // Lightbox
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.querySelector('.lightbox-img');
        const lightboxCaption = document.querySelector('.lightbox-caption');
        const closeBtn = document.querySelector('.lightbox-close');
        
        items.forEach(item => {
            item.addEventListener('click', () => {
                const img = item.querySelector('img');
                const caption = img.getAttribute('alt');
                lightbox.style.display = 'flex';
                lightboxImg.src = img.src;
                lightboxCaption.textContent = caption;
            });
        });
        
        closeBtn.addEventListener('click', () => {
            lightbox.style.display = 'none';
        });
        
        lightbox.addEventListener('click', (e) => {
            if(e.target === lightbox) lightbox.style.display = 'none';
        });
    </script>
</body>
</html>
