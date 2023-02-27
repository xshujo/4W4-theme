<?php
    /**
     * Modèle par défaut
     */
?>
<?php get_header(); ?>
<main class="site__main">
    <!-- <h3>search.php</h3> -->
    <h3>Résultats de la recherche</h3>
    <?php
        // ":" + "endif" remplacent "{}"
        if (have_posts()):
            while (have_posts()) : the_post();
            the_title('<h4>', '</h4>');
    ?>
    <p><?= wp_trim_words(get_the_excerpt(), 50, " [...]"); ?></p>
            <?php
            endwhile;
        endif;
    ?>
</main>
<?php get_footer(); ?>