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

      <div class="header__brand">

        <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $image = wp_get_attachment_image_src($custom_logo_id, 'full');
          $source = $image[0];
        ?>

        <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>" class="header__logo">
          <img src="<?php echo $source; ?>" alt="<?php bloginfo('title'); ?>">
        </a>

        <p class="header__description">
          <?php
            $full = explode(' ', get_bloginfo('description'));
            $lastWord = array_pop($full);
            $string = preg_replace('/\W\w+\s*(\W*)$/', '$1', get_bloginfo('description'));

            echo $string . ' <strong class="header__highlight">' . $lastWord . '</strong>';
          ?>
        </p>

      </div>

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

      <a href="javascript:;" title="" class="header__toggle"></a>

    </div>

  </header>
