<section class="container recent-wrapper">

  <div class="recent-posts">

    <h2 class="recent-posts__title">
      Artigos recentes
    </h2>

    <ul class="recent-posts__items">

      <?php
        query_posts([
          'post_type' => 'post',
          'posts_per_page' => '4',
          'offset' => 1
        ]);

        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>

      <li class="recent-post">

        <figure class="recent-post__image">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <img src="<?php the_post_thumbnail_url('large_thumb') ?>" alt="<?php the_title(); ?>">
          </a>
        </figure>

        <div class="recent-post__info">
          <h2 class="recent-post__title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h2>
          <div class="recent-post__excerpt">
            <?php the_excerpt(); ?>
          </div>
        </div>

      </li>

      <?php
          endwhile;
        endif;
      ?>

    </ul>

  </div>

  <div class="recent-aside">

    <?php
      get_template_part('partials/newsletter');
      get_template_part('partials/latest-ebook');
    ?>

  </div>

</section>
