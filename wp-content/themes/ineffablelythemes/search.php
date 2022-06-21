<?php get_header() ?>

<div class="main-area">
    <div class="container">
        <div class="content-area mt-2">
            <div class="header-content">Search result</div>
            <div class="d-flex flex-column">
                <?php
                wp_parse_str($query_string, $search_query);
                $search = new WP_Query($search_query);

                if ($search->have_posts()) :
                    while ($search->have_posts()) : $search->the_post();
                        get_template_part('template-parts/post-card-long');

                    endwhile;
                    the_posts_pagination();
                    wp_reset_query();
                else : ?>
                    <p><?php esc_html_e('Maaf hasil tidak ditemukan'); ?></p>
                <?php
                endif;
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>