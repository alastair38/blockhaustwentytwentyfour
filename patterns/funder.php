<?php
/**
 * Title: Funder
 * Slug: blockhaus/funder
 */
?>

<!-- wp:group {"align":"wide","className":"is-style-outline-group","layout":{"type":"constrained"},"metadata":{"name":"Funder"}} -->
<div class="wp-block-group alignwide is-style-outline-group">
  
  <!-- wp:paragraph {"align":"center"} -->
  <p class="has-text-align-center"><?php echo esc_html_x( 'Funded by:', 'Paragraph text of the funder block', 'blockhaus' ); ?></p>
  <!-- /wp:paragraph -->

  <!-- wp:image {"align":"center","sizeSlug":"large","linkDestination":"none"} -->
  <figure class="wp-block-image aligncenter size-large">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.webp'; ?>" alt=""/>
  </figure>
  <!-- /wp:image -->
  
</div>
<!-- /wp:group -->