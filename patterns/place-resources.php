<?php
/**
 * Title: Place Resources
 * Slug: blockhaus/place-resources
 * Categories: featured
 */
?>

<!-- wp:group {"align":"wide","className":"is-style-default","layout":{"type":"default"},"metadata":{"name":"Place Resources"}} -->
<div class="wp-block-group alignwide is-style-default"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:900"><?php echo esc_html_x( 'Resources', 'blockhaus' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"1em"} -->
<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":2,"offset":0,"postType":"resources","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"place-taxonomy":[15]},"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-grid-template","layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background"><!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /-->

<!-- wp:blockhaus/date {"name":"blockhaus/date","mode":"preview"} /-->

<!-- wp:separator {"style":{"color":{"background":"#d5d5d5"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#d5d5d5;color:#d5d5d5"/>
<!-- /wp:separator -->

<!-- wp:read-more {"content":"View Resource","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"6px"}},"backgroundColor":"contrast","textColor":"base-2","className":"is-style-button","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->