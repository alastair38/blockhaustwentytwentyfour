<?php
/**
 * Title: Contact card
 * Slug: blockhaus/contact-card
 * Categories: contact
 * Block Types: core/group
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"position":{"type":""}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"},"metadata":{"name":"Contact Card"}} -->
<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">

  <!-- wp:image {"id":637,"width":"75px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"border":{"radius":"51.1%"}}} -->
  <figure class="wp-block-image size-thumbnail is-resized has-custom-border">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/man-dark-hair.jpeg'; ?>" alt="" class="wp-image-637" style="border-radius:100%;aspect-ratio:1;object-fit:cover;width:75px"/>
  </figure>
  <!-- /wp:image -->

  <!-- wp:paragraph {"align":"center","style":{"className":"pretty","layout":{"selfStretch":"fill","flexSize":null}}} -->
  <p class="pretty has-text-align-center">If you would like to work with the {name of} project, please contact {name}.</p>
  <!-- /wp:paragraph -->

  <!-- wp:buttons -->
  <div class="wp-block-buttons">
    <!-- wp:button -->
    <div class="wp-block-button">
      <a class="wp-block-button__link wp-element-button" href="/">Get in touch</a>
    </div>
    <!-- /wp:button -->
  </div>
  <!-- /wp:buttons -->

</div>
<!-- /wp:group -->