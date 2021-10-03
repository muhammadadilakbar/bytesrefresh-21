<?php
    get_header();
?>

<main id="main" class="site-main" role="main">
    <?php
    if ( have_posts() ) :
        // Start the Loop.
        while ( have_posts() ) :
            the_post();
            /**
             * Run the loop for the search to output the results.
             * If you want to overload this in a child theme then include a file
             * called content-search.php and that will be used instead.
             */
            get_template_part( 'template-parts/post/content', 'excerpt' );
        endwhile; // End the loop.
        the_posts_pagination(
            array(
                'prev_text'          => 'Newer posts<span class="screen-reader-text">' . __( 'Newer posts page', 'bytesrefresh' ) . '</span>',
                'next_text'          => 'Older posts<span class="screen-reader-text">' . __( 'Older posts page', 'bytesrefresh' ) . '</span>',
                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'bytesrefresh' ) . ' </span>',
            )
        );
    else :
        ?>
        <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'bytesrefresh' ); ?></p>
        <?php
            get_search_form();
    endif;
    ?>
</main>
<?php
	get_footer();
?>