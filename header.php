<!DOCTYPE html>
<html <?php language_attributes(); ?>> 
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#main"><?php _e( 'Skip to content', 'bytesrefresh' ); ?></a>
<div id="page" class="site">
    <div id="primary" class="content-area">
        <header class="site-header">
            <?php if ( is_front_page() ) : ?>
                <h1 class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </h1>
            <?php else : ?>
                <p class="site-title">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                </p>
            <?php endif; ?>
        <?php if ( has_nav_menu( 'top' ) ) : ?>
                <div class="navigation-top">
                    <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'bytesrefresh' ); ?>">
                        <button class="menu-toggle" aria-controls="top-menu" aria-expanded="false">
                            <?php
                            echo bytesrefresh_get_svg( array( 'icon' => 'bars' ) );
                            echo bytesrefresh_get_svg( array( 'icon' => 'close' ) );
                            _e( 'Menu', 'bytesrefresh' );
                            ?>
                        </button>
                        <?php wp_nav_menu( array( 'theme_location' => 'top', 'menu_id' => 'top-menu', ) ); ?>
                    </nav>
                </div>
        <?php endif; ?>

        <?php if( is_archive() ) :
                the_archive_title( '<h1 class="page-title">', '</h1>' );
            endif; ?>
        
        <?php if( is_404() ) : ?>
            <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'bytesrefresh' ); ?></h1>
        <?php endif; ?>
        
        <?php if( is_search() ) :
                if ( have_posts() ) : ?>
                    <h1 class="page-title">
                    <?php
                    printf( __( 'Search Results for: %s', 'bytesrefresh' ), '<span>' . get_search_query() . '</span>' );
                    ?>
                    </h1>
            <?php else : ?>
                    <h1 class="page-title"><?php _e( 'Nothing Found', 'bytesrefresh' ); ?></h1>
            <?php endif; ?>
        <?php endif; ?>
        </header>