<?php
/**
 * Title: Places CTA
 * Slug: blockhaus/cta-places
 * Categories: call-to-action
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"color":{"background":"#cd9ddc"},"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"is-style-shadow-group polka-background places","layout":{"type":"default"},"metadata":{"name":"Places"}} -->
<div class="wp-block-group is-style-shadow-group polka-background places has-background" style="background-color:#cd9ddc"><!-- wp:group {"align":"full","style":{"layout":{"selfStretch":"fixed","flexSize":"40%"}},"className":"is-style-default","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
<div class="wp-block-group alignfull is-style-default"><!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} -->
<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:900"><?php echo esc_html_x( 'Places', 'Title text of the Places CTA block', 'blockhaus' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2"}},"fontSize":"medium-large","fontFamily":"system-sans-serif"} -->
<p class="has-system-sans-serif-font-family has-medium-large-font-size" style="line-height:1.2"><?php echo esc_html_x( 'Our team and project sites are located in Canada, Germany and the United Kingdom.', 'Paragraph text of the Places CTA block', 'blockhaus' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="/places"><?php echo esc_html_x( 'View all our places', 'Button link text of the Places CTA block', 'blockhaus' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60%"}},"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:query {"queryId":1,"query":{"perPage":"5","pages":0,"offset":0,"postType":"place","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"0px"}}} /-->

<!-- wp:post-title {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"medium"} /-->

<!-- wp:read-more {"content":"View place","className":"is-style-button"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->