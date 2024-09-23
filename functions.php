<?php
/**
 * Astra functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
  add_action('astra_footer','custom_header' );
  do_action( 'custom_footer' );

function theme_style(){
	// wp_register_style('style-css', get_template_directory_uri() . '/style.css', false);
    // wp_enqueue_style('style-css');

}
add_action('wp_head','theme_style');

function theme_script(){
	// wp_register_script('jquery-js', 'https://code.jquery.com/jquery-3.7.1.js', false);
    // wp_enqueue_script('jquery-js');
}
add_action('wp_footer','theme_script');

/* Add Multiple sidebar 
*/
if ( function_exists('register_sidebar') ) {
	$sidebar1 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 1', 'Dazzzler' ),	
		'id'=>'about_footer'
	);	
	$sidebar2 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 2', 'Dazzzler' ),	
		'id'=>'instagram'
	);
    $sidebar3 = array(
		'before_widget' => '<div class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',        
		'name'=>__( 'My sidebar 3', 'Dazzzler' ),	
		'id'=>'address'
	);
	
	register_sidebar($sidebar1);
	register_sidebar($sidebar2);
    register_sidebar($sidebar3);
}
/*
function showLatestpost(){
	$args = array(
		'post_type' => 'post' ,
		'orderby' => 'date' ,
		'order' => 'DESC' ,
		'posts_per_page' => -1,
		'category'         => 10,
	  ); 
	  $posts = get_posts($args);
	  ?>
	 <div class="c-page__content o-layout__block"> 
	  <?php
	  foreach ($posts as $post){
		?>
		
		
		<?php
	  }
	  ?>
	 </div>  
	  <?php
		
}
add_shortcode('latestPost','showLatestpost');
*/
// function get_custom_post_type_template($single_template) {
// 	if ( in_category('read') ) {
// 		$single_template = dirname( __FILE__ ) . '/post-type-template.php';
// 	 }
// return $single_template;
// }

// add_filter( "single_template", "get_custom_post_type_template" ) ;
/*
function show_next_post(){
	error_reporting(0);
	$posts = get_posts('numberposts=-1&order=ASC&orderby=post_title');
	//   $pagelist = get_pages();
	$pages = array();
	foreach ($posts as $page) {
	$pages[] += $page->ID;
	}
	$current = array_search(get_the_ID(), $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];

	
	
	?>
	<nav id="spinvfx-filmography-nav" class="c-filmography__nav">
		<ul class="c-filmography__nav--list <?php echo ($current === 0 )? 'empty-data' : ''; ?>">   
			<?php if (!empty($prevID)) {
				?>
				<li class="c-filmography__nav--item c-filmography__nav--previous aos-init aos-animate" data-aos="fade-up">
					<div class="c-filmography__nav--content" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0]?>)">
							
						<a href="<?php echo get_permalink($prevID); ?>" class="o-entry__link">
							<div class="o-entry__meta">
								<span class="right-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></span>
								<span class="o-entry__label">Previous Project</span>
								<span class="o-entry__title"><?php echo get_the_title($post->ID); ?></span>
							</div>
						</a>
					</div>
				</li>
				<?php
			}
			if (!empty($nextID)) {
			?>
			
						
			<li class="c-filmography__nav--item c-filmography__nav--next aos-init aos-animate" data-aos="fade-down">	
																	
				<div class="c-filmography__nav--content" style="background-image: url(<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ))[0]?>)">
					<a href="<?php echo get_permalink($nextID); ?>" class="o-entry__link">
						<div class="o-entry__meta">
							<span class="left-arrow"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
							<span class="o-entry__label">Next Project</span>
							<span class="o-entry__title"><?php echo get_the_title($post->ID); ?></span>
						</div>
					</a>
				</div>
			</li>
			<?php } ?>
		</ul>
	</nav>
	
	<?php
}*/
