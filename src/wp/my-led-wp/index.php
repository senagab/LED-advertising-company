<?php get_header(); ?>

    <!-- HERO -->

    <section class="hero">
        <h2 class="hero-title">
            O jeito mais fácil 
            de anunciar <br> em
            <span class="hero-title-colored">
                Campo Grande?
            </span>
        </h2>
        <div class="bottom-hero">
            <div class="bottom-hero-item">
                <span class="bottom-hero-item-text">
                    Quero anunciar online
                </span>
            </div>
            <div class="bottom-hero-item">
                <span class="bottom-hero-item-text">
                    Anunciantes
                </span>
            </div>
            <div class="bottom-hero-item">
                <span class="bottom-hero-item-text">
                    Melhores pontos
                </span>
            </div>
            <div class="bottom-hero-item">
                <span class="bottom-hero-item-text">
                    Quem somos
                </span>
            </div>
        </div>
    </section>

    <!-- HERO 2 -->

    <section class="hero-2" style="padding: 100px; background-color: #f9f9f9; animation: heroBreath 6s ease-in-out infinite;">
        <h2 class="hero-2-title">
            <span>Já</span> <span>pensou</span> <span>em</span> <span>ver</span> <span>sua</span> <span>marca</span> <span>nos</span> <span>melhores</span> <span>locais</span> <span>de</span> <span class="accent">Campo</span> <span class="accent">Grande</span> <span>?</span>
        </h2>
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
                    $args = array(
                        'post_type' => 'myled_product',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $products = new WP_Query( $args );
                    if ( $products->have_posts() ) :
                        while ( $products->have_posts() ) : $products->the_post(); ?>
                            <div class="products-item">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class'=>'product-image')); ?></a>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1.png" alt="" class="product-image">
                                <?php endif; ?>

                                <div class="divisor"></div>
                                <div class="product-detail">
                                    <div class="product-detail-text">
                                        <h3><?php echo esc_html( get_post_meta(get_the_ID(), 'price', true) ?: 'R$20/hr' ); ?></h3>
                                        <div class="city"><?php echo esc_html( get_post_meta(get_the_ID(), 'city', true) ?: 'São Paulo, SP' ); ?></div>
                                    </div>
                                    <div class="product-detail-button">
                                        <a class="btn" href="<?php the_permalink(); ?>">Pedir agora</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>

            <div class="products-button-container">
                <a class="btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Ver todos</a>
            </div>
        </div>
    </section>

    <!-- BANNERS HORIZONTAIS -->

    <section class="horizontal-banners">
        <div class="container">
            
            <div class="horizontal-banners-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/banner-1.png" alt="">
            </div>
            
            <div class="horizontal-banners-item">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/banner-2.png" alt="">
            </div>

        </div>
    </section>

    <!-- PRODUCTS -->
    
    <section class="products">
        <div class="container">
            <div class="products-title-container">
                <div></div>
                <h2>
                    Mais procurados
                </h2>
            </div>

            <div class="products-container">
                <?php
                    $args = array(
                        'post_type' => 'myled_product',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $products = new WP_Query( $args );
                    if ( $products->have_posts() ) :
                        while ( $products->have_posts() ) : $products->the_post(); ?>
                            <div class="products-item">
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class'=>'product-image')); ?></a>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1.png" alt="" class="product-image">
                                <?php endif; ?>

                                <div class="divisor"></div>
                                <div class="product-detail">
                                    <div class="product-detail-text">
                                        <h3><?php echo esc_html( get_post_meta(get_the_ID(), 'price', true) ?: 'R$20/hr' ); ?></h3>
                                        <div class="city"><?php echo esc_html( get_post_meta(get_the_ID(), 'city', true) ?: 'São Paulo, SP' ); ?></div>
                                    </div>
                                    <div class="product-detail-button">
                                        <a class="btn" href="<?php the_permalink(); ?>">Pedir agora</a>
                                    </div>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>

            <div class="products-button-container">
                <a class="btn" href="<?php echo esc_url( home_url( '/products/' ) ); ?>">Ver todos</a>
            </div>
        </div>
    </section>

    <!-- ANUNCIANTES -->

    <section class="advertisers">
        <div class="container">
            <h2>
                <?php echo get_field('anunciantes_titulo') ?: 'Anunciantes'; ?>
            </h2>

            <span class="advertisers-text">
                <?php echo get_field('anunciantes_subtitulo') ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus ac magna mollis.'; ?>
            </span>

            <div class="advertisers-group">
                <?php 
                // Total number of advertiser slots
                for ($i = 1; $i <= 4; $i++): 
                    $title = get_field("anunciantes_item_{$i}_title") ?: "Anunciante {$i}";
                    $text = get_field("anunciantes_item_{$i}_text") ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus ac magna mollis.';
                    $image = get_field("anunciantes_item_{$i}_image")['url'] ?? get_template_directory_uri() . "/assets/images/advertisers/item-{$i}.png";
                    // $icon = get_field("anunciantes_item_{$i}_icon") ?: ['left', 'top', 'bottom', 'right'][$i-1]; // fallback order
                ?>
                    <div class="advertisers-item item-<?php echo $i; ?>" style="background-image:url('<?php echo esc_url($image); ?>')">
                        <h3><?php echo esc_html($title); ?></h3>
                        <span class="advertisers-item-text"><?php echo esc_html($text); ?></span>
                        <!-- <i class="advertisers-icon <?php echo esc_attr($icon); ?>">
                            <?php 
                            // switch ($icon) {
                            //     case 'left': echo '➜'; break;
                            //     case 'right': echo '←'; break;
                            //     case 'top': echo '⬇'; break;
                            //     case 'bottom': echo '⬆'; break;
                            //     default: echo '➜';
                            // }
                            ?>
                        </i> -->
                    </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>


<!-- CALL TO ACTION -->

    <section class="cta">
        <div class="cta-card">
            <h2>
                EMPRESÁRIO
                COLOQUE <span class="accent">SEU PAINEL</span>
                NO IMOOH
            </h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Aliquam quis lacus ac magna mollis.
            </p>

            <!-- use an anchor styled as a button for navigation -->
            <a class="btn no-link" href="/src/pages/products/product-page.html">
                <span>
                    Pedir agora
                </span>
            </a>
        </div>

        <!-- decorative background image: aria-hidden if purely visual -->
        <div class="cta-card-image" aria-hidden="true"></div>
    </section>

<?php get_footer(); ?>
