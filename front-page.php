<?php

/**
 * Modèle par défaut
 */
?>
<?php get_header(); ?>
<main class="site__main">
    <!-- <h3>front-page.php</h3> -->
    <section class="blocflex">
        <?php
        // ":" + "endif" remplacent "{}"
        if (have_posts()) :
            while (have_posts()) : the_post();
                $ma_categorie = '4w4';
                if (in_category('galerie')) {
                    $ma_categorie = 'galerie';
                }
                get_template_part('template-parts/categorie', $ma_categorie);
        ?>
        <?php
            endwhile;
        endif;
        ?>
    </section>

</main>
<?php get_footer(); ?>