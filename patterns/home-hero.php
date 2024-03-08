<?php
/**
 * Title: Home hero
 * Slug: blockhaus/home-hero
 * Categories: banner
 */
?>

 <!-- wp:group {"tagName":"header","align":"wide","className":"split-header","layout":{"type":"default"},"metadata":{"name":"Home Hero"}} -->
<header class="wp-block-group alignwide split-header">
  
  <!-- wp:group {"className":"grid grid-cols-fit contour-bg","layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
  <div class="wp-block-group grid grid-cols-fit contour-bg">
    
    <!-- wp:group {"style":{"spacing":{"blockGap":"0"},"layout":{"selfStretch":"fixed","flexSize":"50%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
    <div class="wp-block-group">
      
      <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default"}} -->
      <div class="wp-block-group">
    
        <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}},"typography":{"fontStyle":"normal","fontWeight":"900"}},"textColor":"contrast","fontSize":"xx-large"} -->
        <h1 class="wp-block-heading has-contrast-color has-text-color has-link-color has-xx-large-font-size" style="font-style:normal;font-weight:900"><?php echo esc_html_x( 'EnACT-Dem', 'Title text of the home hero section', 'blockhaus' ); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"300"}},"fontSize":"medium"} -->
        <p class="has-medium-font-size" style="font-weight:300"><?php echo esc_html_x( 'Centring the lived experience of dementia with policy, practice and community development', 'Paragraph text of the home hero section', 'blockhaus' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:separator {"backgroundColor":"accent-2","className":"is-style-left"} -->
        <hr class="wp-block-separator has-text-color has-accent-2-color has-alpha-channel-opacity has-accent-2-background-color has-background is-style-left"/>
        <!-- /wp:separator -->
        
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"className":"is-style-default","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
    <div class="wp-block-group is-style-default">
      
      <!-- wp:group {"layout":{"type":"constrained"}} -->
      <div class="wp-block-group">
        
        <!-- wp:image {"align":"wide","id":1535,"sizeSlug":"full","linkDestination":"none","className":"drop-shadow"} -->
        <figure class="wp-block-image alignwide size-full drop-shadow">
          <img src="http://demproj.local/wp-content/uploads/2023/12/composite-2.png" alt="" class="wp-image-1535"/>
        </figure>
        <!-- /wp:image -->
      
      </div>
      <!-- /wp:group -->
      
    </div>
    <!-- /wp:group -->
  
  </div>
  <!-- /wp:group -->
  
</header>
<!-- /wp:group -->