<?php
/**
 * Page template
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
        <ul class="section-nav__links">
          <div class="section-nav__bar"></div>
          <?php if( have_rows('sections') ): ?>
          <?php $i=1; ?>
          <?php while ( have_rows('sections') ) : the_row();?>
          <li>
            <a href="#section-<?php echo $i++;?>"><?php the_sub_field('section_label');?></a>
          </li>
          <?php endwhile; else : endif; ?>
        </ul>
      </div>


      <div class="content">
        <?php get_sidebar(); ?>
        <div class="inner">
          <?php if( have_rows('sections') ): ?>
          <?php $i=1; ?>
          <?php while ( have_rows('sections') ) : the_row();?>
          <section class="section" id="section-<?php echo $i++;?>">
              <?php the_sub_field('section_content');?>
          </section>
          <?php endwhile; else : endif; ?>
        </div> <!-- inner -->
        <?php get_footer(); ?>
