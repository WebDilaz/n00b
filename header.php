<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <section id="breadcrumb">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    WordPress
 * @subpackage n00b
 * @since      1.0
 * @version    1.0
 */

?><!DOCTYPE html>
<html xmlns="<?php echo N00B_PROTOCAL; ?>://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	<title><?php wp_title('�', true, 'right'); bloginfo('name'); ?></title>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php wp_title(); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta name="author" content="<?php bloginfo('name'); ?>">
	<link rel="icon" href="<?php //echo CHILD_URL; ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?>" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<?php wp_head(); // do not delete this line ?>
	
</head>

<body <?php body_class(); ?>>

<!-- START wrapper -->
<div class="wrapper">

<!-- START header -->
<header id="header" class="header" role="banner">

	<?php if (has_nav_menu('main-menu')) { ?>

		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-1-collapse">
						<span class="sr-only"><?php _e('Toggle navigation', 'n00b'); ?></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="logo">
						<?php if (!has_custom_logo()) { ?>
							<a class="navbar-brand" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php bloginfo('name'); ?>">
							</a>
						<?php } else {
							the_custom_logo();
						} ?>
					</div>
				</div>
				<?php n00b_main_nav(); ?>
			</div>
		</nav>
		
	<?php } ?>
	
</header>
<!-- END #header -->

<!-- START main -->
<main role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

	<!-- START breadcrumb -->
	<section id="breadcrumb">
		<div class="container">
			<div class="row">
				
			</div>
		</div>
	</section>
	<!-- END #breadcrumb -->
	