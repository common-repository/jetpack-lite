=== Jetpack Lite ===
Contributors: samuelaguilera
Tags: Jetpack, WordPress.com, statistics, stats, views, shortlinks, wp.me
Requires at least: 3.6
Tested up to: 4.9.6
Stable tag: 3.0.3
License: GPL2

Prevents Jetpack from loading any modules except for Stats and WP.me Shortlinks modules. Jetpack is required!

== Description ==

A lot of people, like me, miss the [WordPress.com Stats](http://wordpress.org/extend/plugins/stats/) standalone plugin and only wants this part of Jetpack.

This plugins completely **prevent all modules in Jetpack from being loaded except for Stats and WP.me Shortlinks modules, this means that all other modules are not loaded by Jetpack in any way, saving memory and resources** in your WordPress and leaving Jetpack only with the same features of [WordPress.com Stats](http://wordpress.org/extend/plugins/stats/) plugin that sadly was discontinued long time ago and replaced by Jetpack by WordPress.com

Current version of the plugin it's pretty simple, it just uses a few filters provided by Jetpack, so it's totally fail safe. Also nothing is saved to the database, so deactivating the plugin is enough to revert it effects.

GDPR Notice: The author of Jetpack Lite doesn't collect ANY data. Also no data is saved in your site by Jetpack Lite.

= Features =

* Automatically prevents Jetpack from loading any modules except for Stats and WP.me Shortlinks, saving system resources and cleaning the interface for modules that you don't want to use.
* Disables Jetpack's Ads (aka "just in time messages").

= Requirements =

* Jetpack.
* WordPress version required by Jetpack.

== Installation ==

1. Install and activate Jetpack Lite (if you're upgrading from 2.x, upgrade Jetpack Lite **before** activating Jetpack in the next steps).
2. If you don't have it already, install [Jetpack](http://wordpress.org/plugins/jetpack/), activate and connect it to WordPress.com if you're prompted to do it.
3. That's it. You're ready to go!

== Frequently Asked Questions ==

= Is this plugin an official release from Automattic or WordPress.com? =

NO. Jepack Lite **IS NOT an official** plugin by Automattic or WordPress.com

= Why Jetpack Lite 3.x needs Jetpack to be installed? =

When I created Jetpack Lite years ago, I did it as fork of Jetpack **only because no other method to do it was available at that moment**.

Fortunately, since some time Jetpack can be trimmed down without the need of making a fork. That's why I changed the way Jetpack Lite does the work. In fact, now, Jetpack Lite doesn't use any resource, it simply says to Jetpack to only load the Stats and Shorlinks modules, so the other modules won't load or consume any resource in your WordPress.

This way is much better, because now you don't need to wait for me to update a whole new plugin when a new Jetpack gets published.

So now when Jetpack core or Stats and Shortlink modules are improved by Automattic, you'll get that just by upgrading Jetpack while keeping the reduction of Jetpack resources usage.

== Screenshots ==

1. Jetpack modules screen after activating Jetpack Lite 3.x

== Changelog ==

= 3.0.3 =

* Coding standards and some code cleanup.
* Added filter to turn off Jetpack Ads. 

= 3.0.2 =

* Added admin notice if Jetpack is not present, to make even more clear that from now on you must install Jetpack too.

= 3.0.1 =

* Disabled check for active Jetpack due to seems that some people have issues with this (with no logical explain for the moment...)

= 3.0 =

* Totally changed the plugin code philosophy. Now this's a Jetpack addon and not a standalone plugin. Now you must install Jetpack to use Jetpack Lite.

= 2.3.4.1 =

* Fixed PHP Fatal error caused by class.jetpack-heartbeat.php described here: http://plugins.trac.wordpress.org/changeset/753642

= 2.3.4 =

* Based on Jetpack by WordPress.com 2.3.4. BIG (recommended) update! This adds several improvements to stats and connection, including a debugger to debug connection issues.
* Moved new Debugger to Tools menu (because as you know in Jetpack Lite there's not Jetpack menu).

= 2.1.2 =

* Based on Jetpack by WordPress.com 2.1.2
* Upgrading to this base allows to view stats from apps (problem described here: http://wordpress.org/support/topic/iphone-wordpress-app-wants-stats-ver-182 )
* Maintained stats widget from Jetpack per user request http://wordpress.org/support/topic/most-viewed-posts-and-pages-widget

= 1.7 =

* Based on Jetpack by WordPress.com 1.7
* Fixed problem with Akismet submenu. If Akismet is present Jetpack Lite will add standard Akismet access (the same provided with Akismet when no Jetpack is present).

= 1.2.1.1 =
* Fixed main file. Uploaded a test one by error. Sorry!

= 1.2.1 =
* Based on Jetpack by WordPress.com 1.2.1
* Changed version number to match with the original plugin to make more easy to identify modified original version.
* Removed or changed Automattic cosmetic stuff (removed Automattic logo, changed support links...) to make even more clear that this is not an official Automattic plugin and is not supported by them.
* Removed Jetpack menu and moved site stats access to dashboard menu and Jetpack Lite settings to settings menu.

= 1.0 =
* Initial release based on Jetpack by WordPress.com 1.1.3

== Upgrade Notice ==

= 2.3.4.1 =

* Fixed PHP Fatal error caused by class.jetpack-heartbeat.php

= 2.3.4 =
Recommended upgrade. It's a major upgrade from previous one, including improvements of stats module, connection, and other fixes.

= 2.1.2 =
Recommended upgrade. Upgrading to this version allows to view stats from native mobile apps.

= 3.0 =
WARNING! This version requires Jetpack installed and activated to work. Jetpack Lite is not a standalone plugin anymore.

= 3.0.1 =
WARNING! Since 3.x version, this plugin requires Jetpack installed and activated to work. Jetpack Lite is not a standalone plugin anymore.

= 3.0.2 =
Added admin notice if Jetpack is not present, to make even more clear that from now on you must install Jetpack too.

