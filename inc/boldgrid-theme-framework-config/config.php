<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-gridone';
	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';	
	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';

	// Custom Configs
	//* Select the Sticky Nav to use.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-nav'] = true;
	//* Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = 'generic'; // changed to 'generic'
	//* Disable navbar search form
	$boldgrid_framework_configs['template']['navbar-search-form'] = false;

	// Assign menus, widgets, and actions to locations in generic header and footer template.
	//* Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'6' => array( '[action]boldgrid_site_identity' ),
		'7' => array( '[action]boldgrid_primary_navigation' ),
		'8' => array( '[menu]secondary', '[menu]tertiary' ),
		//'9' => array( '[menu]social' ),
		'10' => array( '[widget]boldgrid-widget-2' ),
	);

	//* Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		// '1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[menu]footer_center' ),
		'9' => array( '[widget]boldgrid-widget-3','[action]boldgrid_display_attribution_links' ),
		'10' => array( '[menu]social' ),
		
	);

	/**
	 * Customizer Configs
	 */
	//* Added two more colors to palette
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#4fbad9',
				'#cc0274',
				'#0f1011',
				'#777575',
				'#01342f',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#c7943e',
				'#b23a2a',
				'#46454b',
				'#2f292b',
				'#9b8a5e',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#70abaf',
				'#e7c993',
				'#1e3944',
				'#082c37',
				'#066370',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#cdab91',
				'#c57061',
				'#0c1329',
				'#0a1523',
				'#2f4458',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#73a8be',
				'#2c1d33',
				'#371828',
				'#3a2a39',
				'#7f7d68',
			),
		)
	);

	//* Social Media Icons.
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';
	$boldgrid_framework_configs['social-icons']['size'] = '4x';
	$boldgrid_framework_configs['menu']['default-menus']['social']['items'] = array(
		array (
			'menu-item-title' =>  __( 'Pinterest' ),
			'menu-item-classes' => 'pinterest',
			'menu-item-url' => '//pinterest.com',
			'menu-item-status' => 'publish'
		),
		array (
			'menu-item-title' =>  __( 'Instagram' ),
			'menu-item-classes' => 'instagram',
			'menu-item-url' => '//instagr.am',
			'menu-item-status' => 'publish',
		),
		array (
			'menu-item-title' =>  __( 'Flickr' ),
			'menu-item-classes' => 'flickr',
			'menu-item-url' => '//flickr.com',
			'menu-item-status' => 'publish'
		),
		array (
			'menu-item-title' =>  __( 'Dribbble' ),
			'menu-item-classes' => 'dribbble',
			'menu-item-url' => '//dribbble.com',
			'menu-item-status' => 'publish',
		),
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	//* Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Josefin Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 33;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	//* Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_line_height'] = 190;
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';

	//* Typography Navigation.
		$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'hind';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 12;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	//* Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 180;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h2.title-main'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 6.1,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1.entry-title'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.2,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = '2x';

	//* Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Secondary Menu, Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Top Right, Above Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Top of Footer";
	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

	//* Set the header's container class.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';

	//* Set the footer's container class.
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';

	// Background.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
//*
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Hind';
	$controls['logo_font_size']['default'] = 18;
	$controls['logo_margin_top']['default'] = 20;
	$controls['logo_margin_bottom']['default'] = 0;
	$controls['logo_text_decoration_hover']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
//*
add_filter( 'kirki/fields', 'filter_logo_controls' );
