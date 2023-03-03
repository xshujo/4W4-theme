<?php
    /**
     * Template part pour afficher un blocflex Cours
     */

    $titre = get_the_title();
    $sigle = substr($titre, 0, 7);
    $titre_long = substr($titre, 7, -5);
    $duree = substr($titre, strpos($titre, '('));
?>
<article class="blocflex__article">
    <h4><a href="<?php the_permalink(); ?>"> <?= $sigle ?></a></h4>
    <h5><?= $titre_long ?></h5>
    <p><?= wp_trim_words(get_the_excerpt(), 15, "... <span>&#10148;</span>") ?></p>
    <h5><?= $duree ?></h5>
</article>