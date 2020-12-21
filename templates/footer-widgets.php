<?php 
// Block direct access
if( !defined( 'ABSPATH' ) ){
	exit( 'Direct script access denied.' );
}
/**
 * @Packge 	   : Barber
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

?>

<div class="row">
	<?php 
	// Footer widget 1
	if( is_active_sidebar( 'footer-1' ) ){
		dynamic_sidebar( 'footer-1' );
	}
	
	// Footer widget 2
	if( is_active_sidebar( 'footer-2' ) ){
		echo '<div class="col-xl-3 col-md-6 col-lg-3">';
			dynamic_sidebar( 'footer-2' );
		echo '</div>';
	}

	// Footer widget 3
	if( is_active_sidebar( 'footer-3' ) ){
		dynamic_sidebar( 'footer-3' );
	}
	
	// Footer widget 4
	if( is_active_sidebar( 'footer-4' ) ){
		dynamic_sidebar( 'footer-4' );
	}
	?>

</div>