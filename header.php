<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <?php wp_head(); ?>
</head>
<?php
    $nouvelle_classe = "";
    if (is_front_page()) {
        $nouvelle_classe = 'no-aside';
    }
?>

<body class="site <?= $nouvelle_classe ?>">
    <header class="site__header">
        <section class="site__header__logo">
            <!-- <div class="logomenu"> -->
            <?php the_custom_logo() ?>

            <input type="checkbox" id="checkMenu">
            <?php wp_nav_menu(array(
                "menu" => "entete",
                "container" => "nav"
            )) ?>
            <!-- </div> -->

            <?php get_search_form(); ?>
            <label class="burger" for="checkMenu">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000" width="32" height="32">
            </label>
        </section>
        <h1><a href="<?= bloginfo('url') ?>"><?= bloginfo('name') ?></a></h1>
        <h2><?= bloginfo('description') ?></h2>
    </header>
    <?php if (!is_front_page()) get_template_part("template-parts/aside"); ?>