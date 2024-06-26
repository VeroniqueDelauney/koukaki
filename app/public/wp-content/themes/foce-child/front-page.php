<?php
get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner">
            <div class="animLogo">
                <img id="Image" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants" class="floatingElement zindex100" >           
            </div>
            <video autoplay loop muted class="video">
                <source src="<?php echo get_stylesheet_directory_uri() . '/assets/Studio+Koukaki-vidéo+header+sans+son.mp4'; ?> " 
                type="video/mp4" >
            </video>
        </section>
        
        <section id="story" class="story toAnim">
            <h2>
                <div class="animatedTitle">
                    L'histoire
                </div>
            </h2>
            
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>



            <!-- Partial template for personnages -->
            <?php get_template_part( 'template_personnages' ); ?>




            <article id="place">
                <div class="big_cloud_container">
                    <div class="clouds" data-bottom-top="transform:translateX(300px)" data-top-top="transform:translateX(0px)">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/big_cloud.png'; ?> " alt="Nuage du haut" />
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/little_cloud.png'; ?> " alt="Nuage du bas" />
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