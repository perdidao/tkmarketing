<?php
  /**
   * Template name: Páginas Especiais
   * @package tkmarketing
   */

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

  <main class="custom">

    <?php
      if (have_rows('section1')) :
        while(have_rows('section1')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--flex">
        <figure class="custom-section__image">
          <?php $image = get_sub_field('section1-image'); ?>
          <img src="<?php echo $image['sizes']['medium_large'] ?>" alt="">
        </figure>
        <section class="custom-section__info">
          <h2 class="custom-section__title"><?php the_sub_field('section1-title') ?></h2>
          <p class="custom-section__subtitle"><strong><?php the_sub_field('section1-subtitle') ?></strong></p>
          <div class="custom-section__text"><?php the_sub_field('section1-text') ?></div>
        </section>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php
      if (have_rows('section2')) :
        while(have_rows('section2')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--medium custom-section__container--textonly">
        <h2 class="custom-section__title"><?php the_sub_field('section2-title') ?></h2>
        <div class="custom-section__text"><?php the_sub_field('section2-text') ?></div>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php
      $items = get_field('section3');
      if (!empty($items)) :
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--flex">
      <?php
        if (have_rows('section3')) :
          while(have_rows('section3')) :
            the_row();
      ?>
        <div class="custom-section__column">
          <?php the_sub_field('section3-textblock') ?>
        </div>
      <?php
        endwhile;
      endif;
      ?>
      </div>
    </section>
    <?php endif; ?>

    <?php if (get_field('section4')) : ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--small custom-section__container--form">
        <?php the_field('section4') ?>
      </div>
    </section>
    <?php endif; ?>

    <?php
      if (have_rows('section5')) :
        while(have_rows('section5')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--medium custom-section__container--textonly">
        <h2 class="custom-section__title"><?php the_sub_field('section5-title') ?></h2>
        <div class="custom-section__text"><?php the_sub_field('section5-text') ?></div>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php
      if (have_rows('section6')) :
        while(have_rows('section6')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--medium custom-section__container--textonly">
        <h2 class="custom-section__title"><?php the_sub_field('section6-title') ?></h2>
        <div class="custom-section__text"><?php the_sub_field('section6-text') ?></div>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php
      if (have_rows('section7')) :
        while(have_rows('section7')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--flex">
        <figure class="custom-section__image">
          <?php $image = get_sub_field('section7-image'); ?>
          <img src="<?php echo $image['sizes']['medium_large'] ?>" alt="">
        </figure>
        <section class="custom-section__info">
          <h2 class="custom-section__title"><?php the_sub_field('section7-title') ?></h2>
          <p class="custom-section__subtitle"><strong><?php the_sub_field('section7-subtitle') ?></strong></p>
          <div class="custom-section__text"><?php the_sub_field('section7-text') ?></div>

          <?php
            $links = get_field('section7-links');
            if (!empty($links)) :
          ?>
          <nav class="custom-section-links">
          <?php
            if (have_rows('section7-links')) :
              while(have_rows('section7-links')) :
                the_row();
          ?>
            <a href="<?php the_sub_field('section7-link-url') ?>" class="custom-section__link" title="Navegue para <?php the_sub_field('section7-link-text') ?>"><?php the_sub_field('section7-link-text') ?></a>
          <?php
              endwhile;
            endif;
          ?>
          </nav>
          <?php endif; ?>
        </section>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php if (get_field('section8')) : ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--small custom-section__container--form">
        <?php the_field('section8') ?>
      </div>
    </section>
    <?php endif; ?>

    <?php
      if (have_rows('section9')) :
        while(have_rows('section9')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--medium custom-section__container--textonly">
        <h2 class="custom-section__title"><?php the_sub_field('section9-title') ?></h2>
        <div class="custom-section__text"><?php the_sub_field('section9-text') ?></div>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php
      if (have_rows('section10')) :
        while(have_rows('section10')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--small custom-section__container--textonly">
        <h2 class="custom-section__title"><?php the_sub_field('section10-title') ?></h2>
        <p class="custom-section__subtitle"><?php the_sub_field('section10-subtitle') ?></p>
        <div class="custom-section__text"><?php the_sub_field('section10-text') ?></div>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

    <?php
      if (have_rows('section11')) :
        while(have_rows('section11')) :
          the_row();
    ?>
    <section class="custom-section">
      <div class="custom-section__container custom-section__container--small custom-section__container--form">
        <h2 class="custom-section__title"><?php the_sub_field('section11-title') ?></h2>
        <p class="custom-section__subtitle"><?php the_sub_field('section11-subtitle') ?></p>
        <?php the_sub_field('section11-form') ?>
      </div>
    </section>
    <?php
        endwhile;
      endif;
    ?>

  </main>

<?php
    endwhile;
  endif;

  get_footer();
?>
