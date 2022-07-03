<?php get_header(); ?>

<div class="main container">
  <h1 class="main__heading">Промокоды и купоны Алиэкспресс</h1>
  <p class="main__subheading">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eaque qui sit, tempore corrupti impedit accusantium optio deserunt quia tenetur.</p>
  <section class="offers">

    <?php
    $homepageFeaturedOffers = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'deal',
      'order' => 'ASC',
      'meta_query' => array(
        'featured' => array(
          'key' => 'featured',
          'compare' => '==',
          'value' => true
        )
      )
    ));

    $homepageOffers = new WP_Query(array(
      'posts_per_page' => -1,
      'post_type' => 'deal',
      'order' => 'DESC',
      'meta_query' => array(
        array(
          'key' => 'featured',
          'compare' => '!=',
          'value' => true
        )
      )
    ));

    while ($homepageFeaturedOffers->have_posts()) {
      $homepageFeaturedOffers->the_post(); ?>
      <article class="offers__item offer">
        <?php the_field('featured'); ?>
        <h4 class="offer__heading"><?php the_title(); ?></h4>
        <?php the_content(); ?>
      </article>

    <?php }

    while ($homepageOffers->have_posts()) {
      $homepageOffers->the_post(); ?>
      <article class="offers__item offer">
        <?php the_field('featured'); ?>
        <h4 class="offer__heading"><?php the_title(); ?></h4>
        <?php the_content(); ?>
      </article>
    <?php }

    ?>

    <!-- <article class="offers__item offer">
      <h4 class="offer__heading">Промокоды от топ продавцов</h4>
      <p class="offer__description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet error a in officiis, consequatur nemo illum quidem sint! Eos, dolores.</p>
      <ul class="offer__list">
        <li class="offer__item">
          <p class="offer__item-text">Купоны продавцов</p>
          <a href="#" class="offer__item-link">Показать!</a>
        </li>
      </ul>
    </article> -->
  </section>
  </main>

  <?php get_footer();

  ?>