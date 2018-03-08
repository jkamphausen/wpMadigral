<h5>Sie befinden sich hier: > Home</h5>

<h1><?php the_title(); ?></h1>

<a  class="title-image-link" 
    href="<?php the_post_thumbnail_url(); ?>" 
    data-lightbox="title-image"
    data-title="My caption">
    <img    class="title-image" 
            src="<?php the_post_thumbnail_url(); ?>" 
            alt="title-image" 
            width="100%"/>
</a>   

<?php the_content(); ?>

<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>