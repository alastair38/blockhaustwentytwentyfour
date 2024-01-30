<?php
/**
 * Title: Places CTA
 * Slug: blockhaus/cta-places
 * Categories: call-to-action
 * Viewport width: 1400
 */
?>

<!-- wp:group {"style":{"color":{"background":"#cd9ddc"},"spacing":{"blockGap":"var:preset|spacing|40"}},"className":"grid grid-cols-fit is-style-shadow-group polka-background places","layout":{"type":"grid","minimumColumnWidth":"300px"},"metadata":{"name":"Places"}} -->
<div class="wp-block-group grid grid-cols-fit is-style-shadow-group polka-background places has-background" style="background-color:#cd9ddc;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|20"},"layout":{"selfStretch":"fixed","flexSize":"40%"}},"className":"is-style-default","layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center"}} -->
	<div class="wp-block-group alignfull is-style-default">
		
		<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:900">Places</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontSize":"1.5rem"}},"fontFamily":"heading"} -->
		<p class="has-heading-font-family" style="font-size:1.5rem;line-height:1.2">Our team and project sites are located in Canada, Germany and the United Kingdom.</p>
		<!-- /wp:paragraph -->

		<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button -->
			<div class="wp-block-button">
				<a class="wp-block-button__link wp-element-button" href="/places">Visit our places</a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"layout":{"selfStretch":"fixed","flexSize":"60%"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group">
	
		<!-- wp:query {"queryId":1,"query":{"perPage":"5","pages":0,"offset":0,"postType":"place","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]},"layout":{"type":"default"}} -->
		<div class="wp-block-query">
			<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"grid","columnCount":2}} -->
		<!-- wp:group {"style":{"dimensions":{"minHeight":"100%"}},"backgroundColor":"base-2","className":"is-style-shadow-group","layout":{"type":"default"}} -->
		<div class="wp-block-group is-style-shadow-group has-base-2-background-color has-background" style="min-height:100%"><!-- wp:post-featured-image {"aspectRatio":"16/9","style":{"border":{"radius":"0px"}}} /-->

		<!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"fontSize":"medium"} /--></div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
			
	</div>
	<!-- /wp:group -->
	
</div>
<!-- /wp:group -->