<?php

get_header();
?>

<div class="main-area mt-2">
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
                <div class="text-bold"><?php the_title() ?></div>
                <div class="d-flex">
                  <div class="text-small">
                    <?php the_date() ?>
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
          <i class="fa-regular fa-chevron-left"></i>
        </button>
        <button id="next-btn">
          <i class="fa-regular fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
</div>

<?php
get_footer();
