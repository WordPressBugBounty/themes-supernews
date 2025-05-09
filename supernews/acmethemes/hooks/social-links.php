<?php
/**
 * Display Social Links
 *
 * @since SuperNews 1.0.0
 *
 * @param null
 * @return void
 */
if ( ! function_exists( 'supernews_social_links' ) ) :

	function supernews_social_links() {

		$supernews_customizer_all_values = supernews_get_theme_options();
		?>
		<div class="socials">
			<?php
			if ( ! empty( $supernews_customizer_all_values['supernews-facebook-url'] ) ) {
				?>
				<a href="<?php echo esc_url( $supernews_customizer_all_values['supernews-facebook-url'] ); ?>" class="facebook" data-title="Facebook" target="_blank">
					<span class="font-icon-social-facebook"><i class="fa fa-facebook"></i></span>
				</a>
				<?php
			}
			if ( ! empty( $supernews_customizer_all_values['supernews-twitter-url'] ) ) {
				?>
				<a href="<?php echo esc_url( $supernews_customizer_all_values['supernews-twitter-url'] ); ?>" class="twitter" data-title="Twitter" target="_blank">
					<span class="font-icon-social-twitter"><i class="fa fa-twitter"></i></span>
				</a>
				<?php
			}
			if ( ! empty( $supernews_customizer_all_values['supernews-youtube-url'] ) ) {
				?>
				<a href="<?php echo esc_url( $supernews_customizer_all_values['supernews-youtube-url'] ); ?>" class="youtube" data-title="Youtube" target="_blank">
					<span class="font-icon-social-youtube"><i class="fa fa-youtube"></i></span>
				</a>
				<?php
			}
			if ( ! empty( $supernews_customizer_all_values['supernews-instagram-url'] ) ) {
				?>
				<a href="<?php echo esc_url( $supernews_customizer_all_values['supernews-instagram-url'] ); ?>" class="instagram" data-title="Instagram" target="_blank">
					<span class="font-icon-social-instagram"><i class="fa fa-instagram"></i></span>
				</a>
				<?php
			}
			if ( ! empty( $supernews_customizer_all_values['supernews-google-plus-url'] ) ) {
				?>
				<a href="<?php echo esc_url( $supernews_customizer_all_values['supernews-google-plus-url'] ); ?>" class="google-plus" data-title="Google Plus" target="_blank">
					<span class="font-icon-social-google-plus"><i class="fa fa-google-plus"></i></span>
				</a>
				<?php
			}
			if ( ! empty( $supernews_customizer_all_values['supernews-pinterest-url'] ) ) {
				?>
				<a href="<?php echo esc_url( $supernews_customizer_all_values['supernews-pinterest-url'] ); ?>" class="pinterest" data-title="Pinterest" target="_blank">
					<span class="font-icon-social-pinterest"><i class="fa fa-pinterest"></i></span>
				</a>
				<?php
			}
			?>
		</div>
		<?php
	}
endif;
add_filter( 'supernews_action_social_links', 'supernews_social_links', 10 );
