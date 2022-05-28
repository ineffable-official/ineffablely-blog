<?php
get_header();

?>

<div class="main-area">
    <div class="container">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
                get_template_part('template-parts/post');
            endwhile;

        else : ?>
            <p><?php esc_html_e('Maaf post tidak ditemukan'); ?></p>
        <?php
        endif;
        ?>

    </div>
</div>

<?php

get_footer();
