<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section>
            <style>
                .btn {
                    width:10em;
                    text-align:center;
                    padding:1em;
                    background:pink;
                    border-radius:0.5em;
                    margin-top:2em;

                    &:active {
                        & + .progress {
                            & > .progress__bar {
                                transform: scaleX(3);
                            }
                        }
                    }
                }

                .progress {
                    border: 1px solid black;
                    height:1em;
                    margin:2em 0;
                    width:50%;
                    overflow: hidden;
                    
                    .progress__bar {
                        height:100%;
                        background-color: pink;
                        transform: scaleX(0);
                        transition: transform 1000ms cubic-bezier(.32,0,.07,1);
                        transform-origin: left;
                    }
                }

            </style>
            <div class="container">
                <div class="btn">Charger!</div>
                <div class="progress">
                    <div class="progress__bar"></div>
                </div>
            </div>
        </section>
        <section class="banner toAnim">
            <div class="position-absolute zindex100">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
            <!-- For desktop -->
            <video autoplay loop muted>
                <source src="http://koukaki.local/wp-content/themes/foce-child/assets/Studio+Koukaki-vidéo+header+sans+son.mp4" type="video/mp4">
            </video>

            

        </section>
        <section id="#story" class="story toAnim">
            <h2>
                <div id="movetxt">L'histoire</div>                
            </h2>
            
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters" style="width:100%">
                <div class="main-character">
                    <!-- Swiper -->
                    <div class="swiper mySwiper">
                        <h3>
                            <div id="movetxt">Les personnages</div>
                        </h3>
                        <div class="swiper-wrapper">
                        <?php  
                        while ( $characters_query->have_posts() ) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide">';
                            echo '<figure>';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<figcaption>';
                            the_title();
                            echo'</figcaption>';
                            echo '</figure>';
                            echo '</div>';
                        }
                        ?>
                        </div>
                    </div>
                </div>
            </article>
            <article id="place">
                <div class="big_cloud_container">
                    <div class="clouds">
                        <img src="/wp-content/themes/foce-child/assets/img/big_cloud.png" />
                        <img src="/wp-content/themes/foce-child/assets/img/little_cloud.png" />
                    </div>
                </div>                
                <div>
                    <h3>
                        <div id="movetxt">Le Lieu</div>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>


        <section id="studio" class="toAnim">
            <h2>
                <div id="movetxt">Studio Koukaki</div>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
    </main><!-- #main -->

<?php
get_footer();