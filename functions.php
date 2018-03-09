<?php

// Contents
// 001 Add scripts and stylesheets
// 002 WordPress Titles
// 003 Custom settings
// 004 Create Custom Global Settings
// 005 Support Featured Images
// 006 Menues


// 001 Add scripts and stylesheets
function startwordpress_scripts() {
	// CSS
	wp_enqueue_style( 'design', get_template_directory_uri() . '/css/design.css' );
	wp_enqueue_style( 'lightbox', get_template_directory_uri() . '/lightbox2/dist/css/lightbox.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.min.css' );
	// JavaScript
	wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/lightbox2/dist/js/lightbox-plus-jquery.min.js', false );
}
add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

// 002 WordPress Titles
add_theme_support( 'title-tag' );

// 003 Custom settings
function custom_settings_add_menu() {
  add_menu_page( 'Custom Settings', 'Custom Settings', 'manage_options', 'custom-settings', 'custom_settings_page', null, 99 );
}
add_action( 'admin_menu', 'custom_settings_add_menu' );

// 004 Create Custom Global Settings
function custom_settings_page() { ?>
  <div class="wrap">
    <h1>Custom Settings</h1>
    <form method="post" action="options.php">
       <?php
           settings_fields( 'section' );
           do_settings_sections( 'theme-options' );      
           submit_button(); 
       ?>          
    </form>
  </div>
<?php }

// Twitter
function setting_twitter() { ?>
  <input type="text" name="twitter" id="twitter" value="<?php echo get_option( 'twitter' ); ?>" />
<?php }

// Facebook
function setting_facebook() { ?>
  <input type="text" name="facebook" id="facebook" value="<?php echo get_option( 'facebook' ); ?>" />
<?php }

// Instagram
function setting_instagram() { ?>
  <input type="text" name="instagram" id="instagram" value="<?php echo get_option( 'instagram' ); ?>" />
<?php }

function custom_settings_page_setup() {
  add_settings_section( 'section', 'Social Media', null, 'theme-options' );
  add_settings_field( 'twitter', 'Twitter URL', 'setting_twitter', 'theme-options', 'section' );
  add_settings_field( 'facebook', 'Facebook URL', 'setting_facebook', 'theme-options', 'section' );
  add_settings_field( 'instagram', 'Instagram URL', 'setting_instagram', 'theme-options', 'section' );

  register_setting('section', 'twitter');
  register_setting('section', 'facebook');
  register_setting('section', 'instagram');
}
add_action( 'admin_init', 'custom_settings_page_setup' );

// 005 Support Featured Images
add_theme_support( 'post-thumbnails' );

// 006 Menues
function register_menues() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
  register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
}
add_action( 'init', 'register_menues' );;

// 007 Featured Images
function insert_featured_image_if_set() { 
	if(has_post_thumbnail()){ ?>

		<a  class="title-image-link" 
    href="<?php the_post_thumbnail_url(); ?>" 
    data-lightbox="title-image"
    data-title="My caption">
    <img    class="title-image" 
            src="<?php the_post_thumbnail_url(); ?>" 
            alt="title-image" 
            width="100%"/>
		</a>   

	<?php }
 }



