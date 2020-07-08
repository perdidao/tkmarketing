<?php
  // Default page
  get_header();

  if(get_posts()):
    while(have_posts()):
      the_post();
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header__title post__title">
      <?php the_title(); ?>
    </h1>
    <div class="page-header__image" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>)"></div>
  </div>
</section>

<figure class="post__image">
  <img src="<?php the_post_thumbnail_url('full') ?>" alt="<?php the_title(); ?>">
</figure>

<main class="post__container container">
  <?php the_content(); ?>
</main>
<?php
    endwhile;
  endif;
  get_footer();
?>
