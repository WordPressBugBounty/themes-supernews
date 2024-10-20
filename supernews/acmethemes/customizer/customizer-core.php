<?php
/**
 * Header logo/text display options alternative
 *
 * @since SuperNews 1.0.2
 *
 * @param null
 * @return array $supernews_header_id_display_opt
 *
 */
if ( !function_exists('supernews_header_id_display_opt') ) :
    function supernews_header_id_display_opt() {
        $supernews_header_id_display_opt =  array(
            'logo-only' => __( 'Logo Only ( First Select Logo Above )', 'supernews' ),
            'title-only' => __( 'Site Title Only', 'supernews' ),
            'title-and-tagline' =>  __( 'Site Title and Tagline', 'supernews' ),
            'disable' => __( 'Disable', 'supernews' )
        );
        return apply_filters( 'supernews_header_id_display_opt', $supernews_header_id_display_opt );
    }
endif;

/**
 * Header Display Options
 *
 * @since SuperNews 1.2.0
 *
 * @param null
 * @return array $supernews_header_date_format
 *
 */
if ( !function_exists('supernews_header_date_format') ) :
	function supernews_header_date_format() {
		$supernews_header_date_format =  array(
			'default' => __( 'Default', 'supernews' ),
			'wp-date-format' => __( 'From WordPress Date Setting', 'supernews' )
		);
		return apply_filters( 'supernews_header_date_format', $supernews_header_date_format );
	}
endif;

/**
 * Header Media Position options
 *
 * @since SuperNews 1.2.0
 *
 * @param null
 * @return array $supernews_header_media_position
 *
 */
if ( !function_exists('supernews_header_media_position') ) :
	function supernews_header_media_position() {
		$supernews_header_media_position =  array(
			'very-top' => __( 'Very Top', 'supernews' ),
			'above-logo' => __( 'Above Site Identity', 'supernews' ),
			'above-menu' => __( 'Below Site Identity and Above Menu', 'supernews' ),
			'below-menu' => __( 'Below Menu', 'supernews' )
		);
		return apply_filters( 'supernews_header_media_position', $supernews_header_media_position );
	}
endif;

/**
 * Header Ads display options
 *
 * @since SuperNews 1.0.3
 *
 * @param null
 * @return array
 *
 */
if ( !function_exists('supernews_header_ads_display_options') ) :
	function supernews_header_ads_display_options() {
		$supernews_related_posts_display_options =  array(
			'hide'  => __( 'Hide', 'supernews' ),
			'show' => __( 'Show', 'supernews' )
		);
		return apply_filters( 'supernews_related_posts_display_options', $supernews_related_posts_display_options );
	}
endif;

/**
 * Header Site identity and ads display options
 *
 * @since SuperNews 1.0.5
 *
 * @param null
 * @return array $supernews_header_logo_menu_display_position
 *
 */
if ( !function_exists('supernews_header_logo_menu_display_position') ) :
	function supernews_header_logo_menu_display_position() {
		$supernews_header_logo_menu_display_position =  array(
			'left-logo-right-ads' => __( 'Left Logo and Right Ads', 'supernews' ),
			'right-logo-left-ads' => __( 'Right Logo and Left Ads', 'supernews' ),
			'center-logo-below-ads' => __( 'Center Logo and Below Ads', 'supernews' )
		);
		return apply_filters( 'supernews_header_logo_menu_display_position', $supernews_header_logo_menu_display_position );
	}
endif;

/**
 * Sidebar layout options
 *
 * @since SuperNews 1.0.0
 *
 * @param null
 * @return array $supernews_sidebar_layout
 *
 */
if ( !function_exists('supernews_sidebar_layout') ) :
    function supernews_sidebar_layout() {
        $supernews_sidebar_layout =  array(
            'right-sidebar' => __( 'Right Sidebar', 'supernews' ),
            'left-sidebar'  => __( 'Left Sidebar' , 'supernews' ),
            'both-sidebar'  => __( 'Both Sidebar' , 'supernews' ),
            'middle-col'    => esc_html__( 'Middle Column' , 'supernews' ),
            'no-sidebar'    => __( 'No Sidebar', 'supernews' )
        );
        return apply_filters( 'supernews_sidebar_layout', $supernews_sidebar_layout );
    }
endif;

/**
 * Blog layout options
 *
 * @since SuperNews 1.0.0
 *
 * @param null
 * @return array $supernews_blog_layout
 *
 */
if ( !function_exists('supernews_blog_layout') ) :
    function supernews_blog_layout() {
        $supernews_blog_layout =  array(
            'show-image' => __( 'Show Image', 'supernews' ),
            'no-image'   => __( 'Hide Image', 'supernews' )
        );
        return apply_filters( 'supernews_blog_layout', $supernews_blog_layout );
    }
endif;

/**
 * Related posts layout options
 *
 * @since SuperNews 1.0.0
 *
 * @param null
 * @return array
 *
 */
if ( !function_exists('supernews_reset_options') ) :
    function supernews_reset_options() {
        $supernews_reset_options =  array(
            '0'  => __( 'Do Not Reset', 'supernews' ),
            'reset-color-options'  => __( 'Reset Colors Options', 'supernews' ),
            'reset-all' => __( 'Reset All', 'supernews' )
        );
        return apply_filters( 'supernews_reset_options', $supernews_reset_options );
    }
endif;

/**
 * Blog Archive Display Options
 *
 * @since SuperNews 1.2.0
 *
 * @param null
 * @return array
 *
 */
if ( !function_exists('supernews_blog_archive_category_display_options') ) :
	function supernews_blog_archive_category_display_options() {
		$supernews_blog_archive_category_display_options =  array(
			'default'  => __( 'Default', 'supernews' ),
			'cat-color'  => __( 'Categories with Color', 'supernews' )
		);
		return apply_filters( 'supernews_blog_archive_category_display_options', $supernews_blog_archive_category_display_options );
	}
endif;

/**
 * Related Post Display From Options
 *
 * @since SuperNews 1.2.0
 *
 * @param null
 * @return array
 *
 */
if ( !function_exists('supernews_related_post_display_from') ) :
	function supernews_related_post_display_from() {
		$supernews_related_post_display_from =  array(
			'cat'  => __( 'Related Posts From Categories', 'supernews' ),
			'tag'  => __( 'Related Posts From Tags', 'supernews' )
		);
		return apply_filters( 'supernews_related_post_display_from', $supernews_related_post_display_from );
	}
endif;

/**
 * Blog layout options
 *
 * @since SuperNews 1.2.0
 *
 * @param null
 * @return array $supernews_get_image_sizes_options
 *
 */
if ( !function_exists('supernews_get_image_sizes_options') ) :
	function supernews_get_image_sizes_options( $add_disable = false ) {
		global $_wp_additional_image_sizes;
		$choices = array();
		if ( true == $add_disable ) {
			$choices['disable'] = __( 'No Image', 'supernews' );
		}
		foreach ( array( 'thumbnail', 'medium', 'large' ) as $key => $_size ) {
			$choices[ $_size ] = $_size . ' ('. get_option( $_size . '_size_w' ) . 'x' . get_option( $_size . '_size_h' ) . ')';
		}
		$choices['full'] = __( 'full (original)', 'supernews' );
		if ( ! empty( $_wp_additional_image_sizes ) && is_array( $_wp_additional_image_sizes ) ) {

			foreach ($_wp_additional_image_sizes as $key => $size ) {
				$choices[ $key ] = $key . ' ('. $size['width'] . 'x' . $size['height'] . ')';
			}
		}
		return apply_filters( 'supernews_get_image_sizes_options', $choices );
	}
endif;