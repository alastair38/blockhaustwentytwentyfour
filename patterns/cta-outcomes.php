<?php
/**
 * Title: Outcomes CTA w/ image
 * Slug: blockhaus/cta-outcomes
 * Categories: call-to-action, banner
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"className":"is-style-default","layout":{"type":"constrained"},"metadata":{"name":"Outcomes"}} -->
<div class="wp-block-group alignfull is-style-default">
  
  <!-- wp:image {"align":"center","id":2007,"sizeSlug":"medium","linkDestination":"none"} -->
  <figure class="wp-block-image aligncenter size-medium">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/note-graphic.png'; ?>" alt="" class="wp-image-2007"/>
  </figure>
  <!-- /wp:image -->

  <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large","fontFamily":"body"} -->
  <h2 class="wp-block-heading has-text-align-center has-body-font-family has-large-font-size" style="font-style:normal;font-weight:900">Outcomes</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem"}},"fontFamily":"heading"} -->
  <p class="has-text-align-center has-heading-font-family" style="font-size:1.5rem">EnACT-Dem will build connections between networks of people with dementia. We aim to inform public understanding of dementia, demonstrating the significant contribution made by people living with dementia to their communities.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
  <div class="wp-block-buttons">
    <!-- wp:button -->
    <div class="wp-block-button">
      <a class="wp-block-button__link wp-element-button">View all our outputs</a>
    </div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

</div>
<!-- /wp:group -->