<?php
/**
 * Title: Place Articles
 * Slug: blockhaus/place-articles
 * Categories: featured
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"accent-2","className":"is-style-spacing-group","layout":{"type":"default"},"metadata":{"name":"Place Articles"}} -->
<div class="wp-block-group alignwide is-style-spacing-group has-accent-2-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:900">Articles</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Here are the latest blog posts from the Stirling team.</p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"1em"} -->
<div style="height:1em" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query {"queryId":2,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"place-taxonomy":[15],"location":[17]}}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"0"}},"className":"is-style-grid-template","layout":{"type":"default","columnCount":1}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"16/9","width":"100%","height":"10rem","style":{"border":{"radius":"6px"},"layout":{"selfStretch":"fit","flexSize":null}}} /-->

<!-- wp:post-date /-->

<!-- wp:post-title {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} /-->

<!-- wp:read-more {"content":"View Article","style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"6px"}},"backgroundColor":"contrast","textColor":"base-2","className":"is-style-button","fontSize":"small"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->


<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->