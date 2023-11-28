<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<header class="l-header">
		
		<div class="p-header__wrapper">
			<h1 class="p-header__logo"><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" width="100" height="25" alt="WED"></a></h1>
			<ul class="p-header__nav">

				<li><a href="<?php echo esc_url( home_url('/category/news') ); ?>">NEWS</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>#about">ABOUT</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>#business">BUSINESS</a></li>
				<li><a href="<?php echo esc_url( home_url() ); ?>#company">COMPANY</a></li>
			</ul>
			<div class="p-header__button"><a href="<?php echo esc_url( home_url('contact') ); ?>">お問い合わせ</a></div>
		</div>
	</header>