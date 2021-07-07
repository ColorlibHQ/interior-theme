<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Interior
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

	$interior_reservation_title     = !empty( interior_opt( 'interior_reservation_title' ) ) ? interior_opt( 'interior_reservation_title' ) : '';
	$interior_reservation_sub_title = !empty( interior_opt( 'interior_reservation_sub_title' ) ) ? interior_opt( 'interior_reservation_sub_title' ) : '';
	$interior_reservation_btn_text  = !empty( interior_opt( 'interior_reservation_btn_text' ) ) ? interior_opt( 'interior_reservation_btn_text' ) : '';
	$interior_reservation_btn_url	  = !empty( interior_opt( 'interior_reservation_btn_url' ) ) ? interior_opt( 'interior_reservation_btn_url' ) : '';
	?>
	<div class="footer_header d-flex justify-content-between">
		<div class="footer_header_left">
			<h3><?php echo esc_html( $interior_reservation_title )?></h3>
			<p><?php echo esc_html( $interior_reservation_sub_title )?></p>
		</div>
		<div class="footer_btn">
			<a href="<?php echo esc_url( $interior_reservation_btn_url )?>" class="boxed-btn2"><?php echo esc_html( $interior_reservation_btn_text )?></a>
		</div>
	</div>