<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Udyod Granite</title>
    
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

    <section class="container careers-content">
        <div class="text-center" style="margin-bottom: 50px;">
            <h1 class="section-title">Career Opportunities</h1>
            <p style="max-width: 600px; margin: 0 auto; color: var(--secondary-dark);">Join a team that values craftsmanship, innovation, and dedication.</p>
        </div>

        <div class="careers-grid">
            <!-- Job Card 1 -->
            <div class="job-card" data-aos="fade-up">
                <div class="job-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <h3 class="job-title">Sales Manager</h3>
                <p class="salary-range">₹30k - ₹50k / Month</p>
                <div class="job-description">
                    <strong>Description:</strong> We are looking for an experienced Sales Manager to lead our regional sales team and drive growth.
                </div>
                <ul class="job-qualifications">
                    <li><i class="fas fa-check"></i> 5+ Years Experience</li>
                    <li><i class="fas fa-check"></i> Strong Leadership Skills</li>
                    <li><i class="fas fa-check"></i> Granite Industry Knowledge</li>
                </ul>
                <button class="btn btn-primary small-btn btn-full-width apply-btn" data-job="Sales Manager">Apply Now</button>
            </div>
            
            <!-- Job Card 2 -->
            <div class="job-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="job-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3 class="job-title">Site Supervisor</h3>
                <p class="salary-range">₹25k - ₹40k / Month</p>
                <div class="job-description">
                    <strong>Description:</strong> Oversee on-site installations and ensure quality standards are met for every project.
                </div>
                <ul class="job-qualifications">
                    <li><i class="fas fa-check"></i> B.Tech / Diploma Civil</li>
                    <li><i class="fas fa-check"></i> Project Management</li>
                    <li><i class="fas fa-check"></i> Problem Solving</li>
                </ul>
                <button class="btn btn-primary small-btn btn-full-width apply-btn" data-job="Site Supervisor">Apply Now</button>
            </div>
            
            <!-- Job Card 3 -->
            <div class="job-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="job-icon">
                    <i class="fas fa-drafting-compass"></i>
                </div>
                <h3 class="job-title">CAD Designer</h3>
                <p class="salary-range">₹20k - ₹35k / Month</p>
                 <div class="job-description">
                    <strong>Description:</strong> Create precise technical drawings and visual layouts for client approval.
                </div>
                <ul class="job-qualifications">
                    <li><i class="fas fa-check"></i> AutoCAD Proficiency</li>
                    <li><i class="fas fa-check"></i> Creative Portfolio</li>
                    <li><i class="fas fa-check"></i> Detail Oriented</li>
                </ul>
                <button class="btn btn-primary small-btn btn-full-width apply-btn" data-job="CAD Designer">Apply Now</button>
            </div>

             <!-- Job Card 4 -->
            <div class="job-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="job-icon">
                    <i class="fas fa-user-friends"></i>
                </div>
                <h3 class="job-title">Customer Support</h3>
                <p class="salary-range">₹15k - ₹25k / Month</p>
                 <div class="job-description">
                    <strong>Description:</strong> Handle client inquiries and coordinate with the sales team for seamless service.
                </div>
                <ul class="job-qualifications">
                    <li><i class="fas fa-check"></i> Excellent Communication</li>
                    <li><i class="fas fa-check"></i> Basic Computer Skills</li>
                    <li><i class="fas fa-check"></i> Client handling</li>
                </ul>
                <button class="btn btn-primary small-btn btn-full-width apply-btn" data-job="Customer Support">Apply Now</button>
            </div>
        </div>
    </section>

    <!-- Application Modal -->
    <div class="modal-overlay" id="applicationModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Apply Now</h2>
            <form id="applicationForm" class="contact-form">
                <input type="hidden" id="jobRole" name="jobRole">
                <div class="form-group">
                    <input type="text" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <input type="tel" placeholder="Phone Number" required>
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Email Address" required>
                </div>
                <div class="form-group">
                    <label for="resume">Upload Resume (PDF, Doc)</label>
                    <input type="file" id="resume" accept=".pdf,.doc,.docx" required>
                </div>
                <button type="submit" class="btn btn-primary btn-full-width">Submit Application</button>
            </form>
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
        // Modal Functionality
        const modal = document.getElementById('applicationModal');
        const closeBtn = document.querySelector('.close-modal');
        const applyBtns = document.querySelectorAll('.apply-btn');
        const jobRoleInput = document.getElementById('jobRole');
        const applicationForm = document.getElementById('applicationForm');

        // Open Modal
        applyBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                const jobRole = btn.getAttribute('data-job');
                jobRoleInput.value = jobRole;
                // Update modal title logic if needed, e.g., "Apply for " + jobRole
                modal.classList.add('active');
                document.body.style.overflow = 'hidden'; // Prevent background scrolling
            });
        });

        // Close Modal
        function closeModal() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        closeBtn.addEventListener('click', closeModal);

        // Close on outside click
        window.addEventListener('click', (e) => {
            if (e.target === modal) {
                closeModal();
            }
        });

        // Form Submit
        applicationForm.addEventListener('submit', (e) => {
            e.preventDefault();
            // Simulate submission
            const formData = new FormData(applicationForm);
            alert(`Application for ${jobRoleInput.value} submitted successfully!\nWe will contact you shortly.`);
            applicationForm.reset();
            closeModal();
        });
    </script>
</body>
</html>
