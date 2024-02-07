<?php
/**
 * Title: Place 
 * Slug: blockhaus/place
 * Categories: page, featured
 * Keywords: starter
 * Block Types: core/post-content
 * Post Types: place
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
  <div class="wp-block-group alignwide">
    
    <!-- wp:paragraph -->
    <p><?php echo esc_html_x( 'Place content here and do not forget to update the "Locations / Places" filter in the articles and resources blocks queries to the correct place name. If your location/place name does not yet exist, you can add it via the "Places" link in left-hand menu of the site admin area', 'blockhaus' ); ?></p>
    <!-- /wp:paragraph -->

  <!-- wp:pattern {"slug":"blockhaus/place-articles"} /-->
  <!-- wp:pattern {"slug":"blockhaus/place-resources"} /-->

  </div>
<!-- /wp:group -->
