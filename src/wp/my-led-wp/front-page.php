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
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'tax_query' => array(
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
                        $price_html = $product->get_price_html();
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
                                <div class="city">Campo Grande</div>
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
            <div class="products-button-container">
                <a class="btn no-link" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
                    <span>Ver todos</span>
                </a>
            </div>
        </div>
    </section>


<!-- BANNERS HORIZONTAIS -->
<section class="horizontal-banners">
    <div class="container">
        <?php 
            // Garante que estamos pegando os campos da página atual
            $page_id = get_queried_object_id();

            // Obtém as imagens definidas no ACF
            $imagem_1 = get_field('imagem_1', $page_id);
            $imagem_2 = get_field('imagem_2', $page_id);

            // Define as URLs (usa fallback se não houver imagem)
            $imagem_1_url = $imagem_1 ? esc_url($imagem_1['url']) : get_template_directory_uri() . '/assets/images/products/banner-1.png';
            $imagem_2_url = $imagem_2 ? esc_url($imagem_2['url']) : get_template_directory_uri() . '/assets/images/products/banner-2.png';
        ?>

        <div class="horizontal-banners-item">
            <img src="<?php echo $imagem_1_url; ?>" alt="Banner 1">
        </div>
        
        <div class="horizontal-banners-item">
            <img src="<?php echo $imagem_2_url; ?>" alt="Banner 2">
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
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'tax_query' => array(
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
                        $price_html = $product->get_price_html();
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
                                <div class="city">Campo Grande</div>
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
            
            <div class="products-button-container">
                <a class="btn no-link" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">
                    <span>Ver todos</span>
                </a>
            </div>
        </div>
    </section>

<!-- ANUNCIANTES -->

    <section class="advertisers">
        <div class="container">
            <?php 
                $page_id = get_queried_object_id();
                $grupo_anunciantes = get_field('anunciantes', $page_id);

                $titulo_anunciantes = $grupo_anunciantes['titulo_anunciantes'] ?? 'Anunciantes';
                $subtitulo_anunciantes = $grupo_anunciantes['subtitulo_anunciantes'] ?? '';
            ?>
            
            <h2><?php echo esc_html($titulo_anunciantes); ?></h2>

            <?php if ($subtitulo_anunciantes): ?>
                <span class="advertisers-text"><?php echo esc_html($subtitulo_anunciantes); ?></span>
            <?php endif; ?>

            <div class="advertisers-group">
                <?php 
                for ($i = 1; $i <= 4; $i++): 
                    $titulo = $grupo_anunciantes["titulo_anunciante_{$i}"] ?? "Anunciante {$i}";
                    $descricao = $grupo_anunciantes["descricao_anunciante_{$i}"] ?? 'Lorem ipsum dolor sit amet.';
                    $foto = $grupo_anunciantes["foto_anunciante_{$i}"] ?? null;
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
    <?php 
        // Obtém o ID da página atual
        $page_id = get_queried_object_id();

        // Busca a imagem definida no ACF
        $imagem_cta = get_field('imagem_cta', $page_id);

        // Define a URL da imagem (fallback caso o campo esteja vazio)
        $imagem_cta_url = $imagem_cta ? esc_url($imagem_cta['url']) : get_template_directory_uri() . '/assets/images/defaults/cta-bg.png';

        // Campos opcionais (caso futuramente queira torná-los dinâmicos)
        $titulo_cta = get_field('titulo_cta', $page_id) ?: 'EMPRESÁRIO COLOQUE <span class="accent">SEU PAINEL</span> NO IMOOH';
        $descricao_cta = get_field('descricao_cta', $page_id) ?: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis lacus ac magna mollis.';
        $link_cta = get_field('link_cta', $page_id) ?: '/src/pages/products/product-page.html';
        $texto_botao_cta = get_field('texto_botao_cta', $page_id) ?: 'Pedir agora';
    ?>

    <div class="cta-card">
        <h2><?php echo wp_kses_post($titulo_cta); ?></h2>
        <p><?php echo esc_html($descricao_cta); ?></p>

        <a class="btn no-link" href="<?php echo esc_url($link_cta); ?>">
            <span><?php echo esc_html($texto_botao_cta); ?></span>
        </a>
    </div>

    <!-- Imagem de fundo decorativa -->
    <div 
        class="cta-card-image" 
        aria-hidden="true" 
        style="background-image: url('<?php echo $imagem_cta_url; ?>');">
    </div>
</section>


<?php get_footer(); ?>
