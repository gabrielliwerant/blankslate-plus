<?php
/**
 * 
 */
?>

<?php 
	$url = str_replace('http://', '', get_site_url());
	$url_arr = explode('/', $url);
	
	if ($url_arr[0] === 'localhost')
	{
		define('IS_DEVELOPMENT', true);
		define('MAIN_DEV_PATH', '');
		define('LESS_PATH', '');
	}
	else
	{
		define('IS_DEVELOPMENT', false);
	}
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	
<head>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width; maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" name="viewport">
	
	<title><?php wp_title(' | ', true, 'right'); ?></title>
	
	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo get_stylesheet_uri(); ?>" /> -->
	
	<?php if (IS_DEVELOPMENT) : ?>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/all.css" />
	<?php else: ?>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/all-min.css" />
	<?php endif; ?>
	<!--[if gte IE]>
		<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/ie.css" />
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<?php if (IS_DEVELOPMENT)
	{
		include MAIN_DEV_PATH . LESS_PATH; lessc::ccompile(MAIN_DEV_PATH . '\less\all.less', MAIN_DEV_PATH . '\all.css', true);
	} ?>

<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		
	<header>
		<?php if ( is_active_sidebar('contact-widget-area') ) : ?>
		<div id="contact-widget-area" class="widget-area">
			<ul class="sid">
				<?php dynamic_sidebar('contact-widget-area'); ?>
			</ul>
		</div>
		<?php endif; ?>
		
		<div id="branding">
			<div id="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo( 'name' ) ?>" rel="home">
					<img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" title="Logo" alt="Logo" />
				</a>
			</div>
			<p id="site-description"><?php bloginfo( 'description' ) ?></p>
		</div>
		<div id="search">
			<?php get_search_form(); ?>
		</div>
		
		<nav>
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
		</nav>
		
		<?php 
		if ( function_exists('yoast_breadcrumb') ) {
			yoast_breadcrumb('<p id="breadcrumbs">','</p>');		
		}
		?>
	</header>
		
	<div id="container">