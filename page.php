<?php
  // Default page
  get_header();

  if(get_posts()):
    while(have_posts()):
      the_post();
?>

<main class="page">

  <section class="page-header">
    <div class="container">
      <h1 class="page-header__title">
        <?php the_title(); ?>
      </h1>
    </div>
  </section>

  <section class="page__content">
    <?php the_content(); ?>
  </section>

</main>
<?php
    endwhile;
  endif;
  get_footer();
?>
