<h1><?php the_title(); ?></h1>

<?php insert_featured_image_if_set() ?>

<?php the_content(); ?>

<!-- <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p> -->


<?php
/*
wp_nav_menu( array(
    'menu' => 'primary-menu'
    ,'container' => 'nav'
    ,'container_class' => 'subpages'
    ,'depth' => 1
    ,'walker' => new SH_Child_Only_Walker()
 ));

wp_nav_menu( array( 
    'theme_location' => 'primary-menu', 
    'container_class' => 'custom-menu-class' ) ); 
*/
?>