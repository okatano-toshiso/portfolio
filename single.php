<?php get_header(); ?>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php endwhile; ?>
            <?php else: ?>
                <p>記事がありません</>
            <?php endif; ?>

            <?php
                $post = $wp_query->post;
                if ( in_category('work') ) {
                    include(TEMPLATEPATH.'/detail.php');
                } elseif ( in_category('information') ) {
                    include(TEMPLATEPATH.'/information.php');
                } else {
                    /* カテゴリスラッグ「news, blog, info-arrival」以外の場合はsingle.phpで完結 */
                };
            ?>
        <!-- / .main --></div>

    <!-- / .contents --></div>

<?php get_footer(); ?>