<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Ticket Booking - T&T Business Solutions</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- AOS (Animate On Scroll) Library -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/mainstyles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <span class="logo-text">T&T</span> Business Solutions
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle active" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown">
                            Services
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="real-estate.html">Real Estate</a></li>
                            <li><a class="dropdown-item active" href="air-tickets.html">Air Ticket Booking</a></li>
                            <li><a class="dropdown-item" href="visa-services.html">Visa Consultation</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reviews.html">Reviews</a>
                    </li>
                </ul>
                <div class="ms-3 d-none d-lg-block">
                    <a href="contact.html" class="btn btn-primary">Get a Quote</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Page Header -->
    <header class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1>Air Ticket Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Services</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Air Ticket Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <section class="service-detail py-5">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="/api/placeholder/600/400" alt="Air ticket booking service" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2>Seamless Flight Booking Solutions</h2>
                    <p class="lead">Let us handle your travel arrangements with our expert air ticket booking services.</p>
                    <p>At T&T Business Solutions, we make flying easier by offering comprehensive flight booking services for both business and leisure travelers. Our dedicated team works with major airlines worldwide to ensure you get the best fares and optimal itineraries for your needs.</p>
                    <div class="mt-4">
                        <a href="contact.html" class="btn btn-primary me-2">Book Now</a>
                        <a href="#flight-options" class="btn btn-outline-primary">Explore Options</a>
                    </div>
                </div>
            </div>
            
            <!-- Flight Booking Features -->
            <div class="row my-5" id="flight-options">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">Our Booking Services</h2>
                    <p class="section-description">Comprehensive solutions for all your travel needs</p>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="card h-100 service-card">
                        <div class="card-body text-center">
                            <div class="icon-box mb-3">
                                <i class="fas fa-plane-departure fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title">International Flights</h4>
                            <p class="card-text">Access to all major international airlines with competitive prices and flexible booking options.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card h-100 service-card">
                        <div class="card-body text-center">
                            <div class="icon-box mb-3">
                                <i class="fas fa-suitcase fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title">Business Travel</h4>
                            <p class="card-text">Specialized services for business travelers including priority boarding and lounge access arrangements.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card h-100 service-card">
                        <div class="card-body text-center">
                            <div class="icon-box mb-3">
                                <i class="fas fa-users fa-3x text-primary"></i>
                            </div>
                            <h4 class="card-title">Group Bookings</h4>
                            <p class="card-text">Special rates and coordinated itineraries for family trips, corporate events, and tour groups.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Why Choose Us Section -->
            <div class="row my-5 py-4 bg-light rounded">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">Why Choose Our Booking Service</h2>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in">
                    <div class="text-center feature-box">
                        <div class="icon-circle mb-3">
                            <i class="fas fa-tags"></i>
                        </div>
                        <h5>Best Price Guarantee</h5>
                        <p>We offer competitive rates and price matching on all bookings.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="text-center feature-box">
                        <div class="icon-circle mb-3">
                            <i class="fas fa-headset"></i>
                        </div>
                        <h5>24/7 Support</h5>
                        <p>Our team is available round the clock for any travel emergencies.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="text-center feature-box">
                        <div class="icon-circle mb-3">
                            <i class="fas fa-route"></i>
                        </div>
                        <h5>Flexible Options</h5>
                        <p>Change or cancel your bookings with minimal hassle and fees.</p>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3 mb-4" data-aos="zoom-in" data-aos-delay="300">
                    <div class="text-center feature-box">
                        <div class="icon-circle mb-3">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h5>Secure Booking</h5>
                        <p>SSL encrypted platform for safe payment processing.</p>
                    </div>
                </div>
            </div>
            
            <!-- Airlines Partners -->
            <div class="row my-5">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">Our Airline Partners</h2>
                    <p class="section-description">We work with major airlines globally to provide you the best service</p>
                </div>
                
                <div class="col-12">
                    <div class="partners-carousel text-center py-4">
                        <div class="row">
                            <div class="col-4 col-md-2 mb-4">
                                <div class="partner-logo">
                                    <img src="/api/placeholder/120/60" alt="Airline 1" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="partner-logo">
                                    <img src="/api/placeholder/120/60" alt="Airline 2" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="partner-logo">
                                    <img src="/api/placeholder/120/60" alt="Airline 3" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="partner-logo">
                                    <img src="/api/placeholder/120/60" alt="Airline 4" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="partner-logo">
                                    <img src="/api/placeholder/120/60" alt="Airline 5" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-4 col-md-2 mb-4">
                                <div class="partner-logo">
                                    <img src="/api/placeholder/120/60" alt="Airline 6" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Booking Process -->
            <div class="row my-5">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">Simple Booking Process</h2>
                    <p class="section-description">Book your flights in just three easy steps</p>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <span class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center">1</span>
                        </div>
                        <h4>Contact Us</h4>
                        <p>Reach out with your travel requirements through our contact form or phone.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <span class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center">2</span>
                        </div>
                        <h4>Get Quotations</h4>
                        <p>We'll provide you with multiple options based on your preferences and budget.</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="process-step text-center">
                        <div class="process-icon mb-3">
                            <span class="rounded-circle bg-primary text-white d-inline-flex align-items-center justify-content-center">3</span>
                        </div>
                        <h4>Confirm & Fly</h4>
                        <p>Choose your preferred option, make the payment, and receive your e-tickets.</p>
                    </div>
                </div>
            </div>
            
            <!-- Call to Action -->
            <div class="row my-5">
                <div class="col-12">
                    <div class="cta-box text-center p-5 bg-primary text-white rounded" data-aos="zoom-in">
                        <h2>Ready to Book Your Next Flight?</h2>
                        <p class="lead mb-4">Contact our travel experts today for the best deals and personalized service.</p>
                        <a href="contact.html" class="btn btn-light btn-lg">Get in Touch</a>
                    </div>
                </div>
            </div>
            
            <!-- FAQ Section -->
            <div class="row my-5">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                </div>
                
                <div class="col-12">
                    <div class="accordion" id="flightFAQ">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How far in advance should I book my flight?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#flightFAQ">
                                <div class="accordion-body">
                                    For domestic flights, we recommend booking 1-3 months in advance. For international flights, 2-6 months is generally ideal to get the best rates. However, last-minute deals are sometimes available, so don't hesitate to contact us even for urgent travel needs.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What if I need to change my flight date?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#flightFAQ">
                                <div class="accordion-body">
                                    We offer flexible booking options. Contact us as soon as you know about the change, and we'll help you navigate the airline's change policies to find the most cost-effective solution. In many cases, we can reduce or eliminate change fees through our special arrangements with airlines.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Do you offer travel insurance?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#flightFAQ">
                                <div class="accordion-body">
                                    Yes, we offer comprehensive travel insurance options that can cover flight cancellations, medical emergencies, lost luggage, and more. Our advisors will help you select the right coverage level for your specific trip requirements.
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Can you help with special services like wheelchair assistance?
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#flightFAQ">
                                <div class="accordion-body">
                                    Absolutely! We can arrange any special assistance you require, including wheelchair service, special meals, bassinet for infants, extra legroom seats, and more. Just let us know your requirements when you contact us, and we'll make all the necessary arrangements.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="testimonials-section py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2 class="section-title">What Our Clients Say</h2>
                    <p class="section-description">Hear from travelers who booked through our service</p>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up">
                    <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                        <div class="testimonial-rating text-warning mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"Their service saved me hours of searching online. They found me a business class deal that was cheaper than what I found on my own. Highly recommend!"</p>
                        <div class="testimonial-author d-flex align-items-center mt-3">
                            <div class="author-avatar me-3">
                                <img src="/api/placeholder/50/50" alt="Client" class="rounded-circle">
                            </div>
                            <div>
                                <h5 class="mb-0">Sarah Johnson</h5>
                                <small class="text-muted">Business Traveler</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                        <div class="testimonial-rating text-warning mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <p class="testimonial-text">"We needed to book flights for our family of 6, and T&T made it so easy. They found connecting flights that actually worked for us, and their customer service was outstanding."</p>
                        <div class="testimonial-author d-flex align-items-center mt-3">
                            <div class="author-avatar me-3">
                                <img src="/api/placeholder/50/50" alt="Client" class="rounded-circle">
                            </div>
                            <div>
                                <h5 class="mb-0">Michael Rodriguez</h5>
                                <small class="text-muted">Family Traveler</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card p-4 bg-white rounded shadow-sm h-100">
                        <div class="testimonial-rating text-warning mb-2">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <p class="testimonial-text">"When my flight was canceled due to weather, T&T's team was on it immediately. They rebooked me on the next available flight and kept me updated throughout. That's the value of working with professionals!"</p>
                        <div class="testimonial-author d-flex align-items-center mt-3">
                            <div class="author-avatar me-3">
                                <img src="/api/placeholder/50/50" alt="Client" class="rounded-circle">
                            </div>
                            <div>
                                <h5 class="mb-0">Amanda Chen</h5>
                                <small class="text-muted">Frequent Flyer</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row mt-4">
                <div class="col-12 text-center">
                    <a href="reviews.html" class="btn btn-outline-primary">View More Reviews</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4 mb-lg-0">
                    <h5 class="text-white mb-4">T&T Business Solutions</h5>
                    <p class="text-white-50">We provide comprehensive business solutions including real estate services, air ticket booking, and visa consultation to help businesses and individuals navigate complex processes with ease.</p>
                    <div class="social-links mt-4">
                        <a href="#" class="text-white-50 me-2"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-white-50 me-2"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-white-50 me-2"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="text-white-50"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4 mb-md-0">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="index.html" class="text-white-50">Home</a></li>
                        <li><a href="about.html" class="text-white-50">About Us</a></li>
                        <li><a href="services.html" class="text-white-50">Services</a></li>
                        <li><a href="contact.html" class="text-white-50">Contact</a></li>
                        <li><a href="reviews.html" class="text-white-50">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-6 mb-4 mb-md-0">
                    <h5 class="text-white mb-4">Services</h5>
                    <ul class="list-unstyled footer-links">
                        <li><a href="real-estate.html" class="text-white-50">Real Estate</a></li>
                        <li><a href="air-tickets.html" class="text-white-50">Air Tickets</a></li>
                        <li><a href="visa-services.html" class="text-white-50">Visa Services</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h5 class="text-white mb-4">Contact Info</h5>
                    <ul class="list-unstyled footer-contact">
                        <li class="d-flex mb-3">
                            <i class="fas fa-map-marker-alt text-primary me-3 mt-1"></i>
                            <span class="text-white-50">123 Business Avenue, Suite 100, New York, NY 10001</span>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="fas fa-phone-alt text-primary me-3 mt-1"></i>
                            <span class="text-white-50">+1 (555) 123-4567</span>
                        </li>
                        <li class="d-flex mb-3">
                            <i class="fas fa-envelope text-primary me-3 mt-1"></i>
                            <span class="text-white-50">info@tandtbusiness.com</span>
                        </li>
                        <li class="d-flex">
                            <i class="fas fa-clock text-primary me-3 mt-1"></i>
                            <span class="text-white-50">Mon - Fri: 9:00 AM - 6:00 PM</span>
                        </li>
                    </ul>
                </div>
            </div>
            <hr class="mt-4 mb-3 border-light">
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="text-white-50 mb-0">&copy; 2025 T&T Business Solutions. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="text-white-50 mb-0">
                        <a href="#" class="text-white-50">Privacy Policy</a> |
                        <a href="#" class="text-white-50">Terms of Service</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Library JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <!-- Custom JS -->
    <script src="js/main.js"></script>
    <script>
        // Initialize AOS animations
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>