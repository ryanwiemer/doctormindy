<?php
/**
 * No Jump Links Template
 */
get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content_no_jump_links', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
