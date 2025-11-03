document.addEventListener("DOMContentLoaded", function () {
  // MODAL
  const modal = document.getElementById("tutorialModal");
  if (modal) {
    const content = modal.querySelector(".modal-content");
    modal.style.display = "flex";

    modal.addEventListener("click", function (event) {
      if (event.target === modal) {
        content.style.animation = "fadeOutModal 0.4s ease forwards";
        setTimeout(() => {
          modal.style.display = "none";
          content.style.animation = "fadeInModal 0.5s ease forwards";
        }, 400);
      }
    });
  }

  // HERO 1 ANIMATION
  const heroTitleColored = document.querySelector(".hero-title-colored");
  if (heroTitleColored) {
    const locations = ["ruas", "aeroportos", "transportes", "elevadores", "shoppings"];
    let index = 0;
    function changeText() {
      heroTitleColored.textContent = locations[index];
      index = (index + 1) % locations.length;
    }
    setInterval(changeText, 1000);
    changeText();
  }

  // HERO 2 ANIMATION
  const hero = document.querySelector(".hero-2");
  if (hero) {
    const titleSpans = hero.querySelectorAll(".hero-2-title span");
    titleSpans.forEach(span => span.style.animationPlayState = "paused");

    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          titleSpans.forEach(span => span.style.animationPlayState = "running");
          observer.unobserve(hero);
        }
      });
    }, { threshold: 0.3 });
    observer.observe(hero);
  }

  // MENU TOGGLE
  const toggle = document.getElementById("menu-toggle");
  const menu = document.getElementById("menu");
  if (toggle && menu) {
    toggle.addEventListener("click", () => {
      menu.classList.toggle("active");
    });
  }
});
