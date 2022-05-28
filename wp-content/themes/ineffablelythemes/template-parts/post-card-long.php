<div class="post-card-long d-flex">
    <div class="thumbnail">
        <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url() ?>" alt="">
        <?php else : ?>
            <img src="<?php echo get_template_directory_uri() . '/assets/img/nothumb.png' ?>" alt="">
        <?php endif ?>  
    </div>
    <div class="details">
        <a href="<?php the_permalink() ?>" class="text-bold"><?php the_title() ?></a>
        <div class="text-normal"><?php the_excerpt() ?></div>
        <div class="d-flex">
            <div class="text-small me-1"><?php echo meks_time_ago() ?></div>
            <div class="text-small"><?php the_author() ?></div>
        </div>
    </div>
</div>