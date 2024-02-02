<?php
/**
 * @package WordPress
 * @subpackage garallysite2017
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/normalize.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/default.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/drawer_mini.css" />
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/vegas.min.css">
	<!--Google Web Fonts-->
	<link href="https://fonts.googleapis.com/css?family=Baumans" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/bootstrap-theme.css" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
	<![endif]-->
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body class="drawer drawer--right">

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.10";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-103005005-1', 'auto');
  ga('send', 'pageview');

</script>


<header role="banner" style="z-index: 5;">
	<button type="button" class="drawer-toggle drawer-hamburger hidden-lg hidden-md">
		<span class="sr-only">toggle navigation</span>
		<span class="drawer-hamburger-icon"></span>
	</button>
	<nav class="drawer-nav" role="navigation"> 
		<ul class="drawer-menu">
			<li><a class="drawer-brand" href="#"><img src="<?php the_field('logo', 37); ?>" class="spmenulogo" alt="ロゴ" /></a></li>
			<li><p><strong><a href="<?php echo home_url(); ?>">ポートフォリオサイト</a></strong></p></li>
			<div class="takasa15"></div>
			<li><a class="drawer-menu-item" href="<?php echo home_url(); ?>"><p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>　TOP</p></a></li>
			<li><a href="<?php echo home_url(); ?>/profile/" class="zero"><p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>　PROFILE</p></a></li>
			<li><a href="<?php echo home_url(); ?>/works/?brand=web" class="zero"><p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>　WEB</p></a></li>
			<li><a href="<?php echo home_url(); ?>/works/?brand=banner" class="zero"><p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>　BANNER</p></a></li>
			<li><a href="<?php echo home_url(); ?>/works/?brand=proposal" class="zero"><p><i class="fa fa-chevron-circle-right" aria-hidden="true"></i>　PROPOSAL</p></a></li>
		</ul>
	</nav>
</header>
<!--header-->

<div class="header_sp hidden-lg hidden-md">
	<div class="header_sp_menu">
		<div class="zero header_sp_title">
			<img src="<?php the_field('logo', 37); ?>" alt="タイトルロゴ" class="sp_logo" />
		</div>
	</div>
</div>

<div id="header_menu" class="hidden-xs hidden-sm">
<div class="wrapper">
	<div class="header_menu">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-left zero">
				<a href="<?php echo home_url(); ?>"><img src="<?php the_field('logo', 37); ?>" alt="logo" class="logo" /></a>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 zero">
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero menu">
					<div class="takasa15"></div>
					<a href="<?php echo home_url(); ?>/profile/" class="zero"><p>PROFILE88888</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero menu">
					<div class="takasa15"></div>
					<a href="<?php echo home_url(); ?>/works/?brand=web" class="zero"><p>WEB</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero menu">
					<div class="takasa15"></div>
					<a href="<?php echo home_url(); ?>/works/?brand=lp" class="zero"><p>LP</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero menu">
					<div class="takasa15"></div>
					<a href="<?php echo home_url(); ?>/works/?brand=banner" class="zero"><p>BANNER</p></a>
				</div>
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs text-center zero menu">
					<div class="takasa15"></div>
					<a href="<?php echo home_url(); ?>/works/?brand=proposal" class="zero"><p>PROPOSAL</p></a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

<div class="takasa60 hidden-lg hidden-md hidden-sm"></div>





