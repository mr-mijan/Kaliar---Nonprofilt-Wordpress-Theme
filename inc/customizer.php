<?php
if ( class_exists( 'Kirki' ) ) {
new \Kirki\Panel(
	'panel_id',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Theme Option', 'kaliar' ),
		'description' => esc_html__( 'The Theme Option', 'kaliar' ),
	]
);

// Header Section
new \Kirki\Section(
	'kaliar_header_section',
	[
		'title'       => esc_html__( 'Header Section', 'kaliar' ),
		// 'description' => esc_html__( 'Description.', 'kaliar' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'radio_buttonset_setting_header_top',
		'label'       => esc_html__( 'Top Bar', 'kirki' ),
		'section'     => 'kaliar_header_section',
		'default'     => 'on',
		'priority'    => 10,
		'choices'     => [
			'on'   => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disabe', 'kirki' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'Email_info',
		'label'    => esc_html__( 'Email', 'kirki' ),
		'section'  => 'kaliar_header_section',
		'default'  => esc_html__( 'info@example.com ', 'kirki' ),
		'priority' => 10,
		'partial_refresh'    => [
			'topbar_section' => [
				'selector'        => '.header-top .header-top-wrp .info a',
				'render_callback' => function() {
					return get_theme_mod('topbar_section');
				},
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.header-top .header-top-wrp .info a',
				'function' => 'html',
			)
		),
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'number_info',
		'label'    => esc_html__( 'Number', 'kirki' ),
		'section'  => 'kaliar_header_section',
		'default'  => esc_html__( '+208-6666-0112', 'kirki' ),
		'priority' => 10,
	]
);

// Top bar Social

// Facebook
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'checkbox_social',
		'label'       => esc_html__( 'Facebook', 'kirki' ),
		'section'     => 'kaliar_header_section',
		'default'     => true,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'facebook_url_setting',
		'section'  => 'kaliar_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'checkbox_social',
				'operator' => '!==',
				'value'    => false,
			]
		],
	]
);

// Twitter
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'checkbox_social_twitter',
		'label'       => esc_html__( 'Twitter', 'kirki' ),
		'section'     => 'kaliar_header_section',
		'default'     => true,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'twitter_url_setting',
		'section'  => 'kaliar_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'checkbox_social_twitter',
				'operator' => '!==',
				'value'    => false,
			]
		],
	]
);

// linedin
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'checkbox_social_linkedin',
		'label'       => esc_html__( 'Linedin', 'kirki' ),
		'section'     => 'kaliar_header_section',
		'default'     => true,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'linkedin_url_setting',
		'section'  => 'kaliar_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'checkbox_social_linkedin',
				'operator' => '!==',
				'value'    => false,
			]
		],
	]
);

// Pinterest
new \Kirki\Field\Checkbox(
	[
		'settings'    => 'checkbox_social_pinterest',
		'label'       => esc_html__( 'Pinterest', 'kirki' ),
		'section'     => 'kaliar_header_section',
		'default'     => true,
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'pinterest_url_setting',
		'section'  => 'kaliar_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'checkbox_social_pinterest',
				'operator' => '!==',
				'value'    => false,
			]
		],
	]
);

// Donate now Button
new \Kirki\Field\Radio_Buttonset(
	[
		'settings'    => 'header_button',
		'label'       => esc_html__( 'Button', 'kirki' ),
		'section'     => 'kaliar_header_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Enable', 'kirki' ),
			'off' => esc_html__( 'Disable', 'kirki' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'header_button_text',
		'label'    => esc_html__( 'Button Text', 'kirki' ),
		'section'  => 'kaliar_header_section',
		'default'  => esc_html__( 'Donate Now', 'kirki' ),
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'header_button',
				'operator' => '!==',
				'value'    => 'off',
			]
		],
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'header_button_url',
		'label'    => esc_html__( 'Button Url', 'kirki' ),
		'section'  => 'kaliar_header_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'active_callback' => [
			[
				'setting'  => 'header_button',
				'operator' => '!==',
				'value'    => 'off',
			]
		],
	]
);
// 404 Page Template
new \Kirki\Section(
	'kaliar_404_section',
	[
		'title'       => esc_html__( '404 Page', 'kaliar' ),
		// 'description' => esc_html__( 'Description.', 'kaliar' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'kaliar_404_text',
		'label'       => esc_html__( '404 Text', 'kirki' ),
		'default'     => esc_html__( 'Whoops! This Page got Lost in converstion', 'kirki' ),
		'section'     => 'kaliar_404_section',
        'partial_refresh'    => [
			'404_section' => [
				'selector'        => '.error__item h2',
				'render_callback' => function() {
					return get_theme_mod('404_section');
				},
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.error__item h2',
				'function' => 'html',
			)
		)
	]
);


// Footer Section
new \Kirki\Section(
	'kaliar_footer_section',
	[
		'title'       => esc_html__( 'Footer Section', 'kaliar' ),
		// 'description' => esc_html__( 'Description.', 'kaliar' ),
		'panel'       => 'panel_id',
		'priority'    => 160,
	]
);
new \Kirki\Field\Textarea(
	[
		'settings'    => 'kaliar_footer_copyright',
		'label'       => esc_html__( 'Copyright Text', 'kirki' ),
		'section'     => 'kaliar_footer_section',
        'partial_refresh'    => [
			'footer_copyright' => [
				'selector'        => '.footer__copytext p',
				'render_callback' => function() {
					return get_theme_mod('footer_copyright');
				},
			],
		],
		'transport' => 'postMessage',
		'js_vars'   => array(
			array(
				'element'  => '.footer__copytext p',
				'function' => 'html',
			)
		)
	]
);

}