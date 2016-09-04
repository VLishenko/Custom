<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title><?php bloginfo('name') ?></title>
	<meta name="description" content="" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/bootstrap/bootstrap.css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/normalize.css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/main.css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/media.css" />
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/wp-styles.css" />
	<?php wp_head(); ?>
</head>
<body class="site-wrapper">
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<!-- Start Main Header -->
	<header class="header">
		<div class="container">
			<div class="row">

				<div class="col-md-3">
					<a href="mailto:<?php $options = get_option('sample_theme_options');  echo $options ['mail']; ?>" class="mail color-white">
						<i class="fa fa-envelope-o"></i>
						<?php $options = get_option('sample_theme_options');  echo $options ['mail']; ?>
					</a>
				</div>

				<div class="col-md-4">
					<div class="phone color-red">
						<i class="fa fa-phone"></i>
						<?php $options = get_option('sample_theme_options');  echo $options ['phonetext']; ?>
					</div>
				</div>

				<div class="col-md-5">
					<a href="#" class="delivery-btn ">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/delivery-btn.png" alt="">
					</a>
				</div>

			</div> <!-- .row -->
		</div> <!-- .container -->
	</header>
	<!-- End Main Header -->
