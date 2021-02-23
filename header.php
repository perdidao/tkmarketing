<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta name="robots" content="index, follow" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php
      $post = get_queried_object();
      $page_title = ' — ' . get_bloginfo('description');
      if ($post->label != '') {
        $page_title = ' — ' . $post->label;
      } else if ($post->post_title) {
        $page_title = ' — ' . $post->post_title;
      }
    ?>
    <title><?php bloginfo('title'); ?><?php echo $page_title; ?></title>
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta name="theme-color" content="#1f72de" />

    <?php wp_head(); ?>
  </head>
  <body style="font-family: 'Avenir', Arial, Helvetica, sans-serif;">

  <header class="header">

    <div class="container header__container">

      <section class="header__block header__block--left">

        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>" class="header__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/static/images/logo.png" alt="<?php bloginfo('title'); ?>">
        </a>

        <ul class="menu">
          <?php

            wp_nav_menu([
              'theme_location' => 'main_nav',
              'container' => false,
              'echo' => true,
              'items_wrap' => '%3$s',
              'depth' => 0,
            ]);

          ?>
        </ul>

      </section>

      <div class="header__block header__block--right">
        <?php if (get_theme_mod('facebook_link')): ?>
        <a href="<?php echo get_theme_mod('facebook_link'); ?>" target="_blank" title="Curta nossa página no Facebook" class="header__link"><i class="fab fa-facebook-square"></i></a>
        <?php
          endif;
          if (get_theme_mod('instagram_link')):
        ?>
        <a href="<?php echo get_theme_mod('instagram_link'); ?>" target="_blank" title="Siga-nos no Instagram" class="header__link"><i class="fab fa-instagram"></i></a>
        <?php
          endif;
        ?>
        <div class="header__spacer"></div>
        <a href="<?php bloginfo('url') ?>/buscar" title="Buscar artigos" class="header__link header__link--lens"><i class="fas fa-search"></i></a>
      </div>

      <a href="javascript:;" title="" class="header__toggle"></a>

    </div>

  </header>
