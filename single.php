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
        };
    ?>
<?php get_footer(); ?>