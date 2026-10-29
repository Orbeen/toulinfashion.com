<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="bar">Cash on delivery available</div>
<header class="site-head wrap">
<div class="top">
<a href="<?php echo esc_url(home_url('/')); ?>" class="logo">TOULIN</a>
<?php if (function_exists('WC')) : ?><a class="cartlink" href="<?php echo esc_url(wc_get_cart_url()); ?>">Cart (<?php echo (int) WC()->cart->get_cart_contents_count(); ?>)</a><?php endif; ?>
</div>
<nav aria-label="Main">
<a href="<?php echo esc_url(home_url('/#new')); ?>">New in</a>
<a href="<?php echo esc_url(toulin_cat_url('girls')); ?>">Girls</a>
<a href="<?php echo esc_url(toulin_cat_url('boys')); ?>">Boys</a>
<a href="<?php echo esc_url(home_url('/#lookbook')); ?>">Lookbook</a>
</nav>
</header>
