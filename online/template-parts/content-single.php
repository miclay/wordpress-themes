<?php
/**
 * The template for displaying single posts
 *
 * @package Poseidon
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php poseidon_post_image_single(); ?>

	<header class="entry-header">

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php poseidon_entry_meta(); ?>

	</header><!-- .entry-header -->

	<div class="entry-content clearfix">

		<?=function_exists('thumbs_rating_getlink') ? thumbs_rating_getlink() : ''?>

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'poseidon' ),
			'after'  => '</div>',
		) ); ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php poseidon_entry_tags(); ?>
		<?php poseidon_post_navigation(); ?>

	</footer><!-- .entry-footer -->

</article>
