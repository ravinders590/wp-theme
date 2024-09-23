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
        
        <section class="banner-top-section c-hero">
                <figure class="c-hero__background aos-init aos-animate" style="background-image: url(<?php echo !empty(wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0]) ? wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0] : ''?>);" data-aos="fade">
                </figure>
                <header class="c-hero__header">
                    <h1>
                        <span class="t-red t-red__top aos-init aos-animate" data-aos="fade-up"></span>
                        <span data-aos="fade-right" class="aos-init aos-animate">/</span><span data-aos="fade-up" class="aos-init aos-animate"><?php the_title();?></span><span class="t-red t-red__bottom aos-init aos-animate" data-aos="fade-down"></span>
                    </h1>
                </header>
            </section>
 
           <div class="project-video">
                <?php the_field('project_video'); ?>
            </div>
            <div class="project-details">
                <div class="project-description">
                    <?php the_content(); ?>
                </div>
                <div class="project-photos">
                    <figure class="c-filmography__item--poster o-layout__column aos-init aos-animate" data-aos="fade-down">
                        <div class="o-entry__image"><img width="984" height="1230" src="<?php echo the_field('project_poster_image'); ?>" alt="" decoding="async" fetchpriority="high" data-has-transparency="false" data-dominant-color="564d77" style="--dominant-color: #564d77;"></div>
                        <!--//o-entry__image -->
                    </figure>
                </div>
            </div>
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