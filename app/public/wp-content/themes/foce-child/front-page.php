<?php
get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner toAnim">            
        
            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " 
                alt="logo Fleurs d'oranger & chats errants" class="floatingElement zindex100" >

            <video autoplay loop muted 
                data-0="bottom: 100%;" 
                data-50="bottom: 50%;" 
                data-100="bottom: 0%">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/Studio+Koukaki-vidéo+header+sans+son.mp4'; ?> " type="video/mp4" style="position: absolute;" data-bottom-top="transform:translate3d(0, 0px, 0)" data-top-bottom="transform:translate3d(0, -200px, 0)">
            </video>
        </section>


        
        <section id="#story" class="story toAnim">
            <h2>
                <div class="animatedTitle">
                    L'histoire
                </div>
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
                            <div class="animatedTitle">
                                Les personnages
                            </div>
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
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/big_cloud.png'; ?> " />
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/img/little_cloud.png'; ?> " />
                    </div>
                </div>                
                <div>
                    <h3>
                        <div class="animatedTitle">
                            Le Lieu
                        </div>
                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>
            </article>
        </section>

        <section id="studio" class="toAnim">
            <h2>
                <div class="animatedTitle">
                    Studio Koukaki
                </div>
            </h2>
            <div>
                <p>Acteur majeur de l'animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d'innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d'oranger et chats errants”.</p>
            </div>
        </section>

    </main><!-- #main -->

<?php
get_footer();