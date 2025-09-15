<?php
/*
Template Name: About Us
*/
get_header(); ?>

    <!-- SOBRE NÓS -->

    <style>
        .about {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 50px;
        }

        .about-image img {
            width: 45vh;
            margin: 20px;
            /* max-width: 500px; */
        }

        .about-text h2 {
            font-size: 3em;
            letter-spacing: -.08em;
        }

        .about-text p {
            color: #b9b9b9;
            font-size: 1em;
            line-height: 1.5em;
        }

        @media (max-width: 900px) {
            .about {
                flex-direction: column;
            }

            .about-image img {
                width: 80vw;
            }

            .about-text {
                padding: 10px 30px 45px;
                margin-bottom: 30px 0;
            }

            .about-text h2 {
                font-size: 2.5em;
                text-align: center;
            }

            .about-text p {
                font-size: 1em;
                text-align: justify;
            }
        }
    </style>

    <section class="about container">
        <div class="about-image">
            <img src="../../../assets/images/about/about.png" alt="">
        </div>
        <div class="about-text">
            <h2>Sobre nós</h2>

            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis exercitationem dolores temporibus aliquid neque quas rem animi corrupti quasi ullam incidunt delectus, aperiam, aspernatur reprehenderit quibusdam totam, dolorem expedita quidem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis exercitationem dolores temporibus aliquid neque quas rem animi corrupti quasi ullam incidunt delectus, aperiam, aspernatur reprehenderit quibusdam totam, dolorem expedita quidem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis exercitationem dolores temporibus aliquid neque quas rem animi corrupti quasi ullam incidunt delectus, aperiam, aspernatur reprehenderit quibusdam totam, dolorem expedita quidem!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis exercitationem dolores temporibus aliquid neque quas rem animi corrupti quasi ullam incidunt delectus, aperiam, aspernatur reprehenderit quibusdam totam, dolorem expedita quidem!
            </p>
        </div>
    </section>

<?php get_footer(); ?>