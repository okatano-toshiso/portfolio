<?php
include_once('functions-include/acf.php');

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
    wp_enqueue_style('twentyfifteen-style', get_stylesheet_uri());

    wp_enqueue_script('twentyfifteen-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), '20150330', true);
    wp_localize_script('twentyfifteen-script', 'screenReaderText', array(
        'expand'   => '<span class="screen-reader-text">' . __('expand child menu', 'twentyfifteen') . '</span>',
        'collapse' => '<span class="screen-reader-text">' . __('collapse child menu', 'twentyfifteen') . '</span>',
    ));
}
add_action('wp_enqueue_scripts', 'twentyfifteen_scripts');


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
add_action('init', 'create_post_type');

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

add_action( 'init' , 'my_remove_post_editor_support' );
function my_remove_post_editor_support() {
    remove_post_type_support( 'page', 'editor' );//本文
}