<?php
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
});
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('toulin-fonts', 'https://fonts.googleapis.com/css2?family=Bodoni+Moda:wght@400;500&family=DM+Sans:wght@400;500;700&display=swap', [], null);
    wp_enqueue_style('toulin', get_stylesheet_uri(), [], wp_get_theme()->get('Version') . '.' . filemtime(get_stylesheet_directory() . '/style.css'));
});
add_filter('loop_shop_columns', function () { return 4; });
add_filter('woocommerce_enqueue_styles', function ($s) { unset($s['woocommerce-layout']); return $s; });

/** Image URL of a product (by slug), or '' */
function toulin_product_img($slug, $size = 'large') {
    $p = get_posts(['name' => $slug, 'post_type' => 'product', 'post_status' => 'publish', 'numberposts' => 1]);
    if (!$p) return '';
    $u = get_the_post_thumbnail_url($p[0]->ID, $size);
    return $u ? $u : '';
}
function toulin_cat_url($slug) {
    $l = get_term_link($slug, 'product_cat');
    return is_wp_error($l) ? home_url('/') : $l;
}
