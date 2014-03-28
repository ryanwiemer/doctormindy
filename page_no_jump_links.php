<?php
/**
 * Template Name: No Jump Links
 */
get_header(); ?>

  <div class="hero" style="background-image: url('<?php the_field('hero_image'); ?>');">
    <div class="hero__content">
      <h2 class="hero__title"><?php the_field('hero_title'); ?></h2>
      <?php if( have_rows('hero_subtitle') ): ?>
      <?php while ( have_rows('hero_subtitle') ) : the_row();?>
      <h3 class="hero__subtitle"><?php the_sub_field('hero_subtitle_text'); ?></h3>
      <?php endwhile; else : endif; ?>
      <?php if( have_rows('hero_cta') ): ?>
      <?php while ( have_rows('hero_cta') ) : the_row();?>
      <div class="hero__cta">
        <a href="<?php the_sub_field('hero_cta_page');?>"><?php the_sub_field('hero_cta_text');?></a>
      </div>
      <?php endwhile; else : endif; ?>
    </div> <!-- hero__content -->
  </div> <!-- hero -->

    <div class="section-nav">
      <ul class="section-nav__links--home">
        <?php if( have_rows('hero_links') ): ?>
        <?php while ( have_rows('hero_links') ) : the_row();?>
        <li><a href="<?php the_sub_field('hero_link_page');?>"><?php the_sub_field('hero_link_text');?></a></li>
        <?php endwhile; ?>
      </ul>
    </div>
  <?php endif; ?>

  <div class="content">
    <?php get_sidebar(); ?>
    <div class="inner">
      <?php if( have_rows('sections_no_links') ): ?>
      <?php while ( have_rows('sections_no_links') ) : the_row();?>
      <section class="section">
      <?php the_sub_field('section_content_no_links');?>
      </section>
      <?php endwhile; else : endif; ?>
    </div> <!-- inner -->
    <?php get_footer(); ?>
