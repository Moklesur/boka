<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package boka
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrap-fix">
	<header class="header">
		<!--------------- Header Top ---------------->
		<section class="header-top position-relative">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 logo">
						<?php
						if (get_theme_mod('site_logo') != '') : ?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_theme_mod('site_logo'); ?>" class="img-responsive" alt="" /></a>
						<?php else : ?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php if(!empty( get_bloginfo('description') )) : ?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'description' ); ?></a></p>
							<?php endif ?>
						<?php endif ?>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 header-social">
						<?php do_action('boka_header_social'); ?>
					</div>
				</div>
			</div>
		</section>
		<!--------------- Header Bottom ---------------->
		<section class="header-bottom">
			<div class="container">
				<div class="row">
					<!--------------- Primary Menu ---------------->
					<nav class="navbar navbar-default text-uppercase primary-menu">
						<div class="navbar-header">
							<button type="button" data-toggle="collapse" data-target="#navbar-collapse" class="navbar-toggle">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div id="navbar-collapse" class="navbar-collapse collapse">
							<?php
							wp_nav_menu( array(
									'menu'              => 'primary',
									'theme_location'    => 'primary',
									'depth'             => 2,
									'menu_id'			=> 'primary-menu',
									'container'         => '',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'bs-example-navbar-collapse-1',
									'menu_class'        => 'nav navbar-nav',
									'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
									'walker'            => new WP_Bootstrap_Navwalker())
							);
							?>
							<?php if (get_theme_mod('bottom_header_search','1')) : ?>
								<!--------------- Search ---------------->
								<form role="search" method="get" class="navbar-form navbar-right header-search position-relative" action="<?php echo home_url( '/' ); ?>">
									<input type="search" class="search-field form-control" placeholder="<?php esc_html_e( 'Search', 'boka' ) ?>" value="<?php echo get_search_query() ?>" name="s" />
									<button type="submit" class="btn btn-default"><i class="fa fa-long-arrow-right"></i></button>
								</form>
							<?php endif ?>
						</div>
					</nav>
				</div>
			</div>
		</section>
	</header>