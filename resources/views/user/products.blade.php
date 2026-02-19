<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products Gallery | Udyod Granite</title>
    
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
            <h1 class="section-title">Our Products</h1>
            <p style="max-width: 600px; margin: 0 auto; color: var(--secondary-dark);">Explore our extensive collection of premium stones crafted to perfection.</p>
        </div>
        
        <!-- Filter Buttons -->
        <div class="filter-buttons">
            <button class="filter-btn active" data-filter="all">All</button>
            <button class="filter-btn" data-filter="granite">Granite</button>
            <button class="filter-btn" data-filter="marble">Marble</button>
            <button class="filter-btn" data-filter="tiles">Tiles</button>
            <button class="filter-btn" data-filter="natural-stones">Natural Stones</button>
        </div>
        
        <!-- Gallery Grid -->
        <div class="products-masonry-grid">
            <!-- Granite Items -->
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs1.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs2.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs3.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs4.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs5.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs6.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs7.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs8.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs9.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs10.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs11.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs12.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs1.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs13.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs14.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs15.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs16.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs17.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs18.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gs19.jpeg" alt="Black Galaxy">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">A deep black granite with golden or white flecks.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gr2.jpg" alt="Tan Brown">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Classic brown granite with black and reddish hues.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gr3.jpg" alt="Tan Brown">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Classic brown granite with black and reddish hues.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="granite">
                <img src="assets/images/gr4.jpg" alt="Tan Brown">
                <div class="item-overlay">
                    <h3 class="item-title"> Title</h3>
                    <p class="item-desc">Classic brown granite with black and reddish hues.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            
            <!-- Marble Items -->
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms1_ALFANSO WHITE.JPG.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms2_TOKYO WHITE.jpg.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms_3TURKISH BIEGE.jpg.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms4_ROMANIA BEIGE.jpg.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms5_MICHEL ANGELO .jpg.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms6_Limer grey.JPG.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms7_ROMANIA GREY.jpg.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms8_Arrezo bianco.JPG.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms9_TURKISH GREY.jpg.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/ms10_Breccia simless.JPG.jpeg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/mr1.jpg" alt="Classic White">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Pure white marble for a luxurious clean look.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/mr2.jpg" alt="Italian Marble">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Warm beige marble imported from Italy.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                    <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/mr3.jpg" alt="Italian Marble">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Warm beige marble imported from Italy.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="marble">
                 <img src="assets/images/mr4.jpg" alt="Italian Marble">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Warm beige marble imported from Italy.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
            
            <!-- Tile Items -->
            <div class="product-item-grid" data-category="tiles">
                <img src="assets/images/ts1.jpg" alt="Ceramic Tile">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Sleek grey tiles perfect for modern bathrooms.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: 60x60cm</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="tiles">
                <img src="assets/images/ts2.jpg" alt="Pattern Tile">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Artistic mosaic tiles for feature walls.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: 30x30cm</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="granite">
                <img src="assets/images/ts3.jpg" alt="Granite Kitchen">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Durable granite specifically for kitchen tops.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="granite">
                <img src="assets/images/ts4.jpg" alt="Granite Kitchen">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Durable granite specifically for kitchen tops.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Custom</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>

            <!-- Natural Stones Items -->
            <div class="product-item-grid" data-category="natural-stones">
                <img src="assets/images/ns1.jpg" alt="Ceramic Tile">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Rustic and durable natural slate for outdoor use.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Varied</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="natural-stones">
                <img src="assets/images/ns2.jpg" alt="Pattern Tile">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Smooth river stones for garden decoration.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Mixed</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="natural-stones">
                <img src="assets/images/ns3.jpg" alt="Granite Kitchen">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Raw stone blocks for landscaping and building.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Random</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
            </div>
             <div class="product-item-grid" data-category="natural-stones">
                <img src="assets/images/ns4.jpg" alt="Granite Kitchen">
                <div class="item-overlay">
                    <h3 class="item-title">Title</h3>
                    <p class="item-desc">Raw stone blocks for landscaping and building.</p>
                    <div class="item-meta">
                        <span class="item-size">Size: Random</span>
                        <span class="item-price">Contact Us</span>
                    </div>
                     <!-- <button class="btn btn-secondary" style="color:white; border-color:white;">Request Quote</button> -->
                </div>
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
        
        const filterBtns = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.product-item-grid');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                
                const filterValue = btn.getAttribute('data-filter');
                
                items.forEach(item => {
                    if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                        item.classList.remove('hide');
                        // Reset animation
                        item.style.animation = 'none';
                        item.offsetHeight; /* trigger reflow */
                        item.style.animation = 'fadeIn 0.5s ease forwards';
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });
    </script>
</body>
</html>
