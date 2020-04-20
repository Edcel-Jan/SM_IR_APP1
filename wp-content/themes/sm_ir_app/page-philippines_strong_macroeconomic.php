<?php 

/*
Template Name: Philippines Strong Macro Economic

*/

 ?>

<?php get_header(); ?>
	<div class="container">
		<?php 
			// The Query
			$the_query = new WP_Query( array( 'category_name' => 'philippines' ) );
			 
			// The Loop

			if ( $the_query->have_posts() ) {
			   
			    while ( $the_query->have_posts() ) {
			        echo $the_query->the_post();
			        echo '<h4>'. get_the_title().'</h4>';
			        echo get_the_content();
			    }
			
			} else {
				echo '<p>No Post Found</p>';
			}
			/* Restore original Post Data */
			wp_reset_postdata();
		 ?>
	</div>

<?php get_footer() ?>