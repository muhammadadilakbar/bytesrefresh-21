<?php
get_header();
?>

<main id="main" class="site-main" role="main">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) :
            the_post();
            get_template_part( 'template-parts/post/content', get_post_format() );
        endwhile;
        the_posts_pagination(
            array(
                'prev_text'          => 'Newer posts<span class="screen-reader-text">' . __( 'Newer posts page', 'bytesrefresh' ) . '</span>',
                'next_text'          => 'Older posts<span class="screen-reader-text">' . __( 'Older posts page', 'bytesrefresh' ) . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bytesrefresh' ) . ' </span>',
            )
        );
    else :
        get_template_part( 'template-parts/post/content', 'none' );
    endif;
    ?>
</main>
<?php
	get_footer();
?>

