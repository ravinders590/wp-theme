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
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../../../stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@700;800&amp;family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;0,9..40,900;0,9..40,1000;1,9..40,700&amp;family=Dancing+Script:wght@400;500;600;700&amp;family=Montserrat:wght@200;300;400;500;600;700;800;900&amp;family=Open+Sans:wght@400;500;600;700&amp;family=Oswald:wght@300;400;500;600;700&amp;family=Poppins:wght@200;300;400;500;600;700;800;900&amp;family=Roboto:wght@300;400;500;700;900&amp;family=Teko:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>

	<link href="css/all.min.css" rel="stylesheet">
	<link href="css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.min.css" />
	<link rel="stylesheet" href="css/owl.theme.default.min.css"/>
	<link rel="stylesheet" href="css/animate.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.min.css">
	
	
</head>

<body>
