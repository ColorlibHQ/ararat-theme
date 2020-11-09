<?php 		
	// Copyright text
	$url = 'https://colorlib.com/';
	$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'ararat' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
	$copyRight = !empty( ararat_opt( 'ararat_footer_copyright_text' ) ) ? ararat_opt( 'ararat_footer_copyright_text' ) : $copyText;
	?>
	<div class="footer_copy_right">
		<p><?php echo wp_kses_post( $copyRight ); ?> </p>
	</div>