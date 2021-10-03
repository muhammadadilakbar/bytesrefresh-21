<?php
get_header(); ?>
    <main id="main" class="site-main" role="main">
        <?php
        while ( have_posts() ) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                </header><!-- .entry-header -->
                <div class="entry-content">
                    <?php
                        the_content();
                        ?>
                </div><!-- .entry-content -->
            </article><!-- #post-<?php the_ID(); ?> -->
            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
        endwhile; // End the loop.
        ?>
    </main>
<?php
	get_footer();
?>