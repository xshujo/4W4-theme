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
            if (have_posts()):
                while (have_posts()) : the_post();?>
                <article>
                    <h1>
                        <a href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                    </h1>
                    <?php // the_content(); // Affiche le contenu de l'article au comlet ?>
                    <?php // the_excerpt() // Affiche un résumé de l'article ?>
                    <p><?php if (is_category('cours')) {echo "cours";} ?></p>
                    <p><?= wp_trim_words(get_the_excerpt(), 10, "... <span>&#10148;</span>") ?></p>
                    <!-- <hr> -->
                </article>
                <?php
                endwhile;
            endif;
        ?>
    </section>
    
</main>
<?php get_footer(); ?>