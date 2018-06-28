<?php

	$contactFields = [
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'text', 
		    'label' => 'Phone Number',
		    'name' => 'phone_number',
			'description' => 'Company official phone number'
		]
	];
	$apiFields = [
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'text', 
		    'label' => 'Google Maps',
		    'name' => 'google_maps_api_key',
			'description' => 'Generate your google maps key'
		]
	];
	$gravityForms = getGravityForms();
	$formFields = [
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'select', 
		    'label' => 'Request Quote form',
		    'name' => 'request_quote_form_id',
		    'description' => 'Use: request_quote_form_id',
			'options' => $gravityForms,
		],
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'select', 
		    'label' => 'Contact Us form',
		    'name' => 'contactus_form_id',
		    'description' => 'Use: contactus_form_id',
			'options' => $gravityForms,
		],
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'select', 
		    'label' => 'Single Package Form',
		    'name' => 'single_package_form_id',
		    'description' => 'Use: single_package_form_id',
			'options' => $gravityForms,
		],
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'select', 
		    'label' => 'Single Planners form',
		    'name' => 'single_planners_form_id',
		    'description' => 'Use: single_planners_form_id',
			'options' => $gravityForms,
		],
    	[ // In this example we have a select field to enable/disable mantainance mode
		    'type' => 'select', 
		    'label' => 'Newsletter',
		    'name' => 'newsletter_signup_form',
		    'description' => 'Use: newsletter_signup_form',
			'options' => $gravityForms,
		]
	];

    $settings = new \WPAS\Settings\WPASThemeSettingsBuilder([
        'general' => [
			'description' => 'Best Miami Weddings Options',
			'menu_slug' => 'ps_theme_options',
			'menu_title' => 'Theme Settings'
        ],
		'settingsID' => 'wp_theme_settings',
		'settingFields' => array('wp_theme_settings_title'), 
		'tabs' => [
			'apis' => ['text' => 'APIs', 'dashicon' => 'dashicons-admin-page', 'tabFields' => $apiFields],
			'forms' => ['text' => 'Forms', 'dashicon' => 'dashicons-feedback', 'tabFields' => $formFields],
			'contact' => ['text' => 'Contact Info', 'dashicon' => 'dashicons-feedback', 'tabFields' => $contactFields],
		]
    ]);
    
    
    function getGravityForms(){
        $forms = GFAPI::get_forms();
        $options = [];
        foreach($forms as $f) $options[$f['id']] = $f['title'];
        return $options;
    }