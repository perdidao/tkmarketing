<?php

  get_header();

  if(get_posts()):

    while(have_posts()):

      the_post();

      the_post_thumbnail('large_thumb');

      the_title();

      the_excerpt();

      the_permalink();

      echo '<br />';

    endwhile;

  endif;

  get_footer();

?>
