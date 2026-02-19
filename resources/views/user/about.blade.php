<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Udyod Granite</title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Fonts, Icons, CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
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

    <div class="page-header">
        <h1 class="page-title">About Us</h1>
    </div>

    <!-- Company History -->
    <!-- Founder Story Section -->
    <section class="container about-container" >
        <div class="founder-story-section">
            <div class="story-images">
                <div class="founder-card" data-aos="fade-right">
                    <img src="assets/images/cv4.jpg" alt="Founder Name">
                    <div class="founder-info">
                        <h4>Mr. Name</h4>
                        <p>Founder</p>
                    </div>
                </div>
                <div class="founder-card" data-aos="fade-left" data-aos-delay="200">
                    <img src="assets/images/ptr4.JPG" alt="Proprietor Name">
                    <div class="founder-info">
                        <h4>Mrs.Bindu C</h4>
                        <p>Proprietor</p>
                    </div>
                </div>
            </div>
            <div class="story-content" data-aos="fade-up">
                <h2 class="story-title">Crafting Legacy in Stone</h2>
                <h4 class="story-subtitle">Our Journey of Excellence</h4>
                <p>
                    Udyod Granite was born from a vision to bring the world's finest natural stones to distinctive homes and commercial spaces. Established in 2005 by Mr. Rajesh Kumar, our humble beginning was fueled by a passion for quality and an eye for the unique patterns hidden within the earth.
                </p>
                <p>
                    Over the decades, under the dynamic leadership of Mr. Amit Singh, we have evolved from a local supplier to a premier stone house. We believe that every slab of granite and marble tells a story, and our mission is to help you write yours. With state-of-the-art processing and an unyielding commitment to customer satisfaction, we continue to set benchmarks in the industry.
                </p>
                <div class="story-signature">
                    <p>Building Dreams, One Stone at a Time.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Members -->
    <section style="background-color: var(--bg-light);">
        <div class="container">
            <h2 class="section-title" style="text-align: center; margin-bottom: 50px;">Our Team</h2>
            <div class="team-grid">
                <!-- Member 1 -->
                <div class="team-member" data-aos="zoom-in">
                    <img src="assets/images/cv1.jpg" alt="CEO">
                    <h4 style="margin-bottom: 5px; color: var(--primary-blue);">Name</h4>
                    <p class="team-role">Founder</p>
                </div>
                <!-- Member 2 -->
                <div class="team-member" data-aos="zoom-in" data-aos-delay="100">
                    <img src="assets/images/cv2.jpg" alt="Manager">
                    <h4 style="margin-bottom: 5px; color: var(--primary-blue);">Name</h4>
                    <p class="team-role">Operations Manager</p>
                </div>
                 <!-- Member 3 -->
                <div class="team-member" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/cv3.jpg" alt="Sales Head">
                    <h4 style="margin-bottom: 5px; color: var(--primary-blue);">Name</h4>
                    <p class="team-role">Head of Sales</p>
                </div>
                 <!-- Member 4 -->
                <div class="team-member" data-aos="zoom-in" data-aos-delay="200">
                    <img src="assets/images/cv4.jpg" alt="Sales Head">
                    <h4 style="margin-bottom: 5px; color: var(--primary-blue);">Name</h4>
                    <p class="team-role">Head of Sales</p>
                </div>
            </div>
            
            <div style="text-align: center; margin-top: 50px;">
                <a href="index.html" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </section>

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
                        <!-- <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li> -->
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
</body>
</html>
