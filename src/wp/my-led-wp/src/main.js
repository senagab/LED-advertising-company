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



    // Função para alternar a ordem
    function reorderCards(e) {
        const cardContainers = document.querySelectorAll('.card-container');

        cardContainers.forEach(container => {
            const text = container.querySelector('.card-text');
            const image = container.querySelector('.card-image');

            if (e.matches) {
            // Mobile: imagem antes do texto
            if (container.firstElementChild !== image) {
                container.insertBefore(image, text);
            }
            } else {
            // Desktop: texto antes da imagem
            if (container.firstElementChild !== text) {
                container.insertBefore(text, image);
            }
            }
        });
    }

    // Media query para mobile
    const mediaQuery = window.matchMedia("(max-width: 768px)");

    // Executa no carregamento
    reorderCards(mediaQuery);

    // Executa sempre que mudar o tamanho da tela
    mediaQuery.addEventListener("change", reorderCards);
    

    // Menu hamburger
    const toggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    toggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });