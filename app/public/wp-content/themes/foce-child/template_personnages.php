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