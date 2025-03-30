document.addEventListener("DOMContentLoaded", function () {
    const titles = [
        "Find your Dream Home",
        "Luxury Homes & Affordable Plots",
        "Your Perfect Property Awaits!"
    ];
    const texts = [
        "Browse our latest properties for sale and rent",
        "Discover amazing deals on houses and rentals",
        "Find the best plots and book a visit today!"
    ];
    const buttons = [
        "View Listings",
        "Explore Properties",
        "Start Your Search"
    ];
    const images = [
        "images/hero2.jpg",
        "images/property1.jpg",
        "images/property2.jpg"
    ];

    let index = 0;
    const heroSection = document.querySelector(".hero-section");
    const titleElement = document.getElementById("hero-title");
    const textElement = document.getElementById("hero-text");
    const btnElement = document.getElementById("hero-btn");

    // Set initial background image
    heroSection.style.backgroundImage = `url('${images[index]}')`;

    function changeHeroContent() {
        // Fade out text, button, and background
        titleElement.style.opacity = "0";
        textElement.style.opacity = "0";
        btnElement.style.opacity = "0";
        heroSection.style.opacity = "0.1";

        setTimeout(() => {
            // Change content
            heroSection.style.background = `url('${images[index]}') no-repeat center center/cover`;
            titleElement.innerText = titles[index];
            textElement.innerText = texts[index];
            btnElement.innerText = buttons[index];

            // Fade in text, button, and background
            titleElement.style.opacity = "1";
            textElement.style.opacity = "1";
            btnElement.style.opacity = "1";
            heroSection.style.opacity = "1";
        }, 1000);

        index = (index + 1) % titles.length;
    }

    // Change content every 30 seconds
    setInterval(changeHeroContent, 10000);
});
