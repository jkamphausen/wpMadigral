<?php get_header(); ?>  
<?php get_sidebar(); ?>         
    <div id="mittlerespalte">
        <div id="innerespalte">
          <?php //get_template_part( 'content', get_post_format() ); ?>

          <?php 
          	// The Loop
						if ( have_posts() ) : while ( have_posts() ) : the_post();
			  			get_template_part( 'content', get_post_format() );
						endwhile; endif; 
					?>
        </div>
    </div>
<?php get_footer(); ?>


