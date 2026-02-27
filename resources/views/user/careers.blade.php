<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Careers | Udyod Granite</title>

    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Fonts, Icons, CSS -->
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&family=Montserrat:wght@400;500;600;700;800&family=Open+Sans:wght@300;400;600;700&family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <style>
        .is-invalid {
    border: 1px solid #e74c3c !important;
}

.error-text {
    color: #e74c3c;
    font-size: 13px;
    margin-top: 5px;
    display: block;
}
    </style>
</head>

<body>

    <!-- Header & Navigation -->
    <header id="header">
        <nav class="navbar">
            <div class="logo">
                <a href="{{ route('home') }}">
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
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show">
        {{ session('success') }}
        <button type="button" class="btn-close" onclick="this.parentElement.style.display='none'"></button>
    </div>
@endif
    <section class="container careers-content">
        <div class="text-center" style="margin-bottom: 50px;">
            <h1 class="section-title">Career Opportunities</h1>
            <p style="max-width: 600px; margin: 0 auto; color: var(--secondary-dark);">
                Join a team that values craftsmanship, innovation, and dedication.
            </p>
        </div>

        <div class="careers-grid">
            @forelse($careers as $career)
                <div class="job-card" data-aos="fade-up">

                    <div class="job-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>

                    <!-- Job Title -->
                    <h3 class="job-title">
                        {{ $career->job_title }}
                    </h3>

                    <!-- Salary -->
                    <p class="salary-range">
                        {{ $career->salary_range }}
                    </p>

                    <!-- Description -->
                    <div class="job-description">
                        <strong>Description:</strong>
                        {{ $career->description }}
                    </div>

                    <!-- Experience -->
                    <ul class="job-qualifications">
                        <li>
                            <i class="fas fa-check"></i>
                            {{ $career->experience }}
                        </li>

                        <!-- Skills (comma separated) -->
                        @foreach(explode(',', $career->skills) as $skill)
                            <li>
                                <i class="fas fa-check"></i>
                                {{ trim($skill) }}
                            </li>
                        @endforeach
                    </ul>

                    @foreach($careers as $career)
                        <button class="btn btn-primary small-btn btn-full-width open-apply-modal" data-id="{{ $career->id }}"
                            data-title="{{ $career->job_title }}">
                            Apply Now
                        </button>
                    @endforeach

                </div>
            @empty
                <div class="text-center">
                    <p>No career opportunities available at the moment.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Application Modal -->
    <div class="modal-overlay" id="applicationModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>Apply Now</h2>

            <form action="{{ route('apply.store') }}" method="POST" enctype="multipart/form-data" class="contact-form">

                @csrf

                <!-- Hidden Career ID -->
                <input type="hidden" id="career_id" name="career_id">

                <!-- Job Title (Readonly Display) -->
                <div class="form-group">
                    <input type="text" id="job_title_display" placeholder="Job Title" readonly>
                </div>

                <div class="form-group">
                    <input type="text" name="full_name" placeholder="Full Name" value="{{ old('full_name') }}"
                        class="@error('full_name') is-invalid @enderror">

                    @error('full_name')
                        <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="tel" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}"
                        class="@error('phone_number') is-invalid @enderror">

                    @error('phone_number')
                        <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="email" name="email_address" placeholder="Email Address"
                        value="{{ old('email_address') }}" class="@error('email_address') is-invalid @enderror">

                    @error('email_address')
                        <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Upload Resume (PDF, Doc)</label>
                    <input type="file" name="resume" accept=".pdf,.doc,.docx"
                        class="@error('resume') is-invalid @enderror">

                    @error('resume')
                        <small class="error-text">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary btn-full-width">
                    Submit Application
                </button>
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
                    <p class="footer-desc">Providing premium quality granite and marble solutions for residential and
                        commercial projects since 2005.</p>
                </div>

                <div class="footer-col footer-links">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('products') }}">Products</a></li>
                        <li><a href="{{ route('home') }}#services">Services</a></li>
                        <li><a href="{{ route('gallery') }}">Gallery</a></li>
                    </ul>
                </div>

                <div class="footer-col footer-links">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="{{ route('home') }}#contact">Contact Us</a></li>
                        <li><a href="{{ route('careers') }}">Careers</a></li>
                        <li><a href="{{ route('offers') }}">Offers</a></li>
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
                        <a href="https://www.facebook.com/share/19vdGUEGPD/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/graniteudyog?igsh=eWl0MHY2c3FvNmV5"><i class="fab fa-instagram"></i></a>
                        <a href="mailto:graniteudyog123@gmail.com"><i class="fas fa-envelope"></i></a>
                        <a href="https://wa.me/9496431624"><i class="fab fa-whatsapp"></i></a>
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
        const modal = document.getElementById('applicationModal');
        const closeBtn = document.querySelector('.close-modal');

        document.querySelectorAll('.open-apply-modal').forEach(button => {
            button.addEventListener('click', function () {

                let careerId = this.dataset.id;
                let jobTitle = this.dataset.title;

                document.getElementById('career_id').value = careerId;
                document.getElementById('job_title_display').value = jobTitle;

                modal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() {
            modal.classList.remove('active');
            document.body.style.overflow = '';
        }

        closeBtn.addEventListener('click', closeModal);

        window.addEventListener('click', function (e) {
            if (e.target === modal) {
                closeModal();
            }
        });
    </script>
    <script>
        @if ($errors->any())
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById('applicationModal').classList.add('active');
            });
        @endif
    </script>
    <script>
    setTimeout(function() {
        const alert = document.querySelector('.alert');
        if(alert){
            alert.style.transition = "opacity 0.5s ease";
            alert.style.opacity = "0";
            setTimeout(() => alert.remove(), 500);
        }
    }, 4000);
</script>
</body>

</html>