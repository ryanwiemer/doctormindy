<?php
/**
 * The template used for displaying page content in page.php (clean up needed)
 */
?>

<article <?php post_class(); ?>>
<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
    <h2 class="hero__title"><?php the_field('hero_title'); ?></h2>
    <h3 class="hero__subtitle"><?php the_field('hero_subtitle'); ?></h3>
    <?php if( have_rows('hero_cta') ): ?>
    <?php while ( have_rows('hero_cta') ) : the_row();?>
    <a class="hero__cta" href="<?php the_sub_field('hero_cta_link');?>"><?php the_sub_field('hero_cta_text');?></a>
    <?php endwhile; else : endif; ?>

    <?php if( have_rows('sections') ): ?>
    <?php $i=1; ?>
    <?php while ( have_rows('sections') ) : the_row();?>
    <ul class="hero__links">
      <li><a href="#section-<?php echo $i++;?>"><?php the_sub_field('section_label');?></a></li>
    </ul>
    <?php endwhile; else : endif; ?>
</div>


    <?php if( have_rows('sections') ): ?>
    <?php $i=1; ?>
    <?php while ( have_rows('sections') ) : the_row();?>
<section id="section-<?php echo $i++;?>">
    <?php the_sub_field('section_content');?>
</section>
    <?php endwhile; else : endif; ?>

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
