<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap-grid.min.css">
    <script src="./src/main.js"></script>
    <?php wp_head(); ?>
</head>
<body>

    <!-- HEADER -->

    <section class="header">
        <div class="header-esquerda">
            <h1 style="display: none;">
                logo
            </h1>
            <a href="#">
                <!-- <span class="logo">logo</span> -->
                <img class="logo" src="./assets/images/hero/logo.png" alt="">
            </a>
        </div>

        <!-- Botão Hamburguer (só aparece no mobile) -->
        <div class="menu-toggle" id="menu-toggle">
            ☰
        </div>

        <div id="menu" class="header-centro navbar-toggler">
            <ul>
                <li>
                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                        QUEM SOMOS
                    </a>    
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/products/' ) ); ?>" >
                        PRODUTOS
                    </a>    
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">
                        ANUNCIANTES
                    </a>
                </li>
            </ul>
        </div>

        <div class="header-direita">
            <div class="header-direita-item">
                
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-cart.png" alt="">
                <a class="no-link" href="./src/pages/orders/orders.html">
                    <span class="cart-text">
                        Acompanhar <br>
                        <span class="text-bold">
                            pedidos
                        </span>
                    </span>
                </a>
            </div>
            <div class="header-direita-item">
                <img class="icon" src="<?php echo get_template_directory_uri(); ?>/assets/images/hero/icon-login.png" alt="">
                <a class="no-link" href="./src/pages/login/login.html">
                    <span class="cart-login">
                        Seja bem vindo! <br>
                        <span class="text-bold">
                            Entrar ou Cadastrar
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </section>
