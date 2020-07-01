<?php
  // Default page
  get_header();

  if(get_posts()):
    while(have_posts()):
      the_post();
?>

<section class="page-header">
  <div class="container">
    <h1 class="page-header__title">
      <?php the_title(); ?>
    </h1>
  </div>
</section>

<main class="page__container container">
  <?php the_content(); ?>
</main>
<?php
    endwhile;
  endif;
  get_footer();
?>
