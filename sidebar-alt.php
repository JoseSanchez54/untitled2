<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

// Output secondary sidebar structure.
genesis_markup(
	[
		'open'    => '<aside %s>' . genesis_sidebar_title( 'sidebar-alt' ),
		'context' => 'sidebar-secondary',
	]
);

/**
 * Fires immediately after the Secondary Sidebar opening markup.
 *
 * @since 1.0.0
 */
do_action( 'genesis_before_sidebar_alt_widget_area' );

/**
 * Fires to display the main Secondary Sidebar content.
 *
 * @since 1.2.0
 */
do_action( 'genesis_sidebar_alt' );

/**
 * Fires immediately before the Secondary Sidebar closing markup.
 *
 * @since 1.0.0
 */
do_action( 'genesis_after_sidebar_alt_widget_area' );

// End .sidebar-secondary.
genesis_markup(
	[
		'close'   => '</aside>',
		'context' => 'sidebar-secondary',
	]
);
