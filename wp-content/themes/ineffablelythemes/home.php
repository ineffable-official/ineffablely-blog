<?php

get_header();
?>

<div class="main-area mt-4">
  <div class="container">
    <div class="slider-container">
      <div class="slides">
        <?php
        $query = new WP_Query(array('posts_per_page' => 5));
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/post-slide');
          endwhile;
          wp_reset_query();
        else : ?>
          <p><?php esc_html_e('Maaf post tidak ditemukan'); ?></p>
        <?php
        endif;
        ?>
      </div>
      <div class="slide-controls">
        <button id="prev-btn">
          <i class="fa-solid fa-chevron-left"></i>
        </button>
        <button id="next-btn">
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </div>
    <div class="content-area mt-2">
      <div class="header-content">Latest</div>
      <div class="d-flex flex-column">
        <?php
        $query = new WP_Query(array('offset' => '5', 'posts_per_page' => 3));
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/post-card-long');

          endwhile;
          the_posts_pagination();
          wp_reset_query();
        else : ?>
          <p><?php esc_html_e('Maaf post tidak ditemukan'); ?></p>
        <?php
        endif;

        ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
