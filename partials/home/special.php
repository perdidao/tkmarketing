<section class="special">

  <div class="container special-container">

    <?php
      $special = get_field('special-category');
    ?>

    <h2 class="special__title">
      <span class="special__title--small">
        Especial
      </span>
      <?php echo $special->name; ?>
    </h2>

    <ul class="special__posts">

      <?php
        query_posts([
          'post_type' => 'post',
          'posts_per_page' => get_field('special-quantity'),
          'cat' => $special->term_id,
        ]);

        if (have_posts()) :
          while (have_posts()) :
            the_post();
      ?>
      <li class="special-post">
        <figure class="special-post__image">
          <a href="<?php the_permalink() ?>" title="Continuar lendo sobre <?php the_title(); ?>">
            <img src="<?php the_post_thumbnail_url('small_thumb'); ?>" alt="">
          </a>
        </figure>
        <div class="special-post__info">
          <h3 class="special-post__title">
            <a href="<?php the_permalink() ?>" title="Continuar lendo sobre <?php the_title(); ?>">
              <?php the_title(); ?>
            </a>
          </h3>
          <div class="special-post__excerpt">
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

</section>
