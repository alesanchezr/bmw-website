<?php

class ThemeConfig{
    
    public $version = 1.2;
    
    public function __construct(){

        if(!defined('WP_DEBUG') || WP_DEBUG == false)
        {
            ini_set('display_errors', false);
            error_reporting(0);
        }
        
        add_action( 'after_setup_theme', [$this,'register_menus'], 10 );
        add_filter( 'body_class', [$this,'add_slug_body_class'], 11 );
        
        //advanced custome fields configuration
        $this->advancedCustomFieldsSync();
        
        add_filter('wpas_fill_content', function($data){
			
			//if its not already set
			//if(isset($_GET['foo'])) $data['foo2'] = $_GET['foo'];
			
			return $data;
		},10,2);
    }
    
    //Add the page slug to the <body> tag classes
    function add_slug_body_class( $classes ) {
        global $post;
        if (isset($post)) {
            $classes[] = $post->post_type . '-' . $post->post_name;
        }
        return $classes;
    }
    
    //register the wordpress menues to be managed int the admin
    public function register_menus(){
        register_nav_menus( array( 
            //'header' => 'Header menu', 
        ));
    }
    
    function is_login_page() {
        return in_array($GLOBALS['pagenow'], array('wp-login.php', 'wp-register.php'));
    } 
    
    //sync the advanced custom post types
    function advancedCustomFieldsSync(){
        add_filter('acf/settings/save_json', function() {
        	return get_stylesheet_directory() . '/acf-json';
        });
        
        add_filter('acf/settings/load_json', function($paths) {
        	$paths = array(get_template_directory() . '/acf-json');
        
        	if(is_child_theme())
        	{
        		$paths[] = get_stylesheet_directory() . '/acf-json';
        	}
        
        	return $paths;
        });
    }
    
}