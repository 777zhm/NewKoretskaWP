<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<meta name="description" content="Корецька Ірина - приватний судовий виконавець Виконавчого округу м.Києва - послуги, консультація, допомога ☎ (067) 123-40-47">
	
	<title><?php echo "Приватний виконавець Київ: послуги судового виконавця"; ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="header">
	<div class="container-fluid">
		<div class="row justify-content-between align-items-center">
			<div class="logotype col-lg-2">
				<?php if ( has_custom_logo() ) : the_custom_logo(); endif; ?>	
			</div>
			<div class="main_menu col-lg-8 text-center">
				<?php wp_nav_menu( array('theme_location' => 'main_menu') ); ?>
			</div>
			<div class="ukraine_symbols col-lg-2 text-right">
				<img class="flag" src="<?php assets_url('img/flag.png') ?>" alt="flag">
				<img class="trident" src="<?php assets_url('img/trident.png') ?>" alt="trident">
			</div>
		</div>
	</div>
</header>

<main id="main" class="main" role="main">