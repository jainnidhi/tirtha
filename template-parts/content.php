<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tirtha
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('front-page-post'); ?>>
	<header class="entry-header">
		<?php
			if( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			if ( is_single() ) {
				the_title( '<h2 class="entry-title">', '</h2>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php tirtha_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'tirtha' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tirtha' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php if(is_home()) { echo '<a class="more-link" href="' . esc_url( get_permalink() ) . '">' . __('Read More >>', 'tirtha') . '</a>'; } ?>
        <?php if(!is_home()) { ?>
		<?php tirtha_entry_footer();
                             } ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
