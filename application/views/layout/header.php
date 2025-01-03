
<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $title !== 'Home' ?  $title . " - Liveasoft": "Liveasoft - Limitless Transformation" ?></title>
	
	<?php if($title === 'Home') {?>

		<meta name="keywords" content="Liveasoft, mobile app development, web app development, innovative technology solutions, business transformation">

		<!-- Open Graph / Facebook -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Liveasoft" />
		<meta property="og:url" content="https://liveasoft.com/">
		<meta property="og:title" content="Liveasoft - Limitless Transformation">
		<meta property="og:description" content="Liveasoft specializes in innovative mobile and web application development, delivering customized solutions to transform possibilities into reality. Empowering businesses with cutting-edge technology.">
		<meta property="og:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
		<meta property="og:image:secure_url" content="https://www.liveasoft.com/assets/img/logo-dark.png" />
		<meta property="og:image:alt" content="Liveasoft - Limitless Transformation" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="628" />
		<meta property="og:image:type" content="image/png" />

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://liveasoft.com/">
		<meta property="twitter:title" content="Liveasoft - Limitless Transformation">
		<meta property="twitter:description" content="Liveasoft specializes in innovative mobile and web application development, delivering customized solutions to transform possibilities into reality. Empowering businesses with cutting-edge technology.">
		<meta property="twitter:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
	
	<?php } else if($title === 'Contact Us') {?>
	
		<meta name="description" content="Get in touch with Liveasoft for innovative web and mobile application solutions. We're here to answer your queries and discuss your project needs.">
		<meta name="keywords" content="Liveasoft contact, mobile apps, web solutions, support, customer service, project discussion">
		<link rel="canonical" href="https://liveasoft.com/contact-us">

		<!-- Open Graph / Facebook -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Liveasoft" />
		<meta property="og:url" content="https://liveasoft.com/contact-us">
		<meta property="og:title" content="Contact Us - Liveasoft">
		<meta property="og:description" content="Get in touch with Liveasoft for innovative web and mobile application solutions. We're here to answer your queries and discuss your project needs.">
		<meta property="og:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
		<meta property="og:image:alt" content="Contact Us - Liveasoft">
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="628" />

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://liveasoft.com/contact-us">
		<meta property="twitter:title" content="Contact Us - Liveasoft - Limitless Transformation">
		<meta property="twitter:description" content="Get in touch with Liveasoft for innovative web and mobile application solutions. We're here to answer your queries and discuss your project needs.">
		<meta property="twitter:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">

	<?php } else if($title === 'Find Us') {?>

		<meta name="description" content="Locate Liveasoft offices and explore how our innovative solutions can empower your business.">
		<meta name="keywords" content="Liveasoft location, find Liveasoft, office locations, innovative solutions, business empowerment">
		<link rel="canonical" href="https://liveasoft.com/find-us">

		<!-- Open Graph / Facebook -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Liveasoft" />
		<meta property="og:url" content="https://liveasoft.com/find-us">
		<meta property="og:title" content="Find Us - Liveasoft">
		<meta property="og:description" content="Locate Liveasoft offices and explore how our innovative solutions can empower your business.">
		<meta property="og:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
		<meta property="og:image:alt" content="Find Us - Liveasoft">
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="628" />

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://liveasoft.com/find-us">
		<meta property="twitter:title" content="Find Us - Liveasoft">
		<meta property="twitter:description" content="Locate Liveasoft offices and explore how our innovative solutions can empower your business.">
		<meta property="twitter:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">

	<?php } else if($title === 'About Us') {?>

		<meta name="description" content="Learn about Liveasoft's mission and vision. We strive to innovate and deliver exceptional web and mobile application development solutions.">
		<link rel="canonical" href="https://liveasoft.com/about-us/">
		
		<meta name="keywords" content="Liveasoft, about us, company mission, vision, technology solutions, innovative applications">

		<!-- Open Graph / Facebook -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Liveasoft" />
		<meta property="og:url" content="https://liveasoft.com/about-us/">
		<meta property="og:title" content="About Us - Liveasoft">
		<meta property="og:description" content="Learn about Liveasoft's mission and vision. We strive to innovate and deliver exceptional web and mobile application development solutions.">
		<meta property="og:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
		<meta property="og:image:secure_url" content="https://www.liveasoft.com/assets/img/logo-dark.png" />
		<meta property="og:image:alt" content="About Us - Liveasoft" />
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="628" />
		<meta property="og:image:type" content="image/png" />

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://liveasoft.com/about-us/">
		<meta property="twitter:title" content="About Us - Liveasoft">
		<meta property="twitter:description" content="Learn about Liveasoft's mission and vision. We strive to innovate and deliver exceptional web and mobile application development solutions.">
		<meta property="twitter:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
	
	<?php } else if($title === 'About Team') {?>
	
		<meta name="description" content="Meet the expert team at Liveasoft, driving innovation and excellence in mobile and web application development.">
		<meta name="keywords" content="Liveasoft team, expert developers, innovation, excellence, mobile applications, web solutions">
		<link rel="canonical" href="https://liveasoft.com/about-team">

		<!-- Open Graph / Facebook -->
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website">
		<meta property="og:site_name" content="Liveasoft" />
		<meta property="og:url" content="https://liveasoft.com/about-team">
		<meta property="og:title" content="About Team - Liveasoft">
		<meta property="og:description" content="Meet the expert team at Liveasoft, driving innovation and excellence in mobile and web application development.">
		<meta property="og:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">
		<meta property="og:image:alt" content="About Team - Liveasoft">
		<meta property="og:image:width" content="1200" />
		<meta property="og:image:height" content="628" />

		<!-- Twitter -->
		<meta property="twitter:card" content="summary_large_image">
		<meta property="twitter:url" content="https://liveasoft.com/about-team">
		<meta property="twitter:title" content="About Team - Liveasoft">
		<meta property="twitter:description" content="Meet the expert team at Liveasoft, driving innovation and excellence in mobile and web application development.">
		<meta property="twitter:image" content="https://www.liveasoft.com/assets/img/logo-dark.png">

	<?php }?>
	
	<meta charset="utf-8">
	<meta name="description"
		content="Liveasoft specializes in innovative mobile and web application development, delivering customized solutions to transform possibilities into reality. Empowering businesses with cutting-edge technology.">
	<meta name="author" content="liveasoft.com">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="favicon.png" type="image/x-icon">
	<link rel="icon" href="<?= base_url() ?>assets/favicon.png" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/normalize/normalize.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/fontawesome/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/swiper/css/swiper-bundle.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/lightgallery/css/lightgallery.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/helper.css">
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/theme.css">

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8L3RR5PPDH"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-8L3RR5PPDH');
	</script>
</head>

<body id="body" class="tt-transition tt-boxed tt-smooth-scroll tt-magic-cursor">
	<main id="body-inner">
		<div id="page-transition">
			<div class="ptr-overlay"></div>
			<div class="ptr-preloader">
				<div class="ptr-prel-content">
					<img src="<?= base_url() ?>assets/img/logo-light.png" class="ptr-prel-image tt-logo-light" alt="Logo">
				</div>
			</div>
		</div>
		<div id="magic-cursor">
			<div id="ball"></div>
		</div>
		<div id="scroll-container">
