<div class="content-post mt-2 mb-2 ms-auto me-auto">
    <div class="header-post">
        <div class="title-post"><?php echo the_title(); ?></div>
        <div class="d-flex">
            <div class="text-normal ms-auto me-2 d-flex"><?php the_date() ?></div>
            <div class="text-normal me-2 d-flex"><?php the_author() ?></div>
            <div class="text-normal me-2 d-flex"><?php the_category("<div class='ms-1 me-1'>-</div>") ?></div>
            <div class="text-normal me-auto d-flex"><?php ?></div>
        </div>
        <div class="thumbnail mt-2 mb-2 ms-auto me-auto">
            <?php if (has_post_thumbnail()) : ?>
                <img src="<?php the_post_thumbnail_url() ?>" alt="">
            <?php else : ?>
                <img src="<?php echo get_template_directory_uri() . '/assets/img/nothumb.png' ?>" alt="">
            <?php endif ?>
        </div>
    </div>
    <div class="content-area">
        <?php the_content() ?>
    </div>

    <div class="comment-area">
        <h4>Comments</h4>
        <div class="comment-container">

            <?php
            $args = array(
                'post_id' => get_the_ID(),
                'number' => 10,
                'order'       => 'DESC',
                'status'      => 'approve',
                'parent'      => 0
            );
            foreach (get_comments($args) as $comment) :
                get_template_part('template-parts/comments');
                
            endforeach;
            ?>
            <?php if (comments_open() || pings_open()) {
                comment_form(
                    array(
                        'must_log_in' => 'You need to login to submit a comment',
                        'label_submit' => 'Submit',
                        'comment_notes_before' => 'Comment here to connect with others'
                    )
                );
            } elseif (is_single()) {
            ?>

                <div class="comment-respond" id="respond">

                    <p class="comments-closed"><?php _e('Comments are closed.'); ?></p>

                </div>

            <?php
            }
            ?>
        </div>
    </div>

</div>