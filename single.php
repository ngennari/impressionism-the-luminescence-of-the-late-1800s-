<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Impressionism:_the_luminescence_of_the_late_1800\'s
 */

get_header();
?> 


  <?php while ( have_posts() ) : the_post(); ?> 

  	

  	<div class="middle">



  	<div class="side-image">

<img src="<?php the_field('side_image'); ?>" alt="">

  	</div>   







  	<div class="main-image">

  	  <?php the_post_thumbnail(); ?>

  	</div>

  	  

  	  <div class="content"> 


  	<h2><?php the_title(); ?></h2>
  	<!-- <h3>Camille Pissaro</h3>
  	<h4>Oil on canvas</h4> -->

  	<?php the_content(); ?>

  	<div class="buttons">
      <?php next_post_link('%link'); ?>
  	  <?php previous_post_link('%link'); ?>

  	</div>



  	</div>
  	</div> 
			

		<?php 
		endwhile; // End of the loop.
		?>

	

<?php

get_footer();