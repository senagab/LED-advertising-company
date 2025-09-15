<?php get_header(); ?>

    <!-- HERO -->

    <section class="hero">
        <h2 class="hero-title">
            Skiff the new whatever, <span class="hero-title-colored">ready <br>
            yourself</span>
            for your enterprise
        </h2>
        <span class="hero-text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus ac agna mollis ornare sed. <br>
            Ut bibendum turpis nisi, vel tincidunt mauris.
        </span>
        <div class="bottom-hero">
            <div class="bottom-hero-item">
                <img class="bottom-hero-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-bell.png" alt="">
                <span class="bottom-hero-item-text">
                    Pedidos
                    respondidos
                </span>
            </div>
            <div class="bottom-hero-item">
                <img class="bottom-hero-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-paper-plane.png" alt="">
                <span class="bottom-hero-item-text">
                    Lorem ipsum dolor sit.
                </span>
            </div>
            <div class="bottom-hero-item">
                <img class="bottom-hero-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-sun.png" alt="">
                <span class="bottom-hero-item-text">
                    Lorem ipsum dolor sit.
                </span>
            </div>
            <div class="bottom-hero-item">
                <img class="bottom-hero-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-arrow.png" alt="">
                <span class="bottom-hero-item-text">
                    Lorem ipsum dolor sit.
                </span>
            </div>
            <div class="bottom-hero-item">
                <img class="bottom-hero-item-icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-rocket.png" alt="">
                <span class="bottom-hero-item-text">
                    Lorem ipsum dolor sit.
                </span>
            </div>
        </div>
    </section>

    <!-- CARDS -->

    <section class="cards">
        <div class="card-container">
            <div class="card-text">
                <h2>lorem ipsum</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit,
                    magna semper finibus blandit, purus mi laoreet sem, eget posuere nisi massa ut ligula.
                </p>
                <a class="btn no-link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                    Saber mais
                </a>
            </div>
            <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/card-1.png" alt="man smiling">
            </div>
        </div>

        <div class="card-container">
            <div class="card-text">
                <h2>lorem ipsum</h2>
                <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras hendrerit,
                magna semper finibus blandit, purus mi laoreet sem, eget posuere nisi massa ut ligula.
                </p>
                <a class="btn no-link" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                    Saber mais
                </a>
            </div>
            <div class="card-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cards/card-2.png" alt="woman holding coffee">
            </div>
        </div>
    </section>

    <!-- PRODUCTS -->
    <section class="products">
        <div class="container">
            <div class="products-title-container">
                <div></div>
                <h2>
                    Painéis recentes
                </h2>
            </div>

            <div class="products-container">
                <?php
                // SIMPLE STATIC FALLBACK — if you later add a CPT 'product' you can replace this with a loop (see functions.php below)
                for ( $i = 0; $i < 4; $i++ ) : ?>
                    <div class="products-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1.png" alt="" class="product-image">
                        <div class="divisor"></div>
                        <div class="product-detail">
                            <div class="product-detail-text">
                                <h3>R$20/hr</h3>
                                <div class="city">São Paulo, SP</div>
                            </div>
                            <div class="product-detail-button">
                                <a class="btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Pedir agora</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="products-button-container">
                <a class="btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Ver todos</a>
            </div>

            <div class="products-title-container">
                <h2>Mais procurados</h2>
            </div>

            <div class="products-container">
                <?php
                // repeat the same static block for "Mais procurados"
                for ( $i = 0; $i < 4; $i++ ) : ?>
                    <div class="products-item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1.png" alt="" class="product-image">
                        <div class="divisor"></div>
                        <div class="product-detail">
                            <div class="product-detail-text">
                                <h3>R$20/hr</h3>
                                <div class="city">São Paulo, SP</div>
                            </div>
                            <div class="product-detail-button">
                                <a class="btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Pedir agora</a>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="products-button-container">
                <a class="btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Ver todos</a>
            </div>
        </div>
    </section>

    <!-- CLIENTS -->

    <section class="clients">
        <div class="clients-track">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-1.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-2.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-3.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-4.svg" alt="">
            <!-- duplicated for seamless loop -->
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-1.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-2.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-3.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-4.svg" alt="">
            <!-- duplicated for seamless loop -->
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-1.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-2.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-3.svg" alt="">
            <img class="clients-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/clients/promo-4.svg" alt="">
        </div>
    </section>

    <!-- CALL TO ACTION -->

    <section class="cta">
        <div class="cta-card">
            <h2>Faça novos negócios e conexões</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam quis lacus ac magna mollis.
            </p>
            <a class="btn" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">
                <span>Começar</span>
            </a>
        </div>
        <div class="cta-card-image"></div>
    </section>

<?php get_footer(); ?>
