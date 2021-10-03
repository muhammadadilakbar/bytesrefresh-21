<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area">
	<?php
	if ( have_comments() ) :
		?>
		<p class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'bytesrefresh' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'bytesrefresh'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</p>
		<ol class="comment-list">
			<?php
				wp_list_comments(
					array(
						'avatar_size' => 50,
						'style'       => 'ol',
						'short_ping'  => true,
						'reply_text'  => __( 'Reply', 'bytesrefresh' ),
					)
				);
			?>
		</ol>
		<?php
		the_comments_pagination(
			array(
				'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'bytesrefresh' ) . '</span>',
				'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'bytesrefresh' ) . '</span>',
			)
		);

	endif; // Check for have_comments().

	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'bytesrefresh' ); ?></p>
		<?php
	endif;
	comment_form();
	?>
</div><!-- #comments -->
