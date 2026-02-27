<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Udyod Granite - Premium Granite & Marble Solutions. Transforming spaces with nature's finest stone since 2005.">
    <title>Udyod Granite | Premium Stone Solutions</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">

    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">

</head>

<body>

    <!-- Header & Navigation -->
    <header id="header">
        <nav class="navbar">
            <div class="logo">
                <a href="#home">
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
                <li><a href="{{ route('about') }}" class="nav-link">About</a></li>
                <li><a href="{{ route('products') }}" class="nav-link">Products</a></li>
                <li><a href="{{ route('gallery') }}" class="nav-link">Gallery</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="{{ route('careers') }}" class="nav-link">Careers</a></li>
                <li><a href="{{ route('offers') }}" class="nav-link">Offers</a></li>
                <li><a href="#contact" class="nav-link">Contact Us</a></li>
            </ul>
        </nav>
        <div class="scroll-progress-bar"></div>
    </header>

    <!-- Main Content Area -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero user-parallax-container">
            <div class="hero-overlay"></div>
            <div class="container hero-container">
                <div class="hero-content" data-aos="fade-right">
                    <h2 class="hero-tagline">Premium Granite & Marble Solutions</h2>
                    <h1 class="hero-title">Transforming spaces with <span class="typing-text"></span><span
                            class="cursor">|</span></h1>
                    <p class="hero-description">Transforming spaces with nature's finest stone since 2005. Quality
                        craftsmanship meets timeless elegance.</p>

                    <div class="hero-buttons">
                        <a href="#products" class="btn btn-primary">Explore Our Collection</a>
                        <!-- <a href="#contact" class="btn btn-secondary">Get a Quote</a> -->
                    </div>
                </div>

                <div class="hero-visual" data-aos="fade-left">
                    <div class="rotating-gallery">
                        <div class="gallery-item"><img src="assets/images/h1.jpeg" alt="Granite 1"></div>
                        <div class="gallery-item"><img src="assets/images/h2.jpeg" alt="Granite 2"></div>
                        <div class="gallery-item"><img src="assets/images/h3.jpeg" alt="Granite 3"></div>
                        <div class="gallery-item"><img src="assets/images/h4.jpeg" alt="Granite 4"></div>
                        <div class="gallery-item"><img src="assets/images/h5.jpeg" alt="Granite 5"></div>
                        <div class="gallery-item"><img src="assets/images/h6.jpeg" alt="Granite 6"></div>
                        <div class="gallery-item"><img src="assets/images/h7.jpeg" alt="Granite 7"></div>
                        <div class="gallery-item"><img src="assets/images/h9.jpeg" alt="Granite 8"></div>
                    </div>
                    <!-- Optional: 3D Floating Element -->
                    <!-- <div class="floating-element rellax" data-rellax-speed="2">
                        <div class="granite-sample"><p>NEW</p></div>
                    </div> -->
                </div>
            </div>

            <div class="scroll-down">
                <a href="#about">
                    <span class="mouse">
                        <span class="wheel"></span>
                    </span>
                    <span class="arrow"></span>
                </a>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about">
            <div class="container">
                <div class="about-content">
                    <div class="about-image user-animated-image" data-aos="fade-right">
                        <div class="fixed-frame">
                            <div class="frame-background">
                                <div class="decor-circle"></div>
                                <!-- <div class="decor-text">EST. 2005</div>
                                <div class="decor-text quality">PREMIUM<br>QUALITY</div> -->
                                <!-- <img src="logo_main33.png" alt="Logo"> -->
                            </div>
                            @foreach ($about as $item)
                                <div class="image-frame">

                                    <!-- Front Side -->
                                    <div class="card-face card-front">
                                        <img src="{{ asset('storage/' . $item->person1_image) }}"
                                            alt="{{ $item->person1_name }}">

                                        <div class="card-info">
                                            <span class="card-name">{{ $item->person1_name }}</span>
                                            <span class="card-designation">{{ $item->person1_position }}</span>
                                        </div>
                                    </div>

                                    <!-- Back Side -->
                                    <div class="card-face card-back">
                                        <img src="{{ asset('storage/' . $item->person2_image) }}"
                                            alt="{{ $item->person2_name }}">

                                        <div class="card-info">
                                            <span class="card-name">{{ $item->person2_name }}</span>
                                            <span class="card-designation">{{ $item->person2_position }}</span>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <!-- <div class="experience-badge">
                            <span class="years">18+</span>
                            <span class="text">Years of Excellence</span>
                        </div> -->
                    </div>

                    <div class="about-text" data-aos="fade-left">
                        <h4 class="section-subtitle">Our Story</h4>
                        <h2 class="section-title">Crafting Legacy in Stone</h2>
                        <p class="description">
                            Welcome to Udyod Granite, where nature's finest creations meet human craftsmanship. Founded
                            in 2005, we have established ourselves as a premier provider of high-quality granite and
                            marble solutions.
                        </p>
                        <p class="description">
                            Our journey began with a simple vision: to transform ordinary spaces into extraordinary
                            masterpieces. With a keen eye for quality and an unwavering commitment to customer
                            satisfaction, we source the finest stones from around the globe.
                        </p>
                        <ul class="about-features">
                            <li><i class="fas fa-check-circle"></i> Premium Quality Stone</li>
                            <li><i class="fas fa-check-circle"></i> Custom Fabrication</li>
                            <li><i class="fas fa-check-circle"></i> Expert Installation</li>
                        </ul>
                        <a href="{{ route('about') }}" class="btn btn-primary">Read Our Story</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="products">
            <div class="container">
                <div class="section-header text-center" data-aos="fade-up">
                    <h4 class="section-subtitle">Our Collection</h4>
                    <h2 class="section-title">Explore Premium Stones</h2>
                    <p class="section-intro">Discover our exquisite range of granites, marbles, and tiles sourced from
                        the best quarries.</p>
                </div>

                <div class="products-grid">
                    <!-- Product Card 1 -->
                    <div class="product-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-image">
                            <img src="assets/images/pr13.jpg" alt="Granite">
                            <div class="card-overlay">
                                <h3 class="product-title">Granite</h3>
                                <p class="product-desc">Premium quality Granite</p>
                                <a href="{{ route('products') }}" class="btn-icon"><i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="product-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-image">
                            <img src="assets/images/pr22.jpg" alt="Classic White Marble">
                            <div class="card-overlay">
                                <h3 class="product-title">Marble</h3>
                                <p class="product-desc">Indian and Imported Marble</p>
                                <a href="{{ route('products') }}" class="btn-icon"><i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-image">
                            <img src="assets/images/pr32.jpg" alt="Tan Brown Granite">
                            <div class="card-overlay">
                                <h3 class="product-title">Tiles</h3>
                                <p class="product-desc">Durable Kitchen Countertop</p>
                                <a href="{{ route('products') }}" class="btn-icon"><i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 4 -->
                    <div class="product-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-image">
                            <img src="assets/images/pr4.jpg" alt="Tan Brown Granite">
                            <div class="card-overlay">
                                <h3 class="product-title">Natural Stone</h3>
                                <p class="product-desc">Durable Kitchen Countertop</p>
                                <a href="{{ route('products') }}" class="btn-icon"><i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center" style="margin-top: 50px;" data-aos="fade-up">
                    <a href="{{ route('products') }}" class="btn btn-primary">View All Products</a>
                </div>
            </div>
        </section>

        @php
            $icons = [
                'fas fa-scissors',
                'fas fa-cubes',
                'fas fa-search',
                'fas fa-truck',
                'fas fa-tools',
                'fas fa-box-open',
            ];
        @endphp

        <!-- Services Section -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-header text-center" data-aos="fade-up">
                    <h4 class="section-subtitle">What We Do</h4>
                    <h2 class="section-title">Our Services</h2>
                </div>

                <div class="services-grid">
                    @foreach ($services as $index => $service)
                        @php
                            // Prevent icon repetition even if services increase
                            $iconClass = $icons[$index % count($icons)];
                        @endphp

                        <div class="service-card" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">

                            <div class="service-icon">
                                <i class="{{ $iconClass }}"></i>
                            </div>

                            <h3 class="service-title">
                                {{ $service->title }}
                            </h3>

                            <p class="service-desc">
                                {{ $service->description }}
                            </p>

                        </div>
                    @endforeach
                </div>

            </div>
        </section>

        <!-- Careers Section -->
        <!-- <section id="careers" class="careers">
            <div class="container">
                <div class="section-header text-center" data-aos="fade-up">
                    <h4 class="section-subtitle">Join Our Team</h4>
                    <h2 class="section-title">Build Your Career With Us</h2>
                </div>
                
                <div class="careers-grid">
                    <div class="job-card" data-aos="fade-right">
                        <div class="job-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3 class="job-title">Sales Manager</h3>
                        <p class="salary-range">₹30k - ₹50k / Month</p>
                        <ul class="job-qualifications">
                            <li><i class="fas fa-check"></i> 5+ Years Experience</li>
                            <li><i class="fas fa-check"></i> Granite Industry Knowledge</li>
                        </ul>
                        <a href="careers.html" class="btn btn-primary small-btn">Apply Now</a>
                    </div>
                    
                    <div class="job-card" data-aos="fade-up" data-aos-delay="100">
                         <div class="job-icon">
                            <i class="fas fa-hard-hat"></i>
                        </div>
                        <h3 class="job-title">Site Supervisor</h3>
                        <p class="salary-range">₹25k - ₹40k / Month</p>
                        <ul class="job-qualifications">
                            <li><i class="fas fa-check"></i> B.Tech / Diploma Civil</li>
                            <li><i class="fas fa-check"></i> Project Management</li>
                        </ul>
                        <a href="careers.html" class="btn btn-primary small-btn">Apply Now</a>
                    </div>
                    
                    <div class="job-card" data-aos="fade-left" data-aos-delay="200">
                         <div class="job-icon">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <h3 class="job-title">CAD Designer</h3>
                        <p class="salary-range">₹20k - ₹35k / Month</p>
                        <ul class="job-qualifications">
                            <li><i class="fas fa-check"></i> AutoCAD Proficiency</li>
                            <li><i class="fas fa-check"></i> Creative Portfolio</li>
                        </ul>
                        <a href="careers.html" class="btn btn-primary small-btn">Apply Now</a>
                    </div>
                </div>
            </div>
        </section> -->

        <!-- Offers Section -->
        <section id="offers" class="offers">
            <div class="container">
                <div class="section-header text-center" data-aos="fade-up">
                    <h4 class="section-subtitle">Special Deals</h4>
                    <h2 class="section-title">Exclusive Offers</h2>
                </div>

                <div class="offers-container">
                    @forelse ($offers as $offer)
                        <div class="offer-card {{ $offer->type === 'current' ? 'current-offer' : 'upcoming-offer' }}"
                            data-aos="flip-up" data-aos-delay="{{ $loop->index * 200 }}">

                            @if ($offer->badge)
                                <div class="offer-badge {{ $offer->type === 'upcoming' ? 'upcoming' : '' }}">
                                    {{ $offer->badge }}
                                </div>
                            @endif

                            <h3 class="offer-title">{{ $offer->title }}</h3>

                            <p class="offer-desc">
                                {{ $offer->description }}
                            </p>

                            <div class="offer-discount">
                                {{ $offer->discount_text }}
                            </div>

                            @if ($offer->type === 'current' && $offer->valid_till)
                                <p class="offer-date">
                                    Valid till: {{ \Carbon\Carbon::parse($offer->valid_till)->format('d M Y') }}
                                </p>
                            @elseif($offer->type === 'upcoming' && $offer->valid_till)
                                <p class="offer-date">
                                    Starts: {{ \Carbon\Carbon::parse($offer->valid_till)->format('d M Y') }}
                                </p>
                            @endif

                        </div>
                    @empty
                        <p class="text-center">No offers available at the moment.</p>
                    @endforelse
                </div>

                <div class="text-center" style="margin-top: 40px;">
                    <a href="{{ url('offers') }}" class="btn btn-primary">View All Offers</a>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section class="testimonials" id="testimonials">
            <div class="container">
                <div class="section-header" data-aos="fade-up">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-subtitle">Our valuable customer feedback.</p>
                </div>

                <div class="testimonials-carousel">
                    <div class="testimonials-wrapper">

                        @foreach ($reviews as $index => $review)
                            <div class="testimonial-item" data-index="{{ $index }}">
                                <img src="{{ asset('storage/' . $review->img) }}" alt="{{ $review->name }}">
                            </div>
                        @endforeach

                    </div>

                    <div class="testimonial-content">
                        <div class="testimonial-name" id="testimonialName"></div>
                        <div class="testimonial-title" id="testimonialTitle"></div>
                        <div class="testimonial-quote" id="testimonialQuote">
                            <span class="quote-mark quote-start">"</span>
                            <span class="quote-text"></span>
                            <span class="quote-mark quote-end">"</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-header text-center" data-aos="fade-up">
                    <h4 class="section-subtitle">Get In Touch</h4>
                    <h2 class="section-title">Let's Discuss Your Project</h2>
                </div>

                <div class="contact-layout">

                    <div class="contact-form-container" data-aos="fade-right">
                        {{-- @if ($errors->any())
                            <div class="form-global-error">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif --}}
                        <form id="contactForm" action="{{ route('contact') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="@error('name') is-invalid @enderror" placeholder="Your Name">

                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="@error('email') is-invalid @enderror" placeholder="your@email.com">

                                @error('email')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="@error('phone') is-invalid @enderror" placeholder="+91 98765 43210">

                                @error('phone')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select id="subject" name="subject" class="@error('subject') is-invalid @enderror">
                                    <option value="Inquiry" {{ old('subject') == 'Inquiry' ? 'selected' : '' }}>
                                        General
                                        Inquiry</option>
                                    <option value="Quote" {{ old('subject') == 'Quote' ? 'selected' : '' }}>Request a
                                        Quote</option>
                                    <option value="Support" {{ old('subject') == 'Support' ? 'selected' : '' }}>
                                        Support
                                    </option>
                                </select>

                                @error('subject')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <div class="form-group full-width">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" rows="4" class="@error('message') is-invalid @enderror"
                                    placeholder="How can we help you?">{{ old('message') }}</textarea>

                                @error('message')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary full-width">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="contact-info-container" data-aos="fade-left">
                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <h4 class="info-title">Visit Us</h4>
                            <p class="info-text">Granite udyog,
                                Kinfra small industries Park,seethangoli 671321</p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                            <h4 class="info-title">Call Us</h4>
                            <p class="info-text"><a href="tel:+919876543210"> 04994 240331</a></p>
                        </div>

                        <div class="info-card">
                            <div class="info-icon"><i class="fas fa-envelope"></i></div>
                            <h4 class="info-title">Email Us</h4>
                            <p class="info-text"><a href="mailto:info@udyodgranite.com">info@udyodgranite.com</a></p>
                        </div>

                        <div class="working-hours">
                            <h4 class="hours-title">Working Hours</h4>
                            <ul class="hours-list">
                                <li><span>Mon - Sat:</span> <span class="time">9:30 AM - 6.00 PM</span></li>
                                <li><span>Sunday:</span> <span class="time">Holiday</span></li>
                            </ul>
                        </div>

                        <div class="social-links">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Map Section -->
        <section class="map-section">
            <iframe width="100%" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src="https://maps.google.com/maps?q=Granite+udyog,+Kinfra+small+industries+Park,+seethangoli+671321&t=&z=13&ie=UTF8&iwloc=&output=embed"
                allowfullscreen>
            </iframe>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-top">
                <div class="footer-col footer-about">
                    <div class="footer-logo">
                        <img src="assets/images/logo_main3.png" alt="Udyod Granite">
                        <!-- <span>Udyod Granite</span> -->
                    </div>
                    <p class="footer-desc">Providing premium quality granite and marble solutions for residential and
                        commercial projects since 2005.</p>
                </div>

                <div class="footer-col footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-links">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="careers.html">Careers</a></li>
                        <li><a href="offers.html">Offers</a></li>
                        <!-- <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li> -->
                    </ul>
                </div>

                <div class="footer-col footer-social">
                    <h4>Contact Us</h4>
                    <ul class="footer-contact-details">
                        <li><i class="fas fa-map-marker-alt"></i> Granite udyog, Kinfra small industries Park,
                            seethangoli 671321</li>
                        <li><i class="fas fa-phone-alt"></i> <a href="tel:04994240331">04994 240331</a></li>
                        <li><i class="fas fa-envelope"></i> <a
                                href="mailto:info@udyodgranite.com">info@udyodgranite.com</a></li>
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

    <!-- Scripts -->
    <!-- <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.12.1/rellax.min.js"></script> -->
    <script src="assets/js/ajax_libs.js"></script>
    <script src="assets/js/dist_aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
    const testimonialsData = @json($reviewsData);
</script>
</body>

</html>
