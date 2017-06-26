<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package boka
 */

$margin[] = 'padding-gap-6 overflow blog-link';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($margin); ?>>
	<header class="entry-header margin-bottom-20">
		<?php
		if ( is_single() ) {
			the_title( '<h3 class="entry-title text-capitalize margin-null">', '</h3>' );
		} else {
			the_title( '<h3 class="entry-title margin-null text-capitalize"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		}

		if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta  margin-top-10">
				<?php boka_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

		if(is_single()) :
			the_content();
		else:
			$excerpt = get_theme_mod('excerpt_lenght', '55');
			//return $excerpt;
			the_excerpt();
		endif;

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'boka' ),
			'after'  => '</div>',
		) );
		?>
		<div class="clearfix"></div>
	</div><!-- .entry-content -->

	<footer class="entry-footer overflow">
		<?php if(!is_single()) : ?>
		<div class="pull-left">
			<a href="<?php the_permalink(); ?>" class="btn btn-default margin-top-10"><?php esc_html_e( 'Continue Reading', 'boka' )?></a>
		</div>
		<?php endif; ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
