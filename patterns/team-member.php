<?php
/**
 * Title: Team member
 * Slug: blockhaus/team-member
 * Categories: team, about
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"},"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","className":"is-style-shadow-group team-member","layout":{"type":"flex","orientation":"vertical"},"metadata":{"name":"Team Member"}} -->
<div class="wp-block-group is-style-shadow-group team-member has-base-2-background-color has-background" style="min-height:100%">

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left"}} -->
	<div class="wp-block-group">
		
		<!-- wp:image {"id":2018,"width":"150px","height":"150px","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","style":{"layout":{"selfStretch":"fit","flexSize":null},"border":{"radius":"100%"}}} -->
		<figure class="wp-block-image size-thumbnail is-resized has-custom-border">
			<img src="<?php echo get_template_directory_uri() . '/assets/images/woman-short-hair.jpg'; ?>" alt="" class="wp-image-2018" style="border-radius:100%;object-fit:cover;width:150px;height:150px"/>
		</figure>
		<!-- /wp:image -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
		<div class="wp-block-group">
			
			<!-- wp:paragraph -->
			<p><strong>Name</strong></p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"align":"left"} -->
			<p class="has-text-align-left">Location</p>
			<!-- /wp:paragraph -->
		
		</div>
		<!-- /wp:group -->
		
	</div>
	<!-- /wp:group -->

	<!-- wp:paragraph -->
	<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla dolorum incidunt eius tempore, atque consectetur unde et repudiandae asperiores quos perspiciatis at tempora illo sequi eum officia repellat vero nobis!</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae omnis blanditiis quia autem animi consequuntur illo officiis reprehenderit harum laboriosam facere hic quibusdam, dolore, vitae adipisci velit at itaque voluptate?</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident facilis, doloremque quaerat, consectetur saepe commodi deserunt vitae incidunt quo, reiciendis velit sed accusamus quisquam accusantium. Quae perspiciatis corporis eum distinctio.</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->