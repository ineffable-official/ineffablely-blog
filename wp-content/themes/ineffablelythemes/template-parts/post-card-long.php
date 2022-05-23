<div class="post-card-long d-flex">
    <div class="thumbnail">
        <img src="<?php the_post_thumbnail_url() ?>" alt="">
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