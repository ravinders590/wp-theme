<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

<section class="c-home__hero">
	<div class="c-hero-video__container header-banner">
		<video onclick="this.play();" class="c-video__media" autoplay="" preload="auto" muted="" playsinline="" loop="">	
			<source type="video/mp4" src="<?php echo get_field('banner_image_or_video')['url'];?>">
		</video>
	</div>
</section>
<section class="latest-video" >
	<div class="container">
		<header class="c-home__header">
			<h2>Latest Releases</h2>
		</header>
		<?php echo do_shortcode('[latestPost]');?>
		
	</div>
</section>
<section class="latest-video showreels" >
	<div class="container">
		<header class="c-home__header">
			<h2>Our Reel</h2>
		</header>
	</div>
	<div class="video-background">
		<div class="video-show-reals">
			<?php
			// Check rows exists.
			if( have_rows('latest_videos') ):

				// Loop through rows.
				while( have_rows('latest_videos') ) : the_row();
				$title = get_sub_field('title');
				$videos = get_sub_field('videos');
				?>
				<div>
					<video class="c-media__single c-hero__video--media js-video-play" poster="<?php echo get_template_directory_uri();?>/assets/images/poster.png" preload="auto" playsinline="">	
					<source type="video/mp4" src="<?php echo $videos['url'];?>">
					</video>
					<header class="o-entry__header">
						<h5><?php echo $title;?></h5>
						<div class="o-entry__button js-playbutton">
							<span>View Reel</span>
						</div>
					</header>
				</div>
				<?php
			endwhile;

			// No value.
			else :
				// Do something...
			endif;
			?>
			
		</div>
		
	</div>
</section>
<?php
get_footer();
?>
