<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
	<div class="box">
		<div class="menu-full">
				<?php wp_nav_menu(); ?>
				<a href="<?php bloginfo('url'); ?>" title="Home"><img id="logo-esquerda" src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
		</div><!-- div menu-full -->
	</div><!-- div box -->
</body>
</html>