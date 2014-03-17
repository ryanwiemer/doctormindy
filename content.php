<?php
/**
 * The template used for displaying page content in page.php (clean up needed)
 */
?>

<article <?php post_class(); ?>>
<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
    <h2 class="hero-title"><?php the_field('hero_title'); ?></h2>
    <h3 class="hero-subtitle"><?php the_field('hero_subtitle'); ?></h3>
</div>

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'doctormindy' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</article>
