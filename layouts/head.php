<?php defined('_EXEC') or die; ?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="{$vkye_lang}">
	<head>
		<meta charset="UTF-8" />
		<meta content="text/html; charset=iso-8859-1" http-equiv="Content-Type" />
		{$dependencies.meta}
		<base href="{$vkye_base}">
		<title>{$vkye_title}</title>
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="author" content="codemonkey.com.mx" />
		<meta name="description" content="" />
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
		<link rel="stylesheet" href="https://cdn.codemonkey.com.mx/css/valkyrie.css" type="text/css" media="all" />
		<link rel="stylesheet" href="{$path.css}styles.css?v=1.0" type="text/css" media="all" />
		{$dependencies.css}
	</head>
	<body>
		<header id="desktop_menu" class="pos-fixed" style="width:100%;transition:400ms;z-index:98;background-color:#fff;">
			<div class="p-t-20 p-t-md-10 p-r-20 p-r-md-0 p-b-20 p-l-20 p-l-md-0">
				<div class="container">
					<div class="row">
						<div class="col-2">
							<nav>
								<ul class="d-flex align-items-center justify-content-start list-unstyled">
									<li class="m-r-15"><a href="?lang=es" class="text-uppercase text-dark"><strong>EN</strong></a></li>
									<li><a href="?lang=en" class="text-uppercase text-dark"><strong>ES</strong></a></li>
								</ul>
							</nav>
						</div>
						<div class="col-10">
							<nav>
								<ul class="d-flex align-items-center justify-content-end list-unstyled">
									<li data-desktop><a href="/contact" class="text-uppercase text-dark"><i class="fas fa-map-marker-alt m-r-5"></i><?php echo Configuration::$vars['address']; ?></a></li>
									<li class="m-l-15"><a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" class="text-uppercase text-dark"><i class="fas fa-phone m-r-5"></i><?php echo Configuration::$vars['contact']['phone']; ?></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<div data-desktop class="p-b-20" style="border-bottom:1px solid #000;">
				<div class="container">
					<figure class="d-flex justify-content-center">
						<img src="{$path.images}logotype_black.svg" alt="Logotype" style="height:100px;transition:200ms;">
					</figure>
				</div>
			</div>
			<div data-desktop class="p-t-10 p-b-10">
				<div class="container">
					<nav>
						<ul class="d-flex align-items-center justify-content-center list-unstyled">
							<li class="m-r-15"><a href="/" class="text-uppercase text-dark">{$lang.home}</a></li>
							<li class="m-l-15 m-r-15"><a href="/shop" class="text-uppercase text-dark">{$lang.shop}</a></li>
							<li class="m-l-15 m-r-15"><a href="/care" class="text-uppercase text-dark">{$lang.care}</a></li>
							<li class="m-l-15 m-r-15"><a href="/stay" class="text-uppercase text-dark">{$lang.stay}</a></li>
							<li class="m-l-15 m-r-15"><a href="/entertain" class="text-uppercase text-dark">{$lang.entertain}</a></li>
							<li class="m-l-15 m-r-15"><a href="/taste" class="text-uppercase text-dark">{$lang.taste}</a></li>
							<li class="m-l-15 m-r-15"><a href="/work" class="text-uppercase text-dark">{$lang.work}</a></li>
							<li class="m-l-15 m-r-15"><a href="/events" class="text-uppercase text-dark">{$lang.events}</a></li>
							<li class="m-l-15 m-r-15"><a href="/contact" class="text-uppercase text-dark">{$lang.contact}</a></li>
							<li class="m-l-15"><a href="/map" class="text-uppercase text-dark">{$lang.map}</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div data-mobile-block class="p-l-20 p-r-20 p-b-20">
				<div class="row">
					<div class="col-4 d-flex align-items-center justify-content-start">
						<figure>
							<img src="{$path.images}logotype_black.svg" alt="Logotype" style="height:40px;">
						</figure>
					</div>
					<div class="col-8 d-flex align-items-center justify-content-end">
						<a data-action="open_mobile_menu" class="btn btn-light"><i class="fas fa-bars"></i></a>
					</div>
				</div>
			</div>
			<div class="p-5" style="background-color:#000;">
				<p class="text-center text-light">{$lang.coming_soon}</p>
			</div>
		</header>
		<header id="mobile_menu" data-mobile-flex class="pos-fixed d-flex align-items-center justify-content-center p-20" style="width:300px;height:100vh;right:-300px;background-color:#fff;transition:400ms;z-index:99;">
			<a data-action="close_mobile_menu" class="btn btn-light pos-absolute" style="top:20px;right:20px;"><i class="fas fa-times"></i></a>
			<nav>
				<ul class="d-flex align-items-center flex-column list-unstyled">
					<li class="m-b-15"><a href="/" class="text-uppercase text-dark">{$lang.home}</a></li>
					<li class="m-b-15"><a href="/shop" class="text-uppercase text-dark">{$lang.shop}</a></li>
					<li class="m-b-15"><a href="/care" class="text-uppercase text-dark">{$lang.care}</a></li>
					<li class="m-b-15"><a href="/stay" class="text-uppercase text-dark">{$lang.stay}</a></li>
					<li class="m-b-15"><a href="/entertain" class="text-uppercase text-dark">{$lang.entertain}</a></li>
					<li class="m-b-15"><a href="/taste" class="text-uppercase text-dark">{$lang.taste}</a></li>
					<li class="m-b-15"><a href="/work" class="text-uppercase text-dark">{$lang.work}</a></li>
					<li class="m-b-15"><a href="/events" class="text-uppercase text-dark">{$lang.events}</a></li>
					<li class="m-b-15"><a href="/contact" class="text-uppercase text-dark">{$lang.contact}</a></li>
					<li><a href="/map" class="text-uppercase text-dark">{$lang.map}</a></li>
				</ul>
			</nav>
		</header>
