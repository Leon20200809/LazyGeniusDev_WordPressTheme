<?php
// テーマサポート
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function my_theme_setup(){
    // メニュー機能の有効化
    add_theme_support('menus');

    // メニューの登録（任意の場所にメニューを複数登録できる）
    register_nav_menus([
        'header-menu' => 'ヘッダーメニュー',
        'footer-menu' => 'フッターメニュー'
    ]);
}
add_action('after_setup_theme', 'my_theme_setup');

// メイン用CSS・JS読み込み
function custom_theme_enqueue_scripts()
{
    // <!-- AOS用のCSS -->
    wp_enqueue_style('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css');
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css', array('aos'));

    // <!-- AOS.js（Animate On Scroll） は、まさに**“動き出すHTML”を超簡単に実現する魔法のライブラリ -->
    wp_enqueue_script('jquery');
    wp_enqueue_script('aos', 'https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js', array('jquery'));
    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js', array('jquery', 'aos'), '1.0.0', true);
    wp_enqueue_script('estimate', get_template_directory_uri() . '/js/estimate.js', array('jquery', 'aos'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_scripts');

// ブログ一覧ページ用CSS読み込み
function my_blog_styles() {
    if (is_singular('post') || is_archive() || is_home() || is_search()){
        wp_enqueue_style('blog-css', get_template_directory_uri() . '/css/blog.css', array(), false);
    }
}
add_action('wp_enqueue_scripts', 'my_blog_styles');

// ブログ個別ページCSS読み込み
function my_single_styles() {
    if (is_single()) {
        wp_enqueue_style('single-css', get_template_directory_uri() . '/css/single.css');
    }
}
add_action('wp_enqueue_scripts', 'my_single_styles');

    // サーチフォームで記事だけ検索対象にする。（固定ページは除外）
    function restrict_search_to_posts($query){
        if ($query->is_main_query() && $query->is_search() && !is_admin()) {
            $s = $query->get('s');
            if ($s === '') {
                // 空検索時は結果ゼロにする
                $query->set('post__in', [0]); // 存在しない投稿IDを指定
            } else {
                $query->set('post_type', 'post'); // 投稿だけ検索対象に
            }
        }
    }
    // 'pre_get_post' クエリの条件を変更するために使用
    add_action('pre_get_posts', 'restrict_search_to_posts');
