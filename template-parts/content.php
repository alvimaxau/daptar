<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Daptar
 */
$margin[] = '';
if (  is_home() || is_archive()  ) :
	$margin[] = 'col-md-12 col-sm-12 col-xs-12 ';
endif;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php daptar_posted_on(); ?>
			<hr>
		</div>
		<!-- END ENTRY META -->
		<?php
		endif; ?>
	</header>
	<!-- END ENTRY HEADER -->

	<div class="entry-content">
		<?php daptar_post_thumbnail(); ?>
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'daptar' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'daptar' ),
				'after'  => '</div>',
			) );
		?>
	</div>
	<!-- END ENTRY CONTENT -->

	<footer class="entry-footer">
		<?php daptar_entry_footer(); ?>
	</footer>
	<!-- END ENTRY FOOTER -->
</article>
<div class="clear"></div>
<!-- END POST ID-<?php the_ID(); ?> -->