<?php

	wp_enqueue_script( 'slider', plugins_url( '/js/slick.js' , __FILE__ ), array( 'jquery' ) );
	wp_enqueue_script( 'defaultview', plugins_url( '/js/onoffice_defaultview.js' , __FILE__ ), array( 'jquery' ) );	
	
	wp_enqueue_style( 'slider', plugins_url( '/css/slick.css' , __FILE__ ) );
	wp_enqueue_style( 'slider-theme', plugins_url( '/css/slick-theme.css' , __FILE__ ) );
	wp_enqueue_style( 'defaultview', plugins_url( '/css/onoffice_defaultview.css' , __FILE__ ) );

?>