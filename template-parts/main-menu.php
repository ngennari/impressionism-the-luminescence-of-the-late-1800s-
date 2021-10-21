<?php
/**
 * Template part for displaying the main menu
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package impressionism-the-luminescence-of-the-late-1800s
 */
?>

<nav class="overlay fade hide">
     <div class="overlay-content">


<ul> 


	<?php

		$menu_args = array (
			'post_type' => 'post',
			'posts_per_page' => -1
		);

		$query_menu = new WP_Query( $menu_args );

		if ( $query_menu->have_posts() ) :
			while ( $query_menu->have_posts() ) :
				$query_menu->the_post();

	?>

	<?php 

	/* The following code (an HTML list item with WordPress functions) will be added for each of your posts */

	/* This example assumes that your navigation is built on an unordered list, so there is a <ul> tag on line 11, the closing </ul> tag is on line 55 and your <li> is in the dynamic/loop area (below) */

	/* Anything else needed for the menu display (headings, sections) should be placed before the <ul> or after the closing </ul> */

	/* The following code will output an <li> tag for each of your posts. Depending on what's in your prototype, you might have an image or text or maybe both. This example illustrates both options (with the heading in an <h4>. Edit this to match your prototype HTML. Each post in the menu will use this same format. */

	?> 



	<li>
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(); ?>
		</a>
	</li>

	<?php
	
		endwhile;
		wp_reset_postdata();
		endif;

	?>

           </ul>
      </div>
 </nav>
