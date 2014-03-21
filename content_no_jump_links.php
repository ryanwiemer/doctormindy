<?php
/**
 * The template used for pages that don't contain jump links
 */
?>

<div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
    <div class="hero__content">
      <h2 class="hero__title"><?php the_field('hero_title'); ?></h2>
      <h3 class="hero__subtitle"><?php the_field('hero_subtitle'); ?></h3>
      <?php if( have_rows('hero_cta') ): ?>
      <?php while ( have_rows('hero_cta') ) : the_row();?>
      <a class="hero__cta" href="<?php the_sub_field('hero_cta_page');?>"><?php the_sub_field('hero_cta_text');?></a>
      <?php endwhile; else : endif; ?>

      <!-- add a hero links here -->
    </div> <!-- hero__content -->
</div> <!-- hero -->

<div class="content">
  <div class="inner">
    <?php if( have_rows('sections_no_links') ): ?>
    <?php while ( have_rows('sections_no_links') ) : the_row();?>
<section class="section">
    <?php the_sub_field('section_content_no_links');?>
</section>
    <?php endwhile; else : endif; ?>
  </div> <!-- inner -->
