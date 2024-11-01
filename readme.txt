=== WP Secure HTTP Headers ===
Contributors: louis
Tags: security, http headers
Requires at least: 4.3
Tested up to: 5.2
Stable tag: 3.6

License: GPLv2 or later

WordPress plugin to add secure headers to your website.

== Description ==

This WordPress Plugin add secure headers to you WordPress site. 

The Following Headers are included:
- Strict-Transport-Security: Enforces SSL if your website is using SSL (which it should be)
- X-Frame-Options: Prevents Clickjacking
- X-XSS-Protection: Prevents XSS attacks
- X-Content-Type-Options: set to 'nosniff to prevent MIME-type sniffing
- Referrer-Policy: set to 'no-referrer-when-downgrade'

* No setup required!

== Installation ==

Upload the "wp-secure-http-headers" folder to your wp-content/plugins directory, then Activate it. 

== Changelog ==

= 1.0 =
*Release Date - 15 June 2019*
* Initial release
