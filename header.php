<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cricket
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>

<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php bloginfo('name'); ?> <?php if(wp_title('', false)) { echo '|'; } else { echo '| India';} ?> <?php wp_title(''); ?></title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800&amp;family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,700&amp;family=Dancing+Script:wght@400;500;600;700&amp;family=Montserrat:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@200;300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;family=Teko:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>

	<?php wp_head();?>
	
</head>

<body>

<header class="float-start w-100">
<div class="top-new-heda d-none d-lg-inline-block w-100">
	<div class="container">
	<div class="row row-cols-2 align-items-center">
		<div class="col">
			<ul class="left-oiu">
			<li>
				<a href="#">
				<img alt="tn" src="<?php echo get_template_directory_uri();?>/assets/images/wcw.png"/>
				</a>
				<a href="#" class="ms-4">
				<img alt="tn" src="<?php echo get_template_directory_uri();?>/assets/images/wpl-logo.svg"/>
				</a>
			</li>
			</ul>
		</div>
		<div class="col d-grid justify-content-end">
			<ul class="top-socli d-flex align-items-center">
			<li>
				Follow Us
			</li>
			<li class="ms-3">
				<a href="#" class="btn"> <i class="fab fa-facebook-f"></i> </a>
				<a href="#" class="btn"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
</svg> </a>
				<a href="#" class="btn"> <i class="fab fa-google"></i> </a>
			</li>
			
			</ul>
		</div>
	</div>
	</div>
</div>
	<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="index-2.html">
		<img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="logo"/>
		</a>
		
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<?php
		$args = array(
			'menu_class'=>'navbar-nav mx-auto mb-2 mb-lg-0',
			'menu_id'=>'',
			'container'=>'ul',
			'add_li_class'  => 'your-class-name1 your-class-name-2'
		);
		
		wp_nav_menu($args) ; ?>
		<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
	
		
			<li class="nav-item">
			<a class="nav-link" href="about.html">About</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="matches.html">Matches</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="videos.html">Videos</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="stats.html">Stats</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="blog.html">News</a>
			</li>

			<li class="nav-item">
			<a class="nav-link" href="teams.html">Teams</a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="standings.html"> Standings </a>
			</li>
			<li class="nav-item">
			<a class="nav-link" href="shop.html">Shop</a>
			</li>

		

		
			
		</ul>
		
		</div>
		<div class="right-top">
		<ul class="d-flex align-items-center">
			<li class="dropdown position-relative">
			<button type="button"  class="btn cart-btn-links" data-bs-toggle="dropdown" data-bs-auto-close="outside">
				<span>2</span>
				<span class="m-0 ion-0">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/2832495.png" alt="pnm">
				</span>
			</button>

			<ul class="dropdown-menu shadow cart-dropdown-ne" >
				<li>
				<div class="comon-cart-ps">
					<div class="d-flex align-items-center justify-content-between">
						<a href="#" class="products-sm-pic">
							<figure>
								<img src="<?php echo get_template_directory_uri();?>/assets/images/botsman1.png" alt="bn"/>
							</figure>
						</a>
						<div class="cart-ps-details">
							<a href="#" class="titel-crt-products">
							Junior Shoes
							</a>
							<h6> $10.52 </h6>
						</div>
						<a href="#" class="close-crt"> <i class="fas fa-close"></i> </a>
					</div>
				</div>
				<div class="comon-cart-ps">
					<div class="d-flex align-items-center justify-content-between">
					<a href="#" class="products-sm-pic">
						<figure>
							<img src="<?php echo get_template_directory_uri();?>/assets/images/ballsk.png" alt="bn"/>
						</figure>
					</a>
					<div class="cart-ps-details">
						<a href="#" class="titel-crt-products">
							SE Wooden
						</a>
						<h6> $20.52 </h6>
					</div>
					<a href="#" class="close-crt"> <i class="fas fa-close"></i> </a>
					</div>
				</div>
				</li>
				<li>
				<div class="sub-total-products d-flex align-items-center justify-content-between">
					<h6> Subtotal:  </h6>
					<h4> $30.52 </h4>
				</div>
				</li>
				<li>
				<a href="cart.html" class="btn cart-drop-bn"> View Cart </a>
				</li>
				<li>
				<a href="checkout.html" class="btn check-drop-bn"> Check out </a>
				</li>
				
			</ul>


			</li>
			<li>
			<button  data-bs-toggle="modal" data-bs-target="#loginModal"  class="btn login-btn-links">
				<span class="m-0 oipn">
				<img src="<?php echo get_template_directory_uri();?>/assets/images/747376.png" alt="pnm">
				</span>
			</button>

			
			
			</li>
			<li>

			
			<button type="button" class="btn bar-btn-links" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightmobile">
				<span>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
					<path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5v-3zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5v-3zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5v-3zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5v-3z"/>
				</svg>
				</span>
			</button>
			</li>
		</ul>
		</div>
	</div>
	</nav>
</header>
