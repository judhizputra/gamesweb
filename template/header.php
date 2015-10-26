<!DOCTYPE HTML>
<html lang = "en">
	<head>
		<meta charset="utf-8" />
		<title>Revelio Theme | Homepage</title>
		<meta content="IE=edge" http-equiv="X-UA-Compatible" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!-- <meta property="og:type" content="company" />
		<meta property="og:title" content="Revelio Theme | Homepage" />
		<meta property="og:image" content="" />
		<meta property="og:description" content="" />
		<meta property="og:url" content="http://datcouch.com" />
		<meta property="og:site_name" content="Revelio Theme | Homepage" /> -->
		<link rel="shortcut icon" type="image/png" href="img/favicon.png" />
		<link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/dat-menu.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/main-stylesheet.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/custom.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700|Oswald:300,400,700|Source+Sans+Pro:300,400,600,700&amp;subset=latin,latin-ext" />
		<!--[if lt IE 9 ]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<? 
		if(basename($_SERVER['PHP_SELF']) == '' || basename($_SERVER['PHP_SELF']) == 'index.php'){
			$bClass = 'class="has-top-menu"';
		}else{
			$bClass = 'class="no-slider"';
		} 
	?>
	<body <?=$bClass?>>
		<!-- BEGIN #slider-imgs -->
		<div id="slider-imgs">
			<? 
				if(basename($_SERVER['PHP_SELF']) == 'review-detail.php'){ 
					$sStyle = 'style="background-image: url(img/photos/image-90.jpg);"';
				}else{
					$sStyle = '';
				}
			?>
			<div class="featured-img-box" <?=$sStyle?>>
				<div id="featured-img-1" class="featured-img"></div>
				<div id="featured-img-2" class="featured-img invisible"></div>
				<div id="featured-img-3" class="featured-img invisible"></div>
				<div id="featured-img-4" class="featured-img invisible"></div>
			</div>
		<!-- END #slider-imgs -->
		</div>

		<!-- BEGIN #top-layer -->
		<div id="top-layer">
			<div id="header-top">
				<div class="wrapper">
					<ul class="right">
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitch"></i></a></li>
						<li><a href="javascript:void(0)" target="_blank"><i class="fa fa-steam"></i></a></li>
					</ul>
					<ul class="load-responsive" rel="Top menu">
						<? if(!isset($_COOKIE["auth"])) { ?>
							<li><a href="auth.php">Masuk / Daftar</a></li>
						<? }else{ ?>
							<li><a href="javascript:void(0)"><span>Hi, John Doe</span></a>
								<ul class="sub-menu">
									<li><a href="member-profile.php"><i class="fa fa-user"></i> Profil</a></li>
									<li><a href="member-article.php"><i class="fa fa-edit "></i> Tulis Artikel</a></li>
									<li><a href="javascript:void(0)" id="logout-btn"><i class="fa fa-sign-out"></i> Keluar</a></li>
								</ul>
							</li>
						<? } ?>
						<li><a href="#drop-the-bass">Baca Nanti<small>2</small></a>
							<div class="drop">
								<div class="notify-header">Yang akan Saya baca nanti</div>
								<!-- <div class="nofify-empty">
									<i class="fa fa-folder-open-o"></i>
									<b>Tidak ada artikel</b>
									<span>Anda dapat menyimpan artikel untuk dibaca nanti</span>
								</div> -->
								<ol class="notify-list">
									<li>
										<a href="article-detail.php" class="notify-content">
											<span class="article-thumb"><img src="img/photos/image-35.jpg" alt="" /></span>
											<span class="notify-head">
												<span class="notify-user"><b>Lorem Ipsum</b></span>
											</span>
											<span class="notify-text">Facete eruditi an vis, vel utamur aliquid partiendo ex</span>
											<span class="notify-date">11:22, Sep 11, 2012</span>
										</a>
									</li>
									<li>
										<a href="article-detail.php" class="notify-content">
											<span class="article-thumb"><img src="img/photos/image-36.jpg" alt="" /></span>
											<span class="notify-head">
												<span class="notify-user"><b>Lorem Ipsum 2</b></span>
											</span>
											<span class="notify-text">Te deserunt eleifend usu, patrioque eloquentiam qui in</span>
											<span class="notify-date">11:22, Sep 11, 2012</span>
										</a>
									</li>
								</ol>
								<div class="notify-footer"><a href="javascript:void(0)">Hapus daftar</a></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<section id="content">
				<? 
					if(basename($_SERVER['PHP_SELF']) == 'review-detail.php'){
						$hClass = 'class="needpadding"';
					}elseif(basename($_SERVER['PHP_SELF']) == 'member.php' || basename($_SERVER['PHP_SELF']) == 'dashboard.php' || basename($_SERVER['PHP_SELF']) == 'dashboard-article.php' || basename($_SERVER['PHP_SELF']) == 'dashboard-guest.php'){
						$hClass = 'class="needsmallpadding"';
					}else{
						$hClass = '';
					}

				?>
				<header id="header" <?=$hClass?>>
					<div id="menu-bottom" class="blurred">
						<!-- <nav id="menu" class="main-menu width-fluid"> -->
						<nav id="menu" class="main-menu">
							<div class="blur-before"></div>
							<a href="index.php" class="header-logo left"><img src="img/logo.png" class="logo" alt="Revelio" title="" /></a>
							<a href="#dat-menu" class="datmenu-prompt"><i class="fa fa-bars"></i>Show menu</a>
							<ul class="load-responsive pull-right" rel="Main menu">
								<li><a href="index.php"><i class="fa fa-home"></i><strong>Home</strong></a></li>
								<li><a href="article.php"><span><i class="fa fa-book"></i><strong>Artikel</strong></span></a>
									<ul class="sub-menu">
										<li><a href="article.php">PC</a></li>
										<li><a href="article.php">PS4</a></li>
										<li><a href="article.php">Xbox One</a></li>
										<li><a href="article.php">Wii U</a></li>
										<li><a href="article.php">Mobile</a></li>
									</ul>
								</li>
								<li><a href="review.php"><i class="fa fa-gamepad"></i><strong>Review</strong></a></li>
								<li><a href="photo.php"><i class="fa fa-camera-retro"></i><strong>Galeri Foto</strong></a></li>
								<li><a href="video.php"><i class="fa fa-film"></i><strong>Galeri Video</strong></a></li>
								<li><a href="team.php"><i class="fa fa-users"></i><strong>Tim Kami</strong></a></li>
								<li><a href="contact.php"><i class="fa fa-map-marker"></i><strong>Hubungi Kami</strong></a></li>
							</ul>
						</nav>
					</div>

					<? if(basename($_SERVER['PHP_SELF']) == '' || basename($_SERVER['PHP_SELF']) == 'index.php'){ ?>
					<style>
						#featured-img-1 {
							background-image: url(img/photos/image-1.jpg);
						}
						#featured-img-2 {
							background-image: url(img/photos/image-2.jpg);
						}
						#featured-img-3 {
							background-image: url(img/photos/image-3.jpg);
						}
						#featured-img-4 {
							background-image: url(img/photos/image-4.jpg);
						}
					</style>

					<div id="slider">
						<div id="slider-info">
							<div class="padding-box">
								<ul>
									<li>
										<h2><a href="article-detail.php">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="article-detail.php" class="read-more-r">Baca artikel</a>
									</li>
									<li class="dis">
										<h2><a href="article-detail.php">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="article-detail.php" class="read-more-r">Baca artikel</a>
									</li>
									<li class="dis">
										<h2><a href="article-detail.php">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="article-detail.php" class="read-more-r">Baca artikel</a>
									</li>
									<li class="dis">
										<h2><a href="article-detail.php">Lorem ipsum dolor sit amet, ne nec suas graece</a></h2>
										<p>Liber alterum mentitum ea vel, cu debet harum altera vim. Te velit voluptaria qui. Cu has ipsum vitae torquatos, at modus congue delicata duo adversarium...</p>
										<a href="article-detail.php" class="read-more-r">Baca artikel</a>
									</li>
								</ul>
							</div>
							<a href="javascript: featSelect(1);" id="featSelect-1" class="featured-select this-active">
								<span class="w-bar" id="feat-countdown-bar-1">.</span>
								<span class="w-coin" id="feat-countdown-1">0</span>
								<img src="img/photos/image-5.jpg" alt="" title="" />
							</a>
							<a href="javascript: featSelect(2);" id="featSelect-2" class="featured-select">
								<span class="w-bar" id="feat-countdown-bar-2">.</span>
								<span class="w-coin" id="feat-countdown-2">0</span>
								<img src="img/photos/image-6.jpg" alt="" title="" />
							</a>
							<a href="javascript: featSelect(3);" id="featSelect-3" class="featured-select">
								<span class="w-bar" id="feat-countdown-bar-3">.</span>
								<span class="w-coin" id="feat-countdown-3">0</span>
								<img src="img/photos/image-7.jpg" alt="" title="" />
							</a>
							<a href="javascript: featSelect(4);" id="featSelect-4" class="featured-select">
								<span class="w-bar" id="feat-countdown-bar-4">.</span>
								<span class="w-coin" id="feat-countdown-4">0</span>
								<img src="img/photos/image-8.jpg" alt="" title="" />
							</a>
						</div>
					</div>
					<? }elseif(basename($_SERVER['PHP_SELF']) != 'review-detail.php' && basename($_SERVER['PHP_SELF']) != 'member.php'&& basename($_SERVER['PHP_SELF']) != 'dashboard.php' && basename($_SERVER['PHP_SELF']) != 'dashboard-article.php' && basename($_SERVER['PHP_SELF']) != 'dashboard-guest.php'){ ?>
					<div class="wrapper">
						<div class="header-breadcrumbs">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li>Halaman</li>
								<li>Detail</li>
							</ul>
						</div>
					</div>
					<? } ?>
				</header>