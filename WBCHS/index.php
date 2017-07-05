<?php
  get_header();
  if (have_posts()):
    while(have_posts()) : the_post();
?>
<h2><a href="<?php the_premalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_post_thumbnail('banner-image');?>
<?php the_content(); ?>
<?php endwhile:
        else:
      echo <p> No content found</p>
 ?>
