<?php
/**

 * Plugin Name: WP Secure HTTP Headers
 * Plugin URI: https://eastsidecode.com
 * Description: This plugin add secure HTTP headers to your WordPress site
 * Version: 1.1
 * Author: EastSide Code
 * Author URI: http://eastsidecode.com
 * License: GPL12

 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class esCodeSecureHeaders {

	function __construct() {
		
		/* Do nothing here */
		
		add_action('send_headers', function() {

		    // Enforce the use of HTTPS, if SSL is turned on

		    if (is_ssl()) {
		    	header("Strict-Transport-Security: max-age=31536000; includeSubDomains");
		    }

		    // Prevent Clickjacking
		    header("X-Frame-Options: SAMEORIGIN");

		    // Block Access If XSS Attack Is Suspected
		    header("X-XSS-Protection: 1; mode=block");

		    // Prevent MIME-Type Sniffing
		    header("X-Content-Type-Options: nosniff");
		    
		    // Referrer Policy
		    header("Referrer-Policy: no-referrer-when-downgrade");

		}, 1);


	} // end construct

} // end class


// initialise the class with an object
$esCodeSecureHeadersInit = new esCodeSecureHeaders();