<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T&TBusiness Solutions | Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">T&T Business Solutions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="properties.html">Properties</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Testimonials</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Listings</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Why Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">free site visit</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section text-white text-center">
        <div class="container">
            <h1 id="hero-title" class="display-4">Find your Dream Home</h1>
            <p id="hero-text">Browse our latest properties for sale and rent</p>
            <a href="properties.html" id="hero-btn" class="btn btn-primary">View Listings</a>
        </div>
    </header>





    <!-- Search Bar -->
    <section class="container search-bar py-4">
        <form class="row g-3">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Search by Location">
            </div>
            <div class="col-md-4">
                <select class="form-select">
                    <option selected>Property Type</option>
                    <option>House</option>
                    <option>Apartment</option>
                    <option>Commercial</option>
                </select>
            </div>
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
        </form>
    </section>

    <!-- Featured Properties -->
    <section class="container py-5">
        <h2 class="text-center">Featured Properties</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="images/property1.jpg" class="card-img-top" alt="Property 1">
                    <div class="card-body">
                        <h5 class="card-title">Modern Apartment</h5>
                        <p class="card-text">$120,000 - 2 Beds, 2 Baths</p>
                        <a href="property-details.html" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/property2.jpg" class="card-img-top" alt="Property 2">
                    <div class="card-body">
                        <h5 class="card-title">Luxury Villa</h5>
                        <p class="card-text">$350,000 - 4 Beds, 3 Baths</p>
                        <a href="property-details.html" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="images/property3.avif" class="card-img-top" alt="Property 3">
                    <div class="card-body">
                        <h5 class="card-title">Cozy Townhouse</h5>
                        <p class="card-text">$180,000 - 3 Beds, 2 Baths</p>
                        <a href="property-details.html" class="btn btn-outline-primary">View Details</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container py-5 text-center">
        <h2>Get in Touch</h2>
        <p>Have any questions? Contact us today!</p>
        <a href="contact.html" class="btn btn-primary">Contact Us</a>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2025 RealEstate. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

<script src="script.js"></script>

</html>