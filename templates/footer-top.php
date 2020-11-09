<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Ararat
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$siteUrl 		= home_url('/');		
	$footer_logo_id = get_theme_mod( 'footer_logo' );
	$footer_logo 	= wp_get_attachment_image_src( $footer_logo_id , 'ararat_site_logo_123x40' )[0];
	?>
	
	<div class="footer_top">
		<div class="container-fluid p-0">
			<div class="row no-gutters ">
				<div class="col-xl-3 col-12 col-md-4">
					<div class="footer_widget">
						<div class="footer_logo">
							<?php
								if ( $footer_logo ) {
									echo '<a href="'.esc_url( $siteUrl ).'">';
									?>
										<img src="<?php echo $footer_logo?>" alt="footer logo">
									<?php
									echo '</a>';
								}
							?>
						</div>

						<?php
							// Social profiles
							$social_opt = ararat_opt('ararat_social_profile_toggle');
							if ( $social_opt == true ) {
								$social_items = ararat_opt('ararat_social_profiles');
								if( is_array( $social_items ) && count( $social_items ) > 0 ){
									echo '<ul class="social_links">';
										foreach ($social_items as $value) {
											echo '<li><a href="'. esc_url($value['social_url']) .'"> <i class="'. esc_attr($value['social_icon']) .'"></i> </a></li>';
										}
									echo '</ul>';
								}          
							}  
						?>
					</div>
				</div>
				<div class="col-xl-9 col-12 col-md-8">
					<?php
						if ( ararat_opt('ararat_footer_reservation_toggle') ) {
							get_template_part( 'templates/footer', 'reservation' );
						}
					?>
					<div class="row">
						<div class="col-xl-8 col-12 col-md-12">
							<div class="row">
								<?php
									if ( ararat_opt('ararat_footer_widget_toggle') ) {
										get_template_part( 'templates/footer', 'widgets' );
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>