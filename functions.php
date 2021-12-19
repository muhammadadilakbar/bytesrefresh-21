<?php
function bytesrefresh_setup() {
    load_theme_textdomain( 'bytesrefresh' );
    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    $GLOBALS['content_width'] = 604;

    register_nav_menus(
        array(
            'top' => __( 'Top Menu', 'bytesrefresh' ),
        )
    );

    add_theme_support(
        'html5', array( 'comment-form', 'comment-list', 'gallery', 'caption', 'script', 'style', 'navigation-widgets' )
    );

    add_theme_support(
        'post-formats', array( 'aside', 'image', 'video', 'quote', 'link', 'gallery', 'audio', )
    );

    add_theme_support( 'responsive-embeds' );
}

add_action( 'after_setup_theme', 'bytesrefresh_setup' );

function bytesrefresh_widgets_init() {
    register_sidebar(
        array(
            'name'          => __( 'Blog Sidebar', 'bytesrefresh' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'bytesrefresh' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<div class="widget-title">',
            'after_title'   => '</div>',
        )
    );
}

add_action( 'widgets_init', 'bytesrefresh_widgets_init' );

function bytesrefresh_scripts()
{
    wp_enqueue_style( 'bytesrefresh-style', get_stylesheet_uri(), array(), '20210929' );
    wp_enqueue_script( 'bytesrefresh-main-navigation-script', get_template_directory_uri() . '/assets/js/navigation.js', array(), '1.0.0', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
    {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'bytesrefresh_scripts' );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for content images.
 *
 * @param string $sizes A source size value for use in a 'sizes' attribute.
 * @param array  $size  Image size. Accepts an array of width and height
 *                      values in pixels (in that order).
 * @return string A source size value for use in a content image 'sizes' attribute.
 */
function bytesrefresh_content_image_sizes_attr( $sizes, $size ) {
    $sizes = '(max-width: 560px) 90vw, (max-width: 959px) 504px, 604px';
    return $sizes;
}
add_filter( 'wp_calculate_image_sizes', 'bytesrefresh_content_image_sizes_attr', 10, 2 );

/**
 * Add custom image sizes attribute to enhance responsive image functionality
 * for post thumbnails.
 *
 * @param array $attr       Attributes for the image markup.
 * @param int   $attachment Image attachment ID.
 * @param array $size       Registered image size or flat array of height and width dimensions.
 * @return array The filtered attributes for the image markup.
 */
function bytesrefresh_post_thumbnail_sizes_attr( $attr, $attachment, $size )
{
    $attr['sizes'] = '(max-width: 560px) 90vw, (max-width: 959px) 504px, 604px';
    return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'bytesrefresh_post_thumbnail_sizes_attr', 10, 3 );

function bytesrefresh_unique_id( $prefix = '' )
{
    return wp_unique_id( $prefix );
}

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/icon-functions.php' );

?>