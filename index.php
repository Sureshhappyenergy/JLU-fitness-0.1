<?php get_header( ) ; ?>

<?php if ( have_posts( ) ) :
   while ( have_posts( ) ) : the_post ();   ?>
   <?php get_template_part( 'content', get_post_format() ); ?>

  <?php endwhile;
 endif; ?>
<h1>This is my Index....</h1>

<?php  get_footer( ) ; ?>
