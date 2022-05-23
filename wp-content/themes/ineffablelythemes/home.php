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
        ?>
            <div class="slide">
              <div class="thumbnail">
                <img src="<?php the_post_thumbnail_url() ?>" alt="">
              </div>
              <div class="post-details">
                <a href="<?php the_permalink() ?>" class="text-bold"><?php the_title() ?></a>
                <div class="d-flex">
                  <div class="text-small">
                    <?php echo meks_time_ago() ?>
                  </div>
                  <div class="text-small"><?php the_author() ?></div>
                </div>
              </div>
            </div>
        <?php
          endwhile;
        endif; ?>
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
      <div class="d-flex flex-column">
        <?php
        $query2 = new WP_Query(array('offset' => '5'));
        if ($query2->have_posts()) :
          while ($query2->have_posts()) : $query2->the_post();
            get_template_part('template-parts/post-card-long');
          endwhile;
        endif;
        ?>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
