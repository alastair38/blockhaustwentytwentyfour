<?php
/**
 * Title: Comments
 * Slug: blockhaus/hidden-comments
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40)"><!-- wp:comments -->
<div class="wp-block-comments"><!-- wp:comments-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} /-->

<!-- wp:comment-template {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"color":{"background":"#eeecec"}},"className":"is-style-shadow-group","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-shadow-group has-background" style="background-color:#eeecec;margin-top:var(--wp--preset--spacing--20);margin-bottom:var(--wp--preset--spacing--20);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"bottom":{"color":"#d6d2d2","width":"1px"},"top":{},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"},"color":{}}} /-->

<!-- wp:comment-author-name {"isLink":false,"fontSize":"small"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"type":"flex"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:comment-date {"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->

<!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"right":"var:preset|spacing|5","left":"var:preset|spacing|5"}}},"backgroundColor":"contrast","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:comment-content {"style":{"spacing":{"padding":{"left":"var:preset|spacing|20","right":"var:preset|spacing|20","top":"0","bottom":"0"}}}} /-->

<!-- wp:group {"style":{"border":{"top":{"color":"#d6d2d2","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="border-top-color:#d6d2d2;border-top-width:1px"><!-- wp:comment-reply-link {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:comment-template -->

<!-- wp:comments-pagination -->
<!-- wp:comments-pagination-previous /-->

<!-- wp:comments-pagination-numbers /-->

<!-- wp:comments-pagination-next /-->
<!-- /wp:comments-pagination -->

<!-- wp:post-comments-form {"fontSize":"medium"} /--></div>
<!-- /wp:comments --></div>
<!-- /wp:group -->
