<div class="comment-container">
    <div class="comment">
        <div class="comment-content">
            <div class="text-normal"><?php echo $comment->comment_content ?></div>

        </div>
        <div class="d-flex comment-detail">
            <div class="text-small my-auto me-2"><?php $date = date_create($comment->comment_date);
                                                    echo date_format($date, "d M Y H:i"); ?></div>
            <div class="text-small my-auto"><?php echo $comment->comment_author ?></div>
            <div class="avatar ms-2">
                <?php echo get_avatar($comment->comment_author_email) ?>
            </div>
            <div class="button ms-auto">
                <?php $post_id = get_the_ID();
                $comment_id = get_comment_ID();

                //get the setting configured in the admin panel under settings discussions "Enable threaded (nested) comments  levels deep"  
                $max_depth = get_option('thread_comments_depth');
                //add max_depth to the array and give it the value from above and set the depth to 1
                $default = array(
                    'add_below'  => 'comment',
                    'respond_id' => 'respond',
                    'reply_text' => __("<i class='fa-solid fa-reply'></i>"),
                    'login_text' => __('Log in to Reply'),
                    'depth'      => 1,
                    'before'     => '',
                    'after'      => '',
                    'max_depth'  => $max_depth
                );

                comment_reply_link($default, $comment_id, $post_id);  ?>
            </div>
        </div>
    </div>
    <?php
    $args = array(
        'post_id' => get_the_ID(),
        'number'      => 10,
        'order'       => 'DESC',
        'status'      => 'approve',
        'parent'      => 0
    );
    foreach ($comment->get_children($args) as $comment_children) : ?>
        <div class="comment" style="margin-left: 32px;">
            <div class="comment-content">
                <div class="text-normal"><a class="me-2" href="mailto:<?php echo comment_author_email($comment_children->comment_ID); ?>"><?php echo comment_author_email($comment_children->comment_ID); ?></a><?php echo $comment_children->comment_content ?></div>
            </div>
            <div class="d-flex comment-detail">
                <div class="text-small my-auto"><?php echo $comment_children->comment_author ?></div>
                <div class="avatar ms-2">
                    <?php echo get_avatar($comment_children->comment_author_email) ?>
                </div>
                <div class="button ms-auto">
                    <?php $post_id = get_the_ID();
                    $comment_id = $comment_children->comment_ID;

                    //get the setting configured in the admin panel under settings discussions "Enable threaded (nested) comments  levels deep"  
                    $max_depth = get_option('thread_comments_depth');
                    //add max_depth to the array and give it the value from above and set the depth to 1
                    $default = array(
                        'add_below'  => 'comment',
                        'respond_id' => 'respond',
                        'reply_text' => __("<i class='fa-solid fa-reply'></i>"),
                        'login_text' => __('Log in to Reply'),
                        'depth'      => 1,
                        'before'     => '',
                        'after'      => '',
                        'max_depth'  => $max_depth
                    );

                    comment_reply_link($default, $comment_id, $post_id);  ?>
                </div>
            </div>
        </div>
        <?php
        $args = array(
            'post_id' => get_the_ID(),
            'number'      => 10,
            'order'       => 'DESC',
            'status'      => 'approve',
            'parent'      => 0
        );
        foreach ($comment_children->get_children($args) as $children) : ?>
            <div class="comment-container">
                <div class="comment" style="margin-left: 64px;">
                    <div class="comment-content">
                        <div class="text-normal"><a class="me-2" href="mailto:<?php echo comment_author_email($comment_children->comment_ID); ?>"><?php echo comment_author_email($comment_children->comment_ID); ?></a><?php echo $children->comment_content ?></div>
                    </div>
                    <div class="d-flex comment-detail">
                        <div class="text-small my-auto"><?php echo $children->comment_author ?></div>
                        <div class="avatar ms-2">
                            <?php echo get_avatar($children->comment_author_email) ?>
                        </div>
                        <div class="button ms-auto">
                            <?php $post_id = get_the_ID();
                            $comment_id = $children->comment_ID;

                            //get the setting configured in the admin panel under settings discussions "Enable threaded (nested) comments  levels deep"  
                            $max_depth = get_option('thread_comments_depth');
                            //add max_depth to the array and give it the value from above and set the depth to 1
                            $default = array(
                                'add_below'  => 'comment',
                                'respond_id' => 'respond',
                                'reply_text' => __("<i class='fa-solid fa-reply'></i>"),
                                'login_text' => __('Log in to Reply'),
                                'depth'      => 1,
                                'before'     => '',
                                'after'      => '',
                                'max_depth'  => $max_depth
                            );

                            comment_reply_link($default, $comment_id, $post_id);  ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        endforeach ?>
    <?php
    endforeach ?>
</div>