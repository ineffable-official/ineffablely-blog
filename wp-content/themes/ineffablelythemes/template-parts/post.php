<div class="header-post">
    <div class="title-post"><?php echo the_title(); ?></div>
    <div class="d-flex">
        <div class="text-normal me-2 d-flex"><?php the_date() ?></div>
        <div class="text-normal me-2 d-flex"><?php the_author() ?></div>
        <div class="text-normal me-2 d-flex"><?php the_category("<div class='ms-1 me-1'>-</div>") ?></div>
        <div class="text-normal me-2 d-flex"><?php ?></div>
    </div>
</div>