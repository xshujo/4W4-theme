<?php
    /**
     * Template part pour afficher un blocflex Note de cours 4W4
     */

    $titre = get_the_title(); 
    if (substr($titre, 0, 1) == "0") {
        $titre = substr($titre, 1);
    }
?>
<article class="blocflex__article">
    <h4><a href="<?php the_permalink(); ?>"> <?= $titre ?></a></h4>
    <p><?= wp_trim_words(get_the_excerpt(), 15, "... <span>&#10148;</span>") ?></p>
</article>