<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&T Business Solution | Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/mainstyles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <span class="logo-text">T&T</span> Business Solutions
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                            Services <i class="fas fa-caret-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pages/services.php">Real Estate</a></li>
                            <li><a class="dropdown-item" href="pages/airticketbooking.php">Air Ticket Booking</a></li>
                            <li><a class="dropdown-item" href="pages/consultation.php">Visa Consultation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="pages/reviews.php">Reviews</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-md-6" data-aos="zoom-in" duration="1000">
                    <h1 class="hero-title">your trusted partner for Business Solutions</h1>
                    <p class="hero-text">Expert services in Real Estate, Air Ticket Booking, and Visa Consultation to help you reach your goals.</p>
                    <div class="hero-buttons">
                        <a href="#services" class="btn btn-primary btn-lg">Our Services</a>
                        <a href="tel:0744766410" class="btn btn-primary btn-lg" style="background: transparent; border: 1px solid white;"><i class="fas fa-phone-alt me-2" style="color: #fff;"></i>Call Us</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>Our Services</h2>
                <p>Comprehensive business solutions tailored to your needs</p>
            </div>
            <div class="row">
                <!-- Real Estate -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3>Real Estate</h3>
                        <p>Find your dream property with our extensive portfolio of residential and commercial listings.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Property Sales & Purchases</li>
                            <li><i class="fas fa-check"></i> Investment Opportunities</li>
                            <li><i class="fas fa-check"></i> Property Management</li>
                        </ul>
                        <a href="pages/services.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>

                <!-- Air Ticket Booking -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-plane"></i>
                        </div>
                        <h3>Air Ticket Booking</h3>
                        <p>Hassle-free flight bookings with competitive prices and excellent customer support.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Domestic & International Flights</li>
                            <li><i class="fas fa-check"></i> Group Bookings</li>
                            <li><i class="fas fa-check"></i> 24/7 Support</li>
                        </ul>
                        <a href="pages/airticketbooking.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>

                <!-- Visa Consultation -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-passport"></i>
                        </div>
                        <h3>Visa Consultation</h3>
                        <p>Expert guidance for visa applications with high success rates and personalized service.</p>
                        <ul class="service-features">
                            <li><i class="fas fa-check"></i> Application Assistance</li>
                            <li><i class="fas fa-check"></i> Document Preparation</li>
                            <li><i class="fas fa-check"></i> Interview Coaching</li>
                        </ul>
                        <a href="pages/consultation.php" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Properties Section -->
    <section class="featured-properties-carousel">
        <div class="container-fluid px-0">
            <div class="section-header text-center text-black" data-aos="fade-up">
                <h2>Featured Properties</h2>
                <p>Explore our selection of premium properties</p>
            </div>

            <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <!-- Property 1 -->
                    <div class="carousel-item active">
                        <div class="property-slide" style="background-image: url('images/property1.jpg');">
                            <div class="overlay"></div>
                            <div class="property-content container">
                                <span class="property-status">For Sale</span>
                                <h3>Luxury Apartment</h3>
                                <div class="property-price">$450,000</div>
                                <div class="property-details">
                                    <span><i class="fas fa-bed"></i> 3 Bedrooms</span>
                                    <span><i class="fas fa-bath"></i> 2 Bathrooms</span>
                                    <span><i class="fas fa-ruler-combined"></i> 1,500 sq ft</span>
                                </div>
                                <p class="property-location"><i class="fas fa-map-marker-alt"></i> Manhattan, New York</p>
                                <a href="#" class="btn btn-outline-light1">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Property 2 -->
                    <div class="carousel-item">
                        <div class="property-slide" style="background-image: url('images/property2.jpg');">
                            <div class="overlay"></div>
                            <div class="property-content container">
                                <span class="property-status">For Lease</span>
                                <h3>Modern Office Space</h3>
                                <div class="property-price">$3,500 per month</div>
                                <div class="property-details">
                                    <span><i class="fas fa-users"></i> Up to 20 staff</span>
                                    <span><i class="fas fa-door-open"></i> 5 Rooms</span>
                                    <span><i class="fas fa-ruler-combined"></i> 2,200 sq ft</span>
                                </div>
                                <p class="property-location"><i class="fas fa-map-marker-alt"></i> Financial District, New York</p>
                                <a href="#" class="btn btn-outline-light1">View Details</a>
                            </div>
                        </div>
                    </div>

                    <!-- Property 3 -->
                    <div class="carousel-item">
                        <div class="property-slide" style="background-image: url('images/property4.jpg');">
                            <div class="overlay"></div>
                            <div class="property-content container">
                                <span class="property-status">For Sale</span>
                                <h3>Spacious Family Home</h3>
                                <div class="property-price">$750,000</div>
                                <div class="property-details">
                                    <span><i class="fas fa-bed"></i> 5 Bedrooms</span>
                                    <span><i class="fas fa-bath"></i> 3.5 Bathrooms</span>
                                    <span><i class="fas fa-ruler-combined"></i> 3,200 sq ft</span>
                                </div>
                                <p class="property-location"><i class="fas fa-map-marker-alt"></i> Brooklyn, New York</p>
                                <a href="#" class="btn btn-outline-light1">View Details</a>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="zoom-in">
                    <div class="about-img">
                        <img src="images/about.png" alt="logo" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="about-content">
                        <h2>About T&T Business Solutions</h2>
                        <p>Founded with a vision to provide comprehensive business solutions under one roof, T&T Business Solutions has grown to become a trusted name in the industry.</p>
                        <p>With our team of experts and years of experience, we deliver exceptional service and results that exceed client expectations.</p>
                        <div class="about-stats">
                            <div class="row">
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3><span class="counter">500</span>+</h3>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3><span class="counter">5</span>+</h3>
                                        <p>Years Experience</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3><span class="counter">300</span>+</h3>
                                        <p>Properties Sold</p>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3">
                                    <div class="stat-item">
                                        <h3><span class="counter">98</span>%</h3>
                                        <p>Success Rate</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="pages/about.php" class="btn btn-primary">Learn More About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <div class="section-header text-center" data-aos="fade-up">
                <h2>What Our Clients Say</h2>
                <p>Hear from our satisfied customers about their experience with T&T Business Solutions</p>
            </div>
            <div class="testimonial-slider" data-aos="fade-up">
                <div class="row">
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <!-- <i class="fas fa-star"></i> -->
                            </div>
                            <p class="testimonial-text">"T&T Business Solutions made my property purchase seamless. Their expert team guided me through every step and found the perfect investment opportunity."</p>
                            <div class="testimonial-author">
                                <img src="images/developer.jpg" alt="Client" class="rounded-circle">
                                <div class="author-info">
                                    <h5>Agaba Alex</h5>
                                    <span>Real Estate Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="testimonial-text">"Their visa consultation service is outstanding! They simplified the complex application process and provided invaluable guidance for my business visa."</p>
                            <div class="testimonial-author">
                                <img src="images/micheal.jpg" alt="Client" class="rounded-circle">
                                <div class="author-info">
                                    <h5>Michael Owen</h5>
                                    <span>Visa Consultation Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="testimonial-card">
                            <div class="testimonial-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <!-- <i class="fas fa-star"></i> -->
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <p class="testimonial-text">"The air ticket booking service saved me both time and money. The team found me the best deals and responded quickly to all my questions."</p>
                            <div class="testimonial-author">
                                <img src="images/sara.jpg" alt="Client" class="rounded-circle">
                                <div class="author-info">
                                    <h5>Sara Precious</h5>
                                    <span>Air Ticket Client</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-4">
                    <a href="pages/reviews.php" class="btn btn-outline-primary">View All Reviews</a>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="row align-items-center"  data-aos="zoom-in" duration="1000">
                <div class="col-lg-8">
                    <h2>Ready to Get Started?</h2>
                    <p>Contact us today for a free consultation and let our experts help you achieve your goals.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="tel:0744766410" class="btn btn-light btn-lg me-2" title="Call Us">
                        <i class="fas fa-phone-alt"></i> Call
                    </a>
                    or
                    <a href="https://wa.me/256744766410" class="btn btn-success btn-lg" title="Chat on WhatsApp" target="_blank">
                        <i class="fab fa-whatsapp"></i> WhatsApp
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <div class="footer-info">
                        <img src="images/logo.png" alt="T&T Business Solutions Logo" class="footer-logo mb-3">
                        <p>Your trusted partner for real estate, air ticket booking, visa consultation, and more.</p>
                        <div class="social-links">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 text-center">
                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="pages/about.php">About Us</a></li>
                            <li><a href="pages/contact.php">Contact Us</a></li>
                            <li><a href="pages/reviews.php">Reviews</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><a href="pages/services.php">Real Estate</a></li>
                            <li><a href="pages/airticketbooking.php">Air Ticket Booking</a></li>
                            <li><a href="pages/consultation.php">Visa Consultation</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 text-center">
                    <div class="footer-contact">
                        <h4>Contact Us</h4>
                        <p>
                            <i class="fas fa-map-marker-alt"></i> 123 Nabisunsa, Jinja Road<br>
                            Kampala, Uganda<br>
                            <i class="fas fa-phone"></i>+256 744 - 766 - 410<br>
                            <i class="fas fa-envelope"></i> info@ttbusinesssolution.com
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-between">
                    <div class="col-md-5 text-md-start text-center">
                        <p class="copyright">© 2025 T&T Business Solution. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-3 text-md-center text-center">
                        <p class="copyright">
                            Developed by <a href="https://namurindaalex.github.io/portfolio/" target="_blank" class="developer-link">namtechnologies.com</a>
                        </p>
                    </div>
                    <div class="col-md-3 text-md-end text-center">
                        <div class="footer-links-bottom">
                            <a href="">Privacy Policy</a>
                            <a href="">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>

    <!-- Review Modal -->
    <div class="modal fade" id="reviewModal" tabindex="-1" aria-labelledby="reviewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reviewModalLabel">Leave a Review</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="reviewForm">
                        <div class="mb-3">
                            <label for="reviewName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="reviewName" required>
                        </div>
                        <div class="mb-3">
                            <label for="reviewEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="reviewEmail" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Rating</label>
                            <div class="rating-select">
                                <i class="fas fa-star rating-star" data-rating="1"></i>
                                <i class="fas fa-star rating-star" data-rating="2"></i>
                                <i class="fas fa-star rating-star" data-rating="3"></i>
                                <i class="fas fa-star rating-star" data-rating="4"></i>
                                <i class="fas fa-star rating-star" data-rating="5"></i>
                                <input type="hidden" id="reviewRating" value="5">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="reviewService" class="form-label">Service Used</label>
                            <select class="form-select" id="reviewService" required>
                                <option value="">Select a service</option>
                                <option value="Real Estate">Real Estate</option>
                                <option value="Air Ticket Booking">Air Ticket Booking</option>
                                <option value="Visa Consultation">Visa Consultation</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="reviewMessage" class="form-label">Your Review</label>
                            <textarea class="form-control" id="reviewMessage" rows="4" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submitReview">Submit Review</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top"><i class="fas fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- Custom JavaScript -->
    <script src="scripts/main.js"></script>
    <script src="scripts/services.js"></script>
    <script src="scripts/contact.js"></script>
    <script src="scripts/consultation.js"></script>
</body>

</html>