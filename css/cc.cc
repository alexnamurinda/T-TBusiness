/* General Styles */
@import url('http://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;

}

body {
    /* font-family: Arial, sans-serif; */
    margin: 0;
    padding: 0;
    background-color: #f8f9fa;
}

/* Navbar Container */
.nav_container {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    background-image: url('../images/nav_bg1.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: auto;
    padding: 10px 30px 10px 20px;
    display: flex;
    justify-content: space-around;
    z-index: 1000;
}

/* White overlay on nav background */
.nav_container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7);
    z-index: -2;
}

/* Push nav content above overlay */
.nav_container>* {
    position: relative;
    z-index: 2;
}

/* Nav links spacing */
.navbar-nav .nav-item {
    margin-top: 15px;
}

/* Brand styling */
.navbar-brand {
    font-size: 1.5rem;
    font-weight: bold;
}

/* Hover effect */
.nav-link:hover {
    color: darkgoldenrod;
    font-weight: bold;
}

/* Logo image */
.logo {
    height: 130px;
    border-radius: 8px;
}

/* Company name text (small screens) */
.company-name {
    font-size: 1.3rem;
    font-family: 'Segoe UI', sans-serif;
}

/* Toggler spacing */
.navbar-toggler {
    z-index: 2;
    margin-left: auto;
}


.container {
    background: transparent;
    margin: auto;
    padding: 0 15px;
}

/* Offcanvas Customization */
.offcanvas {
    width: 100px;
    align-items: center;
    /* background-color: rgba(255, 255, 255, 0.95);
    backdrop-filter: blur(4px); */
}

/* Hero Section */
.hero-section {
    position: relative;
    height: 75vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: darkgoldenrod;
    overflow: hidden;
    transition: opacity 1s ease-in-out;
}

/* Background Image Holder */
.hero-section::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 1;
    transition: opacity 2s ease-in-out;
}

/* Fade Effect for Text and Button */
.hero-section h1,
.hero-section p,
.hero-section a {
    position: relative;
    z-index: 2;
    opacity: 1;
    transition: opacity 1.5s ease-in-out;
}

/* Apply DarkGoldenRod Color to Headings */
.hero-section h1 {
    color: darkgoldenrod;
    /* Heading color */
    font-size: 3rem;
    font-weight: bold;
}

/* Search Bar */
.search-bar {
    background-color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
}

/* Featured Properties */
.card {
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s;
}

.card:hover {
    transform: scale(1.05);
}

.card img {
    height: 200px;
    object-fit: cover;
}

.card-body {
    text-align: center;
}

/* Contact Section */
.contact-section {
    background-color: #007bff;
    color: white;
    padding: 40px;
    text-align: center;
}

/* Footer */
footer {
    background-color: #343a40;
    color: white;
    padding: 15px;
    text-align: center;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .nav_container {
        padding: 10px 15px;
        flex-direction: row;
        align-items: center;
        height: auto;
        justify-content: space-between;
    }

    .logo {
        display: none !important;
    }

    .company-name {
        display: block;
    }
}
