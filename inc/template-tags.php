<?php
function bytesrefresh_posted_on()
{
	// Get the author name; wrap it in a link.
	$byline = sprintf(
		__( 'by %s', 'bytesrefresh' ),
		'<span class="author-name">
			<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . get_the_author() . '</a>
		</span>'
	);
	// Finally, let's write all of this to the page.
	echo '' . bytesrefresh_time_link() . '<span class="byline"> ' . $byline . '</span>';
}

function bytesrefresh_time_link()
{
	$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

	$time_string = sprintf(
		$time_string,
		get_the_date( DATE_W3C ),
		get_the_date(),
	);

	return sprintf(
		'Posted on <a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>'
	);
}

function bytesrefresh_categories_list()
{
	// Get Categories for posts.
	$categories_list = get_the_category_list( ", " );
	printf( ' | Filed under: <span class="screen-reader-text">%s</span>%s', __( 'Categories', 'twentyseventeen' ), $categories_list );

}