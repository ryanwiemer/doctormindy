<?php
/**
 * The template used for displaying page content in page.php (clean up needed)
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

    </div> <!-- hero__content -->
</div> <!-- hero -->

<div class="container">
<ul class="section__links">
<?php if( have_rows('sections') ): ?>
<?php $i=1; ?>
<?php while ( have_rows('sections') ) : the_row();?>
  <li><a href="#section-<?php echo $i++;?>"><?php the_sub_field('section_label');?></a></li>
<?php endwhile; else : endif; ?>
</ul>
</div>

<div class="content">
  <div class="inner">
    <?php if( have_rows('sections') ): ?>
    <?php $i=1; ?>
    <?php while ( have_rows('sections') ) : the_row();?>
<section class="section" id="section-<?php echo $i++;?>">
    <?php the_sub_field('section_content');?>
</section>
    <?php endwhile; else : endif; ?>
  </div> <!-- inner -->
