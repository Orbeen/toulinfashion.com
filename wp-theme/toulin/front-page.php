<?php get_header();
$girls = toulin_cat_url('girls'); $boys = toulin_cat_url('boys');
$new = function_exists('wc_get_products') ? wc_get_products(['status' => 'publish', 'limit' => 8, 'orderby' => 'date', 'order' => 'DESC']) : [];
?>
<main>
<section class="wrap hero" aria-label="Featured">
<a href="<?php echo esc_url($girls); ?>" class="panel p-main" style="background-image:url(<?php echo esc_url(toulin_product_img('burgundy-party-dress')); ?>)">
<span class="eyebrow">New season</span>
<h1 class="serif">The Autumn Edit</h1>
<span class="btn btn-dark" style="align-self:flex-start">Shop girls</span>
</a>
<div class="stack">
<a href="<?php echo esc_url($boys); ?>" class="panel p-side" style="background-image:url(<?php echo esc_url(toulin_product_img('dino-t-shirt-and-shorts-set')); ?>)"><h2 class="serif">Boys' Essentials</h2><span class="link">Shop boys</span></a>
</div>
</section>

<section class="wrap s" id="categories">
<div class="head"><h2 class="serif">Shop by category</h2></div>
<div class="grid4">
<?php foreach ([['burgundy-tulle-dress', "Girls' dresses", $girls], ['side-stripe-wide-leg-trousers', "Girls' trousers", $girls], ['cream-cable-knit-polo', "Boys' knits & polos", $boys], ['blue-zip-polo-and-shorts-set', "Boys' sets", $boys]] as $t) : ?>
<a class="tile" href="<?php echo esc_url($t[2]); ?>"><div class="img"><img src="<?php echo esc_url(toulin_product_img($t[0], 'large')); ?>" alt="<?php echo esc_attr($t[1]); ?>" loading="lazy"></div><span class="label"><?php echo esc_html($t[1]); ?></span></a>
<?php endforeach; ?>
</div>
</section>

<section class="wrap s" id="new">
<div class="head"><h2 class="serif">New arrivals</h2></div>
<div class="grid4">
<?php foreach ($new as $p) : ?>
<a class="prod" href="<?php echo esc_url($p->get_permalink()); ?>"><div class="img"><?php echo $p->get_image('large', ['loading' => 'lazy']); ?></div><span class="name"><?php echo esc_html($p->get_name()); ?></span><span class="pr"><?php echo wp_kses_post($p->get_price_html()); ?></span></a>
<?php endforeach; ?>
</div>
</section>

<section class="wrap s" id="lookbook">
<div class="edit">
<div class="txt"><span class="eyebrow">The lookbook</span><h2 class="serif">Dressed for every occasion</h2><a class="btn btn-line" href="<?php echo esc_url($girls); ?>">Shop the edit</a></div>
<div class="pic"><img src="<?php echo esc_url(toulin_product_img('mustard-corduroy-dress')); ?>" alt="Mustard corduroy dress"><img src="<?php echo esc_url(toulin_product_img('textured-polo-and-shorts-set')); ?>" alt="Textured polo and shorts set"></div>
</div>
</section>
</main>
<?php get_footer(); ?>
