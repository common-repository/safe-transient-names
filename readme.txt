=== Safe Transient Names ===
Contributors: petercoughlin
Donate link: http://petercoughlin.com/donate/
Tags: transient, transient key, transient name, option name
Requires at least: 2.8
Tested up to: 3.5.1
Stable tag: trunk
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Provides a simple function for creating safe transient names.

== Description ==

Transient names can sometimes get truncated [without you realising](http://core.trac.wordpress.org/ticket/15058).

This plugin provides a simple function you can call which will ensure your transient names will always be short enough to avoid being truncated.

Usage: `<?php $safe_transient_name = get_safe_transient_name( 'your_transient_name_which_might_be_too_long' ); ?>`

== Installation ==

1. Upload the `safe-transient-names` folder to your `/wp-content/plugins/` directory.

2. Activate the "Safe Transient Names" plugin in your WordPress administration interface.

3. Use `<?php $safe_transient_name = get_safe_transient_name( 'your_transient_name' ); ?>` anywhere in your code to get a safe name for your transient.

== Frequently Asked Questions ==

= Reserved for FAQ =

Reserved for FAQ answer :-)

== Changelog ==

= 0.2 =
* Added filter to change value of limit

= 0.1 =
* Initial version

== Upgrade Notice ==

= 0.2 =
This version adds a filter to the value of the cut-off point.

= 0.1 =
First version.
