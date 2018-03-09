<h5>Sie befinden sich hier: > Home</h5>
<?php custom_breadcrumbs2(); ?>

<h1><?php the_title(); ?></h1>

<?php insert_featured_image_if_set() ?>

<?php the_content(); ?>

<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>


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