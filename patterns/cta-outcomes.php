<?php
/**
 * Title: CTA + image
 * Slug: blockhaus/cta-outcomes
 * Categories: call-to-action, banner
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"className":"is-style-default","layout":{"type":"constrained"},"metadata":{"name":"CTA + Image"}} -->
<div class="wp-block-group alignfull is-style-default" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
  
  <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}},"border":{"radius":"50%"}},"backgroundColor":"accent-2","className":"w-fit","layout":{"type":"constrained"}} -->
  <div class="wp-block-group w-fit has-accent-2-background-color has-background" style="border-radius:50%;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:image {"align":"center","id":2007,"width":"auto","height":"100px","aspectRatio":"1","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->

  <figure class="wp-block-image aligncenter size-full is-resized">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/Isometric-Stickers-Brainstorming.png'; ?>" alt="" class="wp-image-2007" style="aspect-ratio:1;object-fit:contain;width:auto;height:100px"/>
  </figure>
  <!-- /wp:image -->

  </div>
  <!-- /wp:group -->

  <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large","fontFamily":"body"} -->
  <h2 class="wp-block-heading has-text-align-center has-body-font-family has-large-font-size" style="font-style:normal;font-weight:900">{CTA title}</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem"}},"fontFamily":"heading"} -->
  <p class="has-text-align-center has-heading-font-family" style="font-size:1.5rem">Add your call to action text here, update the image and feel free to change the image background or even add a background color to the whole block.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
    <!-- wp:button -->
    <div class="wp-block-button">
      <a class="wp-block-button__link wp-element-button">{CTA Link Text}</a>
    </div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

</div>
<!-- /wp:group -->