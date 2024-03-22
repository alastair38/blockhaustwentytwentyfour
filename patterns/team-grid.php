<?php
/**
 * Title: Team Layout
 * Slug: blockhaus/team-grid
 * Categories: team, about
 * Viewport width: 1400
 */
?>

<!-- wp:group {"align":"wide","backgroundColor":"accent-2","className":"is-style-spacing-group blockhaus-team","layout":{"type":"constrained"},"metadata":{"name":"Team Layout"}} -->
<div class="wp-block-group alignwide is-style-spacing-group blockhaus-team has-accent-2-background-color has-background">
  
  <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
  <div class="wp-block-group alignwide">
    
    <!-- wp:heading {"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} -->
    <h2 class="wp-block-heading alignwide has-large-font-size" style="font-style:normal;font-weight:900">
      <?php echo esc_html_x( 'Team Name / Location', 'Title text of the Team Grid pattern', 'blockhaus' ); ?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"fontSize":"medium"} -->
    <p class="has-medium-font-size">
      <?php echo esc_html_x( 'Some introductory text about your team.', 'Paragraph text of the Team Grid pattern', 'blockhaus' ); ?>
    </p>
    <!-- /wp:paragraph -->

  </div>
  <!-- /wp:group -->

  <!-- wp:group {"align":"wide","className":"blockhaus-grid is-style-default","layout":{"type":"grid","minimumColumnWidth":"300px"}} -->
  <div class="wp-block-group alignwide blockhaus-grid is-style-default"></div>
  <!-- /wp:group -->

</div>
<!-- /wp:group -->