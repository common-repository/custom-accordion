=== Custom Accordion ===
Contributors: imajade
Tags: accordion, custom accordion, responsive accordion
Requires at least: 5.0
Tested up to: 6.4.3
Stable tag: 1.3.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A custom accordion shortcode for WordPress that allows users to create accordion dropdowns in posts, pages, and widgets.

== Description ==

The Custom Accordion plugin allows you to easily create accordions in your WordPress posts, pages, and widget areas. Simply use the [ca-accordion] and [ca-accordion-item title="Your Title Here"]<p>Your Content Here<p>[/ca-accordion-item][/ca-accordion] shortcodes to create accordions.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/custom-accordion` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the [ca-accordion] and [ca-accordion-item title="Your Title Here"]<p>Your Content Here<p>[/ca-accordion-item][/ca-accordion] shortcodes to create accordions.

== Frequently Asked Questions ==

= Can I use HTML inside the accordion content? =

Yes, HTML can be used within the content of each accordion item.

= Is there a limit to the number of accordion items I can add? =

No, you can add as many accordion items as you want.

== Screenshots ==

1. Screenshot 1.
2. Screenshot 2.

== Changelog ==

= 1.3.0 =
* Added GPL-2.0+ license declaration in the plugin header.
* Added a check to prevent direct file access to the plugin.
* Changed prefixes of functions, shortcodes, and CSS classes to "ca_" for uniqueness and to avoid conflicts.
* Updated shortcode names to use the "ca-" prefix.
* Updated CSS selectors to match the new class names with the "ca-" prefix.

= 1.2.0 =
* Added support for accordion shortcodes in 'text' widgets.
* Optimized code to conditionally load assets only when accordion shortcodes are present in posts, pages, or widgets.
* Refactored code for better readability and maintainability.

= 1.1.1 =
* Fixed stable tag mismatch issue.
* Ensured consistent versioning across all plugin files.

= 1.1.0 =
* Performance improvement: Conditionally load styles and scripts only on pages with accordions.
* Security fix: Escaped title attribute in shortcode output to prevent XSS attacks.
* Other minor bug fixes and improvements.

= 1.0 =
* Initial release.

== Upgrade Notice ==

= 1.3.0 =
* Important: Users should update to this version for GPL compliance, security improvements, and to avoid potential conflicts with other plugins.

== Arbitrary section ==

The Custom Accordion plugin is optimized for performance by conditionally loading its assets. This helps prevent unnecessary HTTP requests on pages where the accordion functionality is not needed. The plugin now supports accordion shortcodes in 'text' widgets, making it even more versatile.

= Advanced Customization =

For developers looking to further customize the accordions, the plugin provides CSS classes that can be easily targeted for custom styles. You can add your custom CSS in your theme's stylesheet to change the look and feel of the accordion to match your site's design.

= Troubleshooting =

If you encounter any issues with the display of accordions on your site, first ensure that there are no JavaScript conflicts with other plugins by disabling other plugins one by one to identify any conflicts.

= Future Enhancements =

Future updates may include new features such as:
- Multiple accordion styles to choose from.
- Integration with the WordPress Customizer for adjusting styles.

= Feedback and Support =

For feedback, support, and suggestions, please visit the support forums on the WordPress plugin directory page or the GitHub repository page.

Remember, if you enjoy using the Custom Accordion plugin and find it useful, rate it and leave a review on the WordPress plugin directory page. Your feedback is appreciated and it helps to improve the plugin!

== Sample Shortcode Usage ==

[ca-accordion]
[ca-accordion-item title="Section 1"]
<p>This is the first section of the accordion.<p>
[/ca-accordion-item]
[ca-accordion-item title="Section 2"]
<p>This is the second section of the accordion.<p>
[/ca-accordion-item]
[/ca-accordion]