
<!-- FOOTER -->

    <footer class="footer">
        <div class="footer-container">
            <span class="footer-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/whatsapp.png" alt="">
                Fale Conosco
            </span>
            <span class="footer-logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/footer-logo.png" alt="">
            </span>
            <span class="footer-item">
                Cadastre-se!
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/footer/sign-up.png" alt="">
            </span>
        </div>
    </footer>
    
    <script src="https://unpkg.com/lenis@1.3.11/dist/lenis.min.js"></script> 
    <script src="./src/main.js"></script>

    <script>
        // Initialize Lenis
        const lenis = new Lenis({
        autoRaf: true,
        });

        // Listen for the scroll event and log the event data
        lenis.on('scroll', (e) => {
        console.log(e);
        });
    </script>
    <?php wp_footer(); ?>

</body>
</html>

<!-- FIM FOOTER -->