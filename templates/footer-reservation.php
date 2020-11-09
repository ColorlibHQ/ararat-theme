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

	$ararat_reservation_title     = !empty( ararat_opt( 'ararat_reservation_title' ) ) ? ararat_opt( 'ararat_reservation_title' ) : '';
	$ararat_reservation_sub_title = !empty( ararat_opt( 'ararat_reservation_sub_title' ) ) ? ararat_opt( 'ararat_reservation_sub_title' ) : '';
	$ararat_reservation_btn_text  = !empty( ararat_opt( 'ararat_reservation_btn_text' ) ) ? ararat_opt( 'ararat_reservation_btn_text' ) : '';
	$ararat_reservation_btn_url	  = !empty( ararat_opt( 'ararat_reservation_btn_url' ) ) ? ararat_opt( 'ararat_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $ararat_reservation_title )?></h3>
			<p><?php echo esc_html( $ararat_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $ararat_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $ararat_reservation_btn_text )?></a>
		</div>
	</div>