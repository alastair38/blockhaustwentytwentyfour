<?php
/**
 * Title: Resource layout
 * Slug: blockhaus/resource-layout
 */
?>
<!-- wp:group {"tagName":"main","align":"full"} -->
<main class="wp-block-group alignfull"><!-- wp:group {"tagName":"article","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"},"metadata":{"name":"Article"}} -->
<article class="wp-block-group alignwide"><!-- wp:group {"tagName":"header","align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":"Article Header"}} -->
<header class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:blockhaus/type {"name":"blockhaus/type","mode":"preview"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"x-large"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
<div class="wp-block-group"><!-- wp:blockhaus/date {"name":"blockhaus/date","mode":"preview"} /-->

<!-- wp:blockhaus/places {"name":"blockhaus/places","mode":"preview"} /--></div>
<!-- /wp:group -->

<!-- wp:blockhaus/files {"name":"blockhaus/files","mode":"preview"} /-->

<!-- wp:block {"ref":100} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"50%"},"color":{"background":"#5c2051"}},"className":"is-style-shadow-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadow-group has-background" style="background-color:#5c2051"><!-- wp:image {"align":"center","id":2007,"width":"370px","height":"auto","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Isometric-Stickers-Brainstorming.png" alt="" class="wp-image-2007" style="aspect-ratio:1;object-fit:contain;width:370px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></header>
<!-- /wp:group -->

<!-- wp:separator {"className":"is-style-default"} -->
<hr class="wp-block-separator has-alpha-channel-opacity is-style-default"/>
<!-- /wp:separator -->

<!-- wp:post-content {"lock":{"move":false,"remove":false},"align":"full","layout":{"type":"constrained"}} /-->



<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:group {"tagName":"nav","align":"wide","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40","top":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<nav class="wp-block-group alignwide" aria-label="Posts" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:post-navigation-link {"type":"previous","label":"Previous: ","showTitle":true,"linkLabel":true,"arrow":"arrow"} /-->

<!-- wp:post-navigation-link {"label":"Next: ","showTitle":true,"linkLabel":true,"arrow":"arrow"} /--></nav>
<!-- /wp:group --></div>
<!-- /wp:group --></article>
<!-- /wp:group --></main>
<!-- /wp:group -->