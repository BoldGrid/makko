<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-makko';
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Enable sticky footer and nav and attribution links.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-nav'] = true;

	// Disable background image.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'disabled';

	/**
	 * Custom Configs
	 */
	// Disable navbar search form
	$boldgrid_framework_configs['template']['navbar-search-form'] = false;

	// Assign Locations for Generic Header.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[widget]boldgrid-widget-1', '[menu]secondary', '[action]makko_columns' ),
		'8' => array( '[menu]tertiary' ),
		'11' => array( '[widget]boldgrid-widget-2' ),
	);

	//* Assign Locations for Generic Footer.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[widget]boldgrid-widget-3' ),
		'5' => array( '[action]boldgrid_display_contact_block' ),
		'9' => array( '[action]boldgrid_display_attribution_links' ),
		'10' => array( '[menu]social' ),
		'11' => array( '[menu]footer_center' ),
	);

	// Specify container classes.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-footer'] = 'container-fluid';

	/**
	 * Customizer Configs
	 */
	// Added two more colors to palette
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#1e1e1e',
			'colors' => array(
				'#cc0274',
				'#4fbad9',
				'#0f1011',
				'#777575',
				'#01342f',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#1c1719',
			'colors' => array(
				'#b23a2a',
				'#c7943e',
				'#46454b',
				'#2f292b',
				'#9b8a5e',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#1f2b3d',
			'colors' => array(
				'#e7c993',
				'#70abaf',
				'#1e3944',
				'#082c37',
				'#066370',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#2b2320',
			'colors' => array(
				'#c57061',
				'#cdab91',
				'#0c1329',
				'#0a1523',
				'#2f4458',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#111111',
			'colors' => array(
				'#4f3556',
				'#73a8be',
				'#371828',
				'#3a2a39',
				'#7f7d68',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#232323',
			'colors' => array(
				'#9b8c69',
				'#bfa963',
				'#373737',
				'#848484',
				'#dcd0c0',
			),
		)
	);

		// Override customizer options per subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Marketing':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Design':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Music':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][5]['default'] = true;
			break;
		// Default
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

	// Text Contrast Colors
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Enable Typography Controls
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Typography Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Josefin Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'uppercase';

	// Typography Alternate Headings
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_line_height'] = 190;
	
	// Typography Navigation
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Hind';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'uppercase';

	// Typography Body
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 180;

	// Typography Tagline Classes
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font';
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h5 alt-font';
	
	// Button Classes
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-pill, .btn-color-1, .btn-flat';
	$boldgrid_framework_configs['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-pill, .btn-color-2, .btn-flat';

	// Social Media Icons
	$boldgrid_framework_configs['social-icons']['type'] = 'icon';
	$boldgrid_framework_configs['social-icons']['size'] = '2x';

	// Menu Locations
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Primary Menu";
	$boldgrid_framework_configs['menu']['locations']['secondary'] = "Secondary Menu, Above Header";
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = "Tertiary Menu, Below Header";
	$boldgrid_framework_configs['menu']['locations']['social'] = "Footer Right";
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = "Footer Left";
	
	// Name Widget Areas
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer';

	// Typography Relationships
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1.entry-title'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 2,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h2.comments-title'] = array(
		'type' => 'headings',
		'round' => 'ceil',
		'amount' => 1.4,
	);	
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.call-to-action h2'] = array(
		'type' => 'headings',
		'round' => 'ceil',
		'amount' => 2.6,
	);

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
//*
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Hind';
	$controls['logo_font_size']['default'] = 20;
	$controls['logo_margin_top']['default'] = 20;
	$controls['logo_margin_bottom']['default'] = 0;
	$controls['logo_text_decoration_hover']['default'] = 'none';

	// Controls above will override framework defaults
	return $controls;
}
//*
add_filter( 'kirki/fields', 'filter_logo_controls' );

/**
 * Creates additional column sizes in the header template.
 */
function makko_columns() { ?>
	<div class="row">
		<div class="col-sm-6">
			<?php do_action( 'boldgrid_site_identity' ); ?>
		</div>
		<div class="col-sm-6">
				<?php do_action( 'boldgrid_primary_navigation' ); ?>
		</div>
	</div>
<?php }

add_action( 'makko_columns', 'makko_columns' );
