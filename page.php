<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>

   <?php 
   

   if (is_front_page()){
   	$slideshow_name =  'main_slider_l';
	   include(locate_template('templates/partial-slideshow.php')); 
   }



   ?> 
  <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
