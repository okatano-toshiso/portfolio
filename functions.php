<?php
if (! isset($content_width)) {
    $content_width = 660;
}

/**
 * Enqueue scripts and styles.
 *
 * @since Twenty Fifteen 1.0
 */
function twentyfifteen_scripts()
{

    // Load our main stylesheet.
    wp_enqueue_style('twentyfifteen-style', get_stylesheet_uri());

    // Load the Internet Explorer specific stylesheet.
    wp_enqueue_style('twentyfifteen-ie', get_template_directory_uri() . '/css/ie.css', array( 'twentyfifteen-style' ), '20141010');
    wp_style_add_data('twentyfifteen-ie', 'conditional', 'lt IE 9');

    // Load the Internet Explorer 7 specific stylesheet.
    wp_enqueue_style('twentyfifteen-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'twentyfifteen-style' ), '20141010');
    wp_style_add_data('twentyfifteen-ie7', 'conditional', 'lt IE 8');

    wp_enqueue_script('twentyfifteen-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20141010', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    if (is_singular() && wp_attachment_is_image()) {
        wp_enqueue_script('twentyfifteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20141010');
    }

    wp_enqueue_script('twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true);
    wp_localize_script('twentyfifteen-script', 'screenReaderText', array(
        'expand'   => '<span class="screen-reader-text">' . __('expand child menu', 'twentyfifteen') . '</span>',
        'collapse' => '<span class="screen-reader-text">' . __('collapse child menu', 'twentyfifteen') . '</span>',
    ));
}
add_action('wp_enqueue_scripts', 'twentyfifteen_scripts');


add_action('init', 'create_post_type');
function create_post_type()
{

    register_post_type(
        'images', // 投稿タイプ名の定義
        array(
            'labels' => array(
            'name' => __('画像'), // フロントで表示する投稿タイプ名
            'singular_name' => __('images')
        ),
        'public' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        )
    );
    flush_rewrite_rules(false);
    register_taxonomy(
        'position', // 分類名
        array('images'),  // 投稿タイプ名
        array(
        'label' => 'type', // フロントで表示する分類名
        'hierarchical' => true,   // 階層構造か否か（trueの場合はカテゴリー、falseの場合はタグ）
        'query_var' => true,
        'show_in_rest' => true,
        'rewrite' => true
    )
    );
}

function add_meta_query_vars($public_query_vars)
{
    $public_query_vars[] = 'meta_key';
    $public_query_vars[] = 'meta_value';
    return $public_query_vars;
}
add_filter('query_vars', 'add_meta_query_vars');

function pagination($pages = '', $range = 1)
{
    $showitems = ($range * 2)+1;
    global $paged;
    if(empty($paged)) {
        $paged = 1;
    }
    if($pages == '') {
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages) {
            $pages = 1;
        }
    }
    if(1 != $pages) {
        if($paged > 2 && $paged > $range+1 && $showitems < $pages) {
            echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
        }
        if($paged > 1 && $showitems < $pages) {
            echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
        }
        for ($i=1; $i <= $pages; $i++) {
            if (1 != $pages &&(!($i >= $paged+$range+1 || $i <= $paged-$range-2) || $pages <= $showitems)) {
                echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
            }
        }
        if ($paged < $pages && $showitems < $pages) {
            echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
        }
        if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) {
            echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
        }
    }
}
