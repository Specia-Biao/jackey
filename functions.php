<?php
/**
 * @package Wordpress
 * @since 1.0
 * 
 * wordpress version 4.8 or later.
 */


/**
 * set up theme defaluts and register support for various wordpress features.
 */

 function jackey_setup(){


     load_theme_textdomain('jackey');

     add_theme_support( 'automatic-feed-links' );

     add_theme_support('title_tag');

     add_theme_support( 'post-thumbnails' );

     register_nav_menus( array(
		'primary'    => __( '主菜单', 'jackey' ),
		'top' => __( '顶部菜单', 'jackey' ),
		'footer' => __( '底部菜单', 'jackey' ),
		'link' => __( '友情链接', 'jackey' ),
		'join' => __( '加盟菜单', 'jackey' ),
		'news' => __( '新闻菜单', 'jackey' ),
    ) );
    
    add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
    ) );
    
    add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'audio',
    ) );
    
    add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
    ) );
    
    add_theme_support( 'custom-background', apply_filters( 'custom_background_args', array(
		'default-attachment' => 'fixed',
	) ) );

	//移除原生相册，添加自定义图集解析数组
     remove_shortcode('gallery', 'gallery_shortcode');
     add_shortcode('gallery', 'img_shortcode');
     //添加页面的摘要
     add_post_type_support('page', array('excerpt'));
 }

 add_action( 'after_setup_theme', 'jackey_setup' );



 function widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area', 'twentyfifteen' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'twentyfifteen' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'widgets_init' );



/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/add_editer.php';

?>
