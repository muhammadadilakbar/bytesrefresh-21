<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		}
		else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
		if ( 'post' === get_post_type() ) // WP_Post class has a $post_type data member
		{
			echo '<div class="entry-meta">';
				bytesrefresh_posted_on();
				bytesrefresh_categories_list();
			echo '</div>';
		}
		?>
	</header>
	<?php if ( '' !== get_the_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
	<?php endif; ?>
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				/* translators: %s: Post title. */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bytesrefresh' ),
				get_the_title()
			)
		);
		?>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
