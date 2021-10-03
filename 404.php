<?php
get_header();
?>

<main id="main" class="site-main" role="main">
    <section class="error-404 not-found">
        <div class="page-content">
            <p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'bytesrefresh' ); ?></p>
            <?php get_search_form(); ?>
        </div>
    </section>
</main>
<?php
	get_footer();
?>