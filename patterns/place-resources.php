<?php
/**
 * Title: Place Resources
 * Slug: blockhaus/place-resources
 * Categories: featured
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"is-style-default","layout":{"type":"default"},"metadata":{"name":"Place Resources"}} -->
<div class="wp-block-group alignwide is-style-default"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:900">Resources</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":0,"offset":0,"postType":"resources","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"place-taxonomy":[15]},"parents":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-grid-template","layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background" style="min-height:100%"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"medium"} /-->

<!-- wp:separator {"style":{"color":{"background":"#d5d5d5"}},"className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-alpha-channel-opacity has-background is-style-wide" style="background-color:#d5d5d5;color:#d5d5d5"/>
<!-- /wp:separator --></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"View Resource","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-button"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p>We are regularly adding content. Please check back soon.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->