<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title(''); ?></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<?php wp_head(); ?>
</head>

<body>

	<header id="header">

		<nav id="primary-menu" class="top-nav">
			<?php wp_nav_menu(array('theme_location'=>'primary'));?>
		</nav>

		<div id="branding">

			<div id="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img id="logo" src="<?php header_image(); ?>"alt="Header Logo"/></a>
			</div>

			<div id="site-description">

			</div>

		</div>

		<nav id="secondary-menu" class="top-nav">
			<?php wp_nav_menu(array('theme_location'=>'secondary'));?>
		</nav>

		<div id="menu-button">
			Menu
		</div>

	</header>

	<nav id="mobile-menu">
		<?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class' => 'mobile-primary mobile-menu'));?>
		<?php wp_nav_menu(array('theme_location'=>'secondary', 'menu_class' => 'mobile-menu'));?>
	</nav>
