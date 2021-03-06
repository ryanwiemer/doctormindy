<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="description" content="<?php echo get_option( 'blogdescription' ); ?>" />
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<title><?php wp_title( '|', true, 'right' ); ?> Doctor Mindy</title>

<?php wp_head(); ?>
<!--[if lt IE 9]>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/selectivizr.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr.min.js"></script>
</head>

<body <?php body_class(); ?>>

	<header class="header">
		<div class="site-title">
			<h1 class="site-title__name"><a href="<?php echo site_url(); ?>">Dr. Mindy Buoncristiani</a></h1><span class="site-title__tagline">Practice limited to conventional and micro-surgical endodontics.</span>
		</div>
		<nav class="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav>
	</header>
