<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Offers | Udyod Granite</title>
    
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

    <div class="container">
        <div class="text-center" style="margin-top: 50px;">
            <h1 class="section-title">Special Offers</h1>
            <p style="max-width: 600px; margin: 0 auto; color: var(--secondary-dark);">Grab the best deals on premium stones. Limited time offers!</p>
        </div>

        <!-- Current Offers -->
        <div class="offers-page-section">
            <h2 class="offers-title">Current Offers</h2>
            <div class="offers-container">
                 <!-- Current Offer 1 -->
                <div class="offer-card current-offer" data-aos="flip-up">
                    <div class="offer-badge">Hurry!</div>
                    <h3 class="offer-title">Monsoon Sale</h3>
                    <p class="offer-desc">Flat 20% OFF on all Indian Granites.</p>
                    <div class="offer-discount">20% OFF</div>
                    <p class="offer-date">Valid till: 30th Sept 2026</p>
                </div>
                 <!-- Current Offer 2 -->
                <div class="offer-card current-offer" data-aos="flip-up" data-aos-delay="100">
                    <div class="offer-badge">Hurry!</div>
                    <h3 class="offer-title">Kitchen Combo</h3>
                    <p class="offer-desc">Buy Countertop + Backsplash Tiles</p>
                    <div class="offer-discount">15% OFF</div>
                    <p class="offer-date">Valid till: 15th Sept 2026</p>
                </div>
            </div>
        </div>

        <!-- Upcoming Offers -->
        <div class="offers-page-section upcoming-offers-wrapper">
            <h2 class="offers-title">Upcoming Offers</h2>
             <div class="offers-container">
                <!-- Upcoming Offer 1 -->
                <div class="offer-card upcoming-offer" data-aos="flip-up">
                    <div class="offer-badge upcoming">Coming Soon</div>
                    <h3 class="offer-title">Diwali Dhamaka</h3>
                    <p class="offer-desc">Unbeatable prices on Italian Marble.</p>
                    <div class="offer-discount">upto 30% OFF</div>
                    <p class="offer-date">Starts: 15th Oct 2026</p>
                    <!-- <button class="btn btn-secondary small-btn notify-btn">Notify Me</button> -->
                </div>
                 <!-- Upcoming Offer 2 -->
                <div class="offer-card upcoming-offer" data-aos="flip-up" data-aos-delay="100">
                    <div class="offer-badge upcoming">Coming Soon</div>
                    <h3 class="offer-title">New Year Bonanza</h3>
                    <p class="offer-desc">Clearance sale on 2026 Stock.</p>
                    <div class="offer-discount">Flat 40% OFF</div>
                    <p class="offer-date">Starts: 1st Jan 2027</p>
                    <!-- <button class="btn btn-secondary small-btn notify-btn">Notify Me</button>  -->
                </div>
            </div>
        </div>
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
        const notifyBtns = document.querySelectorAll('.notify-btn');
        notifyBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                alert('Thank you! You will be notified when this offer starts.');
            });
        });
    </script>
</body>
</html>
