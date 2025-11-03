<?php get_header(); ?>

    <!-- HERO -->

    <section class="hero">
        <h2 class="hero-title">
            O jeito mais fácil 
            de anunciar <br> em
            <span class="hero-title-colored">
                <!-- texto gerado automaticamente -->
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
                        'post_type' => 'product', // seu CPT
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $products = new WP_Query($args);

                    if ($products->have_posts()) :
                        while ($products->have_posts()) : $products->the_post();

                            // Campos ACF
                            $preco_hora = get_field('preco_hora') ?: 'R$20/hr';
                            $cidade = get_field('cidade') ?: 'São Paulo, SP';
                            $imagem_produto = get_field('imagem_do_produto');
                            $titulo_produto = get_field('titulo_do_produto') ?: get_the_title();
                ?>
                            <div class="products-item">
                                <?php if ($imagem_produto) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url($imagem_produto['url']); ?>" alt="<?php echo esc_attr($titulo_produto); ?>" class="product-image">
                                    </a>
                                <?php elseif (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
                                    </a>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1.png" alt="" class="product-image">
                                <?php endif; ?>

                                <div class="divisor"></div>

                                <div class="product-detail">
                                    <div class="product-detail-text">
                                        <h3><?php echo esc_html($preco_hora); ?></h3>
                                        <div class="city"><?php echo esc_html($cidade); ?></div>
                                    </div>

                                    <div class="product-detail-button">
                                        <a class="btn no-link" href="<?php the_permalink(); ?>">
                                            <span>Pedir agora</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>

            <div class="products-button-container">
                <!-- <a class="btn" href="<?php echo esc_url(home_url('/products/')); ?>"> -->
                <a class="btn" href="<?php echo esc_url( get_permalink( wc_get_page_id('shop') ) ); ?>">
                    <span>Ver todos</span>
                </a>
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
                        'post_type' => 'product', // seu CPT
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $products = new WP_Query($args);

                    if ($products->have_posts()) :
                        while ($products->have_posts()) : $products->the_post();

                            // Campos ACF
                            $preco_hora = get_field('preco_hora') ?: 'R$20/hr';
                            $cidade = get_field('cidade') ?: 'São Paulo, SP';
                            $imagem_produto = get_field('imagem_do_produto');
                            $titulo_produto = get_field('titulo_do_produto') ?: get_the_title();
                ?>
                            <div class="products-item">
                                <?php if ($imagem_produto) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo esc_url($imagem_produto['url']); ?>" alt="<?php echo esc_attr($titulo_produto); ?>" class="product-image">
                                    </a>
                                <?php elseif (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium', ['class' => 'product-image']); ?>
                                    </a>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/products/product-1.png" alt="" class="product-image">
                                <?php endif; ?>

                                <div class="divisor"></div>

                                <div class="product-detail">
                                    <div class="product-detail-text">
                                        <h3><?php echo esc_html($preco_hora); ?></h3>
                                        <div class="city"><?php echo esc_html($cidade); ?></div>
                                    </div>

                                    <div class="product-detail-button">
                                        <a class="btn no-link" href="<?php the_permalink(); ?>">
                                            <span>Pedir agora</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                ?>
            </div>

            <div class="products-button-container">
                <!-- <a class="btn" href="<?php echo esc_url(home_url('/products/')); ?>"> -->
                    <a class="btn" href="<?php echo esc_url( get_permalink( wc_get_page_id('shop') ) ); ?>">
                    <span>Ver todos</span>
                </a>
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
