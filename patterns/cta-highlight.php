<?php
/**
 * Title: Highlight
 * Slug: blockhaus/cta-highlight
 * Categories: call-to-action, featured
 * Viewport width: 1400
 */
?>

<!-- wp:group {"tagName":"aside","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"},"blockGap":"0"}},"backgroundColor":"base-2","className":"grid is-style-shadow-group","layout":{"type":"grid","minimumColumnWidth":"300px"},"metadata":{"name":"Highlight"}} -->
<aside class="wp-block-group grid is-style-shadow-group has-base-2-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

  <!-- wp:image {"id":846,"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","linkDestination":"none"} -->
  <figure class="wp-block-image size-large">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/notes.jpeg'; ?>" alt="" class="wp-image-846" style="aspect-ratio:16/9;object-fit:cover"/>
  </figure>
  <!-- /wp:image -->

  <!-- wp:group {"style":{"dimensions":{"minHeight":"100%"},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"}}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
  <div class="wp-block-group" style="min-height:100%;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)">
  
    <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"900","textTransform":"none"}},"fontSize":"medium"} -->
    <h2 class="wp-block-heading has-medium-font-size" style="font-style:normal;font-weight:900;text-transform:none">
    Article title here <?php echo $post_id;?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:buttons -->
    <div class="wp-block-buttons">
      <!-- wp:button {"className":"is-style-fill"} -->
      <div class="wp-block-button is-style-fill">
        <a class="wp-block-button__link wp-element-button" href="/">More information</a>
      </div>
      <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
  
  </div>
  <!-- /wp:group -->
  
</aside>
<!-- /wp:group -->