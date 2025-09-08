<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<meta property="og:title" content="kirara" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="kirara" />
	<meta property="og:description" content="" />

	<?php wp_head(); ?>
</head>

<body>



	<header class="header layout-header">
		<div class="header__inner">
			<?php $tag = is_front_page() ? 'h1' : 'h2'; ?>
			<<?php echo $tag; ?> class="header__logo">
				<a href="<?php echo esc_url(home_url('/')); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/logo.svg" alt="キララ" width=""
						height="" loading="lazy" decoding="async">
				</a>
			</<?php echo $tag; ?>>
		</div>
	</header>