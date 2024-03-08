<?php
/**
 * Title: List of posts w/ images, flexible grid
 * Slug: blockhaus/posts-list
 * Categories: query, posts
 * Block Types: core/query
 */
?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide">
  
<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1","fontStyle":"normal","fontWeight":"900"}},"fontSize":"xx-large"} -->
<h1 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="font-style:normal;font-weight:900;line-height:1">{Page title}</h1>
<!-- /wp:heading -->

<!-- wp:blockhaus/archive-description {"name":"blockhaus/archive-description","mode":"preview"} /-->

<!-- wp:separator {"backgroundColor":"accent-2"} -->
<hr class="wp-block-separator has-text-color has-accent-2-color has-alpha-channel-opacity has-accent-2-background-color has-background"/>
<!-- /wp:separator -->

<!-- wp:query {"queryId":16,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-query alignwide"><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p><?php echo esc_html_x( 'No content was found', 'No results text of the Posts list pattern', 'blockhaus' ); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:0;padding-right:0;padding-left:0"><!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"0"}},"className":"is-style-grid-template","layout":{"type":"default"}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"0"}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background" style="min-height:100%;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-featured-image {"aspectRatio":"16/9","height":"","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"border":{"radius":"0px"}}} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"}}},"className":"is-style-default","layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
<div class="wp-block-group is-style-default" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0"}},"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} /-->

<!-- wp:pattern {"slug":"blockhaus/content-meta"} /-->

<!-- wp:post-excerpt {"fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:spacer {"height":"var:preset|spacing|50","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<div style="margin-top:0;margin-bottom:0;height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:group --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></main>
<!-- /wp:group -->
