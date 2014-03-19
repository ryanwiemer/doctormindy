<?php
/**
 * Index template
 */

get_header(); ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					get_template_part( 'content', get_post_format() );
				?>

			<?php endwhile; ?>

		<?php else : ?>

			<?php get_template_part( 'content' ); ?>

		<?php endif; ?>
</div><!-- .content -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
