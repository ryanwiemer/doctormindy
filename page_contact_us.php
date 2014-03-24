<?php
/**
 * Template Name: Contact Us
 */
get_header(); ?>

<div class="content--contact">
  <div class="inner--contact">
    <h2 class="hero__title"><?php echo get_the_title(); ?></h2>
    <?php the_field('contact_form'); ?>
    <?php get_footer(); ?>
  </div>
</div><!-- .content -->
