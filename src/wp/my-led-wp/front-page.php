<?php
/*
 * Template Name: Home Nova
 * Template Post Type: page
 */
?>

<?php get_header(); ?>

<?php echo '<!-- FRONT-PAGE.PHP ACTIVE -->'; ?>

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
                <h2>Recentes</h2>
            </div>

            <div class="products-container">
                <?php
                    // Configura a query para produtos com a tag "recentes"
                    $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'tax_query'      => array(
                        array(
                        'taxonomy' => 'product_tag',
                        'field'    => 'slug',
                        'terms'    => 'recentes',
                        ),
                    ),
                );

                $products = new WP_Query($args);

                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();
                        global $product;
                        $product = wc_get_product(get_the_ID());

                        if ( ! $product ) {
                            continue; // pula se o produto não existir
                        }

                        $price_html = $product->get_price_html();

                        // Pega o atributo personalizado "cidade"
                        $cidade_terms = wp_get_post_terms(get_the_ID(), 'pa_cidade');
                        $cidade = !empty($cidade_terms) ? $cidade_terms[0]->name : '';
                ?>
                <div class="products-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', ['class' => 'product-image']);
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/products/product-1.png" alt="" class="product-image">';
                            }
                        ?>
                    </a>

                    <div class="divisor"></div>

                    <div class="product-detail">
                        <div class="product-detail-text">
                            <h3><?php echo $price_html; ?></h3>
                            <!-- <div class="city"><?php echo esc_html($cidade); ?></div> -->
                            <div class="city">teste</div>
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
                    else:
                        echo '<p>Nenhum produto encontrado.</p>';
                    endif;
                ?>
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
                <h2>Mais procurados</h2>
            </div>

            <div class="products-container">
                <?php
                    // Configura a query para produtos com a tag "recentes"
                    $args = array(
                    'post_type'      => 'product',
                    'posts_per_page' => 4,
                    'orderby'        => 'date',
                    'order'          => 'DESC',
                    'tax_query'      => array(
                        array(
                        'taxonomy' => 'product_tag',
                        'field'    => 'slug',
                        'terms'    => 'mais-procurados',
                        ),
                    ),
                );

                $products = new WP_Query($args);

                if ($products->have_posts()) :
                    while ($products->have_posts()) : $products->the_post();
                        global $product;
                        $product = wc_get_product(get_the_ID());

                        if ( ! $product ) {
                            continue; // pula se o produto não existir
                        }

                        $price_html = $product->get_price_html();

                        // Pega o atributo personalizado "cidade"
                        $cidade_terms = wp_get_post_terms(get_the_ID(), 'pa_cidade');
                        $cidade = !empty($cidade_terms) ? $cidade_terms[0]->name : '';
                ?>
                <div class="products-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php 
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('medium', ['class' => 'product-image']);
                            } else {
                                echo '<img src="' . get_template_directory_uri() . '/assets/images/products/product-1.png" alt="" class="product-image">';
                            }
                        ?>
                    </a>

                    <div class="divisor"></div>

                    <div class="product-detail">
                        <div class="product-detail-text">
                            <h3><?php echo $price_html; ?></h3>
                            <!-- <div class="city"><?php echo esc_html($cidade); ?></div> -->
                            <div class="city">teste</div>
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
                    else:
                        echo '<p>Nenhum produto encontrado.</p>';
                    endif;
                ?>
            </div>
        </div>
    </section>



<!-- ANUNCIANTES -->
    <section class="advertisers">
        <div class="container">
            <h2>
                <?php echo esc_html(get_field('titulo_anunciantes')) ?: 'Anunciantes'; ?>
            </h2>

            <span class="advertisers-text">
                <?php echo esc_html(get_field('texto_anunciantes')) ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus ac magna mollis.'; ?>
            </span>

            <div class="advertisers-group">
                <?php 
                // Loop de 1 a 4 (anunciantes)
                for ($i = 1; $i <= 4; $i++): 
                    $titulo = get_field("titulo_anunciante_{$i}") ?: "Anunciante {$i}";
                    $descricao = get_field("descricao_anunciante_{$i}") ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
                    $foto = get_field("foto_anunciante_{$i}");
                    $foto_url = $foto ? esc_url($foto['url']) : get_template_directory_uri() . "/assets/images/advertisers/item-{$i}.png";
                ?>
                    <div class="advertisers-item item-<?php echo $i; ?>" style="background-image:url('<?php echo $foto_url; ?>')">
                        <h3><?php echo esc_html($titulo); ?></h3>
                        <span class="advertisers-item-text"><?php echo esc_html($descricao); ?></span>
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
