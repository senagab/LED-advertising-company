// MODAL
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("tutorialModal");

        // Show modal only first time
        if (!localStorage.getItem("tutorialShown")) {
            modal.style.display = "block";
            localStorage.setItem("tutorialShown", "true");
        }

        // Close modal if user clicks outside the modal content
        modal.addEventListener("click", function (event) {
            if (event.target === modal) {
            modal.style.display = "none";
            }
        });
    });

// HERO 1 ANIMATION

    // Select the span element
    const heroTitleColored = document.querySelector('.hero-title-colored');

    // Define the list of texts to loop through
    const locations = ['ruas', 'aeroportos', 'transportes', 'elevadores', 'shoppings'];

    // Start at the first index
    let index = 0;

    // Function to change the text
    function changeText() {
        heroTitleColored.textContent = locations[index];
        index = (index + 1) % locations.length; // Loop back to 0 when reaching the end
    }

    // Change the text every second (1000 ms)
    setInterval(changeText, 1000);

    // Optionally, run once immediately so it doesn’t wait 1s for the first update
    changeText();

// HERO 2 ANIMATION
    document.addEventListener("DOMContentLoaded", () => {
    const hero = document.querySelector(".hero-2");
    const titleSpans = hero.querySelectorAll(".hero-2-title span");

    // Pause animation initially
    titleSpans.forEach(span => span.style.animationPlayState = "paused");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
        if (entry.isIntersecting) {
            // Start the animation when visible
            titleSpans.forEach(span => span.style.animationPlayState = "running");
            observer.unobserve(hero); // Run only once
        }
        });
    }, { threshold: 0.3 }); // 0.3 = 30% of section visible

    observer.observe(hero);
    });
    

// MENU TOGGLE
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });