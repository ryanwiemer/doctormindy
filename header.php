<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>
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
