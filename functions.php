<?php
/**
 * Twenty Twenty-Four functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Twenty Twenty-Four
 * @since Twenty Twenty-Four 1.0
 */


/**
 * Register block styles.
 */

if ( ! function_exists( 'blockhaus_block_styles' ) ) :
	/**
	 * Register custom block styles
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function blockhaus_block_styles() {

		register_block_style(
			'core/button',
			array(
				'name'         => 'plain-button',
				'label'        => __( 'Plain', 'blockhaus' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-plain-button .wp-block-button__link {
					border: none;
					background: none;
					padding: 0;
					color: var(--wp--preset--color--contrast);
					font-size: 1.2rem;
					font-weight: 600;
				}
				.is-style-plain-button .wp-block-button__link:hover, .is-style-plain-button .wp-block-button__link:focus {
					font-size: 1.2rem;
					font-weight: 600;
					background: none;
					outline: none;
					color: var(--wp--preset--color--contrast);
				}',
			)
		);
		
		register_block_style(
			'core/group',
			array(
				'name'         => 'outline-group',
				'label'        => __( 'Outline', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-outline-group {
					padding-left: var(--wp--preset--spacing--20);
					padding-right: var(--wp--preset--spacing--20);
					padding-block: var(--wp--preset--spacing--20);
					border: 1px solid var(--wp--preset--color--contrast-3);
					border-radius: var(--wp--preset--spacing--5);
				}',
			),
		);
		
		register_block_style(
			'core/group',
			array(
				'name'         => 'shadow-group',
				'label'        => __( 'Shadow', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.is-style-shadow-group {
					padding-left: var(--wp--preset--spacing--20);
					padding-right: var(--wp--preset--spacing--20);
					padding-block: var(--wp--preset--spacing--20);
					border-radius: var(--wp--preset--spacing--5);
					box-shadow: 0 25px 50px -12px rgb(0 0 0 / 0.25);
					overflow: hidden;
				}',
			)
		);
		
		register_block_style(
			'core/group',
			array(
				'name'         => 'spacing-group',
				'label'        => __( 'Spacing XL', 'twentytwentyfour' )
			)
		);
		
		register_block_style(
			'core/post-template',
			array(
				'name'         => 'grid-template',
				'label'        => __( 'Grid Template', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.wp-block-post-template.is-style-grid-template {
					display: grid;
					grid-template-columns: var(--grid-template-columns-fill);
					column-gap: var(--wp--preset--spacing--40);
					row-gap: var(--wp--preset--spacing--40);
				}',
			)
		);
		
		register_block_style(
			'core/post-terms',
			array(
				'name'         => 'pill',
				'label'        => __( 'Pill', 'blockhaus' ),
				/*
				 * Styles variation for post terms
				 * https://github.com/WordPress/gutenberg/issues/24956
				 */
				'inline_style' => '
				.is-style-pill a,
				.is-style-pill span:not([class], [data-rich-text-placeholder]) {
					display: inline-block;
					background-color: var(--wp--preset--color--base-2);
					padding: 0.375rem 0.875rem;
					border-radius: var(--wp--preset--spacing--20);
				}

				.is-style-pill a:hover {
					background-color: var(--wp--preset--color--contrast-3);
				}',
			)
		);
		
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'blockhaus' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);
		register_block_style(
			'core/navigation-link',
			array(
				'name'         => 'arrow-link',
				'label'        => __( 'With arrow', 'blockhaus' ),
				/*
				 * Styles for the custom arrow nav link block style
				 */
				'inline_style' => '
				.is-style-arrow-link .wp-block-navigation-item__label:after {
					content: "\2197";
					padding-inline-start: 0.25rem;
					vertical-align: middle;
					text-decoration: none;
					display: inline-block;
				}',
			)
		);
		
		register_block_style(
			'core/post-title',
			array(
				'name'         => 'hidden',
				'label'        => __( 'Visually hidden', 'twentytwentyfour' ),
				'inline_style' => "
				.is-style-hidden {
					position: absolute;
					width: 1px;
					height: 1px;
					padding: 0;
					margin: -1px;
					overflow: hidden;
					clip: rect(0, 0, 0, 0);
					white-space: nowrap;
					border-width: 0;
				}"
			)
		);
		
		register_block_style(
			'core/read-more',
			array(
				'name'         => 'button',
				'label'        => __( 'Read more button', 'twentytwentyfour' ),
				/*
				 * Styles for the custom button style of the read-more block
				 */
				'inline_style' => '
				.wp-block-read-more.is-style-button {
					background-color: var(--wp--preset--color--contrast);
					border-radius: var(--wp--preset--spacing--5);
					border-color: var(--wp--preset--color--contrast);
					border-width: 0;
					width: max-content;
					color: var(--wp--preset--color--base);
					font-family: inherit;
					font-size: var(--wp--preset--font-size--small);
					font-style: normal;
					font-weight: 500;
					line-height: inherit;
					padding-top: 0.6rem;
					padding-right: 1rem;
					padding-bottom: 0.6rem;
					padding-left: 1rem;
					text-decoration: none;
				}
				
				.wp-block-read-more.is-style-button:hover, .wp-block-read-more.is-style-button:focus-visible { 
					outline: 2px solid var(--wp--preset--color--contrast);
					outline-offset: 2px;
					color: var(--wp--preset--color--base-2);
				}',
			)
		);
		
		
		
		register_block_style(
			'core/separator',
			array(
				'name'         => 'left',
				'label'        => __( 'Left aligned', 'twentytwentyfour' ),
				/*
				 * Styles for the custom Arrow icon style of the Details block
				 */
				'inline_style' => '
				.wp-block-separator.is-style-left {
					margin-left: 0;
				}',
			)
		);
		
	}
endif;

add_action( 'init', 'blockhaus_block_styles' );

/**
 * Enqueue block variations.
 */

 function block_variations() {
	wp_enqueue_script(
	'prefix-block-variations',
	get_template_directory_uri() . '/assets/js/block-variations.js',
	array( 'wp-blocks')
	);
	
	}
	add_action( 'enqueue_block_editor_assets', 'block_variations' );
	
	/**
 * Proper way to enqueue scripts and styles.
 */
function blockhaus_nav_scripts() {
	
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'blockhaus_nav_scripts' );

/**
 * Enqueue block stylesheets.
 */

if ( ! function_exists( 'blockhaus_block_stylesheets' ) ) :
	/**
	 * Enqueue custom block stylesheets
	 *
	 * @since Twenty Twenty-Four 1.0
	 * @return void
	 */
	function blockhaus_block_stylesheets() {
		/**
		 * The wp_enqueue_block_style() function allows us to enqueue a stylesheet
		 * for a specific block. These will only get loaded when the block is rendered
		 * (both in the editor and on the front end), improving performance
		 * and reducing the amount of data requested by visitors.
		 *
		 * See https://make.wordpress.org/core/2021/12/15/using-multiple-stylesheets-per-block/ for more info.
		 */
		wp_enqueue_block_style(
			'core/button',
			array(
				'handle' => 'blockhaus-button-style-outline',
				'src'    => get_parent_theme_file_uri( 'assets/css/button-outline.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/button-outline.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/comment-template',
			array(
				'handle' => 'twentytwentyfour-comment-template-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/comment.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/comment.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/group',
			array(
				'handle' => 'twentytwentyfour-grid-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/grid.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/grid.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/loginout',
			array(
				'handle' => 'twentytwentyfour-loginout-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/loginout.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/loginout.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/navigation',
			array(
				'handle' => 'twentytwentyfour-navigation-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/navigation.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/navigation.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/post-template',
			array(
				'handle' => 'twentytwentyfour-post-template-grid-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/grid.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/grid.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/post-navigation-link',
			array(
				'handle' => 'twentytwentyfour-post-navigation-link-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/post-nav.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/post-nav.css' ),
			)
		);
		
		wp_enqueue_block_style(
			'core/query-pagination',
			array(
				'handle' => 'twentytwentyfour-query-navigation-link-style',
				'src'    => get_parent_theme_file_uri( 'assets/css/query-nav.css' ),
				'ver'    => wp_get_theme( get_template() )->get( 'Version' ),
				'path'   => get_parent_theme_file_path( 'assets/css/query-nav.css' ),
			)
		);
	}
endif;

add_action( 'init', 'blockhaus_block_stylesheets' );

/**
 * Prevent loading of patterns from WordPress.org pattern directory
 */

 add_filter( 'should_load_remote_block_patterns', '__return_false' );

/**
 * LOGIN
 */


// Redirect from /wp-login.php/ to /login/ 
add_action('init', 'custom_login');
function custom_login() {
$home = get_bloginfo('url');
global $pagenow;
if ($pagenow === 'wp-login.php' && empty($_REQUEST['action'])) {
    wp_redirect(get_bloginfo( 'url') . '/login/');
    
} 
}

function post_types_author_archives($query) {

	// Add ‘videos’ post type to author archives
	// Add your own Post types in single quotes before 'post'
	if ( $query->is_author ) {
			$query->set( 'post_type', array('resources', 'resources-de', 'resources-fr', 'blog-fr', 'blog-de', 'post') );
			// Remove the action after it’s run
			remove_action( 'pre_get_posts', 'post_types_author_archives' );
	}
}
add_action( 'pre_get_posts', 'post_types_author_archives' );

function blockhaus_custom_form($placeholder) {
	$form = '<form role="search" method="get" class="search-form w-full lg:w-1/2 text-sm leading-6 flex py-1 px-2 bg-primary-default rounded-full border border-neutral-light-100 focus-within:border-secondary gap-2" action="' . home_url( '/' ) . '">
	<label class="w-full">
		<span class="screen-reader-text">Search for:</span>
		<input type="search" class="search-field w-full border-none ring-transparent focus:ring-transparent focus:shadow-none focus:border-none py-0 px-2 text-sm focus-visible:outline-none" placeholder="' . $placeholder . '" value="' . get_search_query() . '" name="s">
	</label>
	<button type="submit" class="search-submit px-2 bg-accent-default text-primary-default rounded-full hover:bg-neutral-dark-500 transition-colors duration-200 cursor-pointer" aria-label="Submit search" value="Search">
    <svg class="fill-primary-default" aria-hidden="true" focusable="false" id="search-icon" class="search-icon" viewBox="0 0 24 24" width="24" height="24">
					<path d="M13.5 6C10.5 6 8 8.5 8 11.5c0 1.1.3 2.1.9 3l-3.4 3 1 1.1 3.4-2.9c1 .9 2.2 1.4 3.6 1.4 3 0 5.5-2.5 5.5-5.5C19 8.5 16.5 6 13.5 6zm0 9.5c-2.2 0-4-1.8-4-4s1.8-4 4-4 4 1.8 4 4-1.8 4-4 4z"></path>
		</svg>
</button>
</form>';

return $form;
}