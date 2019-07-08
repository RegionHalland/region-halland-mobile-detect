<?php

	/**
	 * @package Region Halland Mobile Detect
	 */
	/*
	Plugin Name: Region Halland Mobile Detect
	Description: Front-end-plugin som returnerar aktuell enhet
	Version: 1.1.0
	Author: Roland Hydén
	License: GPL-3.0
	Text Domain: regionhalland
	*/

	// Returnera namn på webbplatsen
	function get_region_halland_device_type() {
		
		// Variabel för sökväg
    	define('MOBILE_DETECT_DIR', __DIR__);

    	// Inkludera klassen Mobile_Detect, nuvarande version = 2.8.33
    	require_once(MOBILE_DETECT_DIR . '/incs/Mobile_Detect.php');

    	// Instansiera klassen
		$detect = new Mobile_Detect;
		
		// Variabel med aktuell enhet, dvs tablet, phone eller computer
		$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');
		
		// Returnera aktuell enhet
		return $deviceType;

	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_mobile_detect_activate() {
		// Ingenting just nu
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_mobile_detect_deactivate() {
		// Ingenting just nu
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_mobile_detect_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_mobile_detect_deactivate');

?>