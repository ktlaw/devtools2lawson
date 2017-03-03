<?php
function my_theme_enqueue_styles() {
		$parent_style = 'twentythirteen-style'; //This is twentythirteen-style for the Twenty Thirteen theme.
		wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( $parent_style),
			wp_get_theme()->get('Version')
		);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


?>

<?php
function wpb_add_google_fonts() {

	wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Averia+Serif+Libre:400,700|Lato:400,400i', false );
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );
?>

<?php
// remove default headers
function twentythirteen_child_remove_default_headers () {
	unregister_default_headers (array('circle', 'diamond', 'star'));
}
add_action('after_setup_theme', 'twentythirteen_child_remove_default_headers', 12);
?>

<?php 
// add new header images
function twentythirteen_child_add_headers () {
	register_default_headers ( array(
		'header1' => array(
					'url' => '%2$s/images/headers/purpleflower.png',
					'thumbnail_url' => '%2$s/images/headers/purpleflower.png',
					'description' => __( 'Header 1', 'twentythirteen')
					), 
		'header2' => array(
					'url' => '%2$s/images/headers/purplerock.png',
					'thumbnail_url' => '%2$s/images/headers/purplerock.png',
					'description' => __( 'Header 2', 'twentythirteen')
					), 
		'header3' => array(
					'url' => '%2$s/images/headers/purpleclouds.png',
					'thumbnail_url' => '%2$s/images/headers/purpleclouds.png',
		 			'description' => __( 'Header 3', 'twentythirteen')
					) 
		)); //end of array
}//end of main function
add_action ('after_setup_theme', 'twentythirteen_child_add_headers');

?>