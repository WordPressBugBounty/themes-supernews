<?php
/**
 * SuperNews functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage SuperNews
 */


/**
 *  Default Theme layout options
 *
 * @since SuperNews 1.0.0
 *
 * @param null
 * @return array $supernews_theme_layout
 */
if ( ! function_exists( 'supernews_get_default_theme_options' ) ) :
	function supernews_get_default_theme_options() {

		$default_theme_options = array(
			/*feature section options*/
			'supernews-feature-cat'                      => 0,
			'supernews-enable-feature'                   => '',
			'supernews-feature-slider-enable'            => '',

			/*header options*/
			'supernews-header-logo'                      => '',
			'supernews-header-id-display-opt'            => 'title-and-tagline',

			'supernews-show-date'                        => 1,
			'supernews-header-date-format'               => 'default',

			'supernews-breaking-news-title'              => __( 'Breaking News', 'supernews' ),
			'supernews-enable-breaking-news'             => '',

			'supernews-facebook-url'                     => '',
			'supernews-twitter-url'                      => '',
			'supernews-youtube-url'                      => '',
			'supernews-instagram-url'                    => '',
			'supernews-google-plus-url'                  => '',
			'supernews-pinterest-url'                    => '',
			'supernews-enable-social'                    => 0,

			'supernews-enable-sticky-menu'               => '',

			'supernews-header-media-position'            => 'above-menu',
			'supernews-header-media-customizer-link'     => '',
			'supernews-header-image-link'                => esc_url( home_url() ),
			'supernews-header-image-link-new-tab'        => '',

			'supernews-header-main-show-banner-ads'      => 'show',
			'supernews-header-main-banner-ads'           => get_template_directory_uri() . '/assets/img/supernews-default-ad.jpg',
			'supernews-header-main-banner-ads-link'      => 'https://www.acmethemes.com/themes/supernews/',
			'supernews-header-logo-ads-display-position' => 'left-logo-right-ads',

			'supernews-header-show-search'               => 1,

			/*footer options*/
			'supernews-footer-copyright'                 => __( '&copy; All Right Reserved', 'supernews' ),

			/*blog layout*/
			'supernews-blog-archive-image-layout'        => 'full',
			'supernews-blog-archive-more-text'           => __( 'Read More', 'supernews' ),

			/*layout/design options*/
			'supernews-sidebar-layout'                   => 'right-sidebar',
			'supernews-front-page-sidebar-layout'        => 'right-sidebar',
			'supernews-archive-sidebar-layout'           => 'right-sidebar',

			'supernews-enable-sticky-sidebar'            => 1,
			'supernews-blog-archive-layout'              => 'show-image',

			'supernews-primary-color'                    => '#f73838',
			'supernews-cat-hover-color'                  => '#2d2d2d',

			'supernews-custom-css'                       => '',

			/*single post options*/
			'supernews-show-related'                     => 1,
			'supernews-related-title'                    => __( 'Related posts', 'supernews' ),
			'supernews-related-post-display-from'        => 'cat',
			'supernews-single-image-layout'              => 'full',

			/*theme options*/
			'supernews-search-placholder'                => __( 'Search', 'supernews' ),
			'supernews-show-breadcrumb'                  => 1,
			'supernews-side-show-message'                => '',
			'supernews-side-image-message'               => '',

			'supernews-hide-front-page-content'          => '',

			'supernews-you-are-here-text'                => __( 'You are here', 'supernews' ),

			/*woocommerce*/
			'supernews-wc-shop-archive-sidebar-layout'   => 'no-sidebar',
			'supernews-wc-product-column-number'         => 4,
			'supernews-wc-shop-archive-total-product'    => 16,
			'supernews-wc-single-product-sidebar-layout' => 'no-sidebar',

			/*Reset*/
			'supernews-reset-options'                    => '0',
		);
		return apply_filters( 'supernews_default_theme_options', $default_theme_options );
	}
endif;


if ( ! function_exists( 'supernews_get_theme_options' ) ) :
	/**
	 * Get theme options
	 *
	 * @since SuperNews 1.0.0
	 *
	 * @return array supernews_theme_options
	 */
	function supernews_get_theme_options() {
		static $cached_theme_options = null;

		// Use cached options unless in Customizer.
		if ( null !== $cached_theme_options && ! is_customize_preview() ) {
			return $cached_theme_options;
		}

		$supernews_default_theme_options = supernews_get_default_theme_options();
		$supernews_get_theme_options     = get_theme_mod( 'supernews_theme_options' );

		if ( is_array( $supernews_get_theme_options ) ) {
			$cached_theme_options = array_merge( $supernews_default_theme_options, $supernews_get_theme_options );
		} else {
			$cached_theme_options = $supernews_default_theme_options;
		}

		return $cached_theme_options;
	}
endif;

/**
 * require int.
 */
require_once trailingslashit( get_template_directory() ) . 'acmethemes/init.php';
