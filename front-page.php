<?php
/**
 * The template for displaying the static home page
 *
 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Impressionism:_the_luminescence_of_the_late_1800\'s
 */

get_header();
?> 



	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post(); ?>



			

			<div class="image"> 

<?php the_post_thumbnail(); ?>

</div> 

<div class="image-2">

<img src="<?php the_field('image_2'); ?>" alt="">

</div> 
  

  <div class="home-content">

<h3>See the light...</h3>

<p>The late 1860s was the birth of <strong>Impressionism,</strong> a unique art movement where artists such as the infamous <strong>Claude Monet</strong> went from painting in the studio to painting outside. This new method allowed artists to create more realistic paintings of nature and people as light and shadows shifted in real time. Experience this iconic art movement by going through our gallery of Impressionist paintings...</p>

<!-- <a href="post.html">START</a>  -->

<?php
   // get the link to the most recent post
   $homelink_query = new WP_Query('post_type=post&posts_per_page=1');
   while ($homelink_query->have_posts()) : $homelink_query->the_post();
   ?>
   <a class="button" href="<?php the_permalink() ?>">START</a>
   <?php
   endwhile;
   wp_reset_postdata();
   ?>

</div>
	<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
