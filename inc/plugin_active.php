<?php 
require_once get_template_directory(). '/inc/class-tgm-plugin-activation.php';

function kaliar_activation(){
    $plugins = array(
        array(
            'name' => __('Kirki Customizer Framework', 'kaliar'),
            'slug' => 'kirki',
            'required' => true,
        ),

        array(
            'name' => __('MetForm', 'kaliar'),
            'slug' => 'metform',
            'required' => true,
        ),
        
        array(
            'name' => __('One Click Demo Import', 'kaliar'),
            'slug' => 'one-click-demo-import',
            'required' => true,
        ),

        array(
            'name' => __('Advanced Custom Fields', 'kaliar'),
            'slug' => 'advanced-custom-fields',
            'required' => true,
        ),

        array(
            'name' => __('Give - Donation Plugin', 'kaliar'),
            'slug' => 'give',
            'required' => true,
        ),

        array(
            'name' => __('Elementor', 'kaliar'),
            'slug' => 'elementor',
            'required' => true,
        )
    );
    $config = array(
        'id'            => 'kaliar_plugin_active',
        'menu'          => 'tgmpa-install-plugins',
        'parent_slug'   => 'themes.php',
        'has_notices'   => true,
    );

    tgmpa ($plugins, $config);

}
add_action('tgmpa_register', 'kaliar_activation');