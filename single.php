<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
get_header();
?>
    <?php
    if ( have_posts() ):
        // Yep, we have posts, so let's loop through them.
        while ( have_posts() ) : the_post();
        ?>
        
        Hello
        <?php
        endwhile;

      else :
        // No, we don't have any posts, so maybe we display a nice message
        echo "<p class='no-posts'>" . __( "Sorry, there are no posts at this time." ) . "</p>";
      endif;
      show_next_post();
    ?>
    
<?php
       
           
            
        ?>
 
      
<?php get_footer(); ?>