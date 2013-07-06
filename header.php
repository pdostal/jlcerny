<?php
	 include('mobile_detect.php');
	 $detect = new Mobile_Detect;
	 $screentype = trim(htmlspecialchars(htmlspecialchars_decode($_GET['screentype'], ENT_NOQUOTES), ENT_NOQUOTES));
	 if(!empty($screentype)) { $_SESSION['screentype'] = $screentype; }
	 if(empty($_SESSION['screentype'])) {
	 	if($detect->isMobile() && !$detect->isTablet()) {
	 		$_SESSION['screentype'] = 'mobile';
		} else {
	 		$_SESSION['screentype'] = 'desktop';
	 	}
	}
	unset($detect);
?>
<!doctype html>
<html lang="cs">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php bloginfo('name'); ?></title>
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta name="author" content="Pavel Dostál">
		<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS feed" href="<?php bloginfo('rss2_url'); ?>" />
		<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/icon.png">
		<!-- START WP_HEAD --><?php wp_head(); ?><!-- STOP WP_HEAD -->
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" media="all" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/print.css" media="print" />
<?php if($_SESSION['screentype'] == 'mobile') { ?>
		<meta name="viewport" content="width=420, user-scalable=no">
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/mobile.css" media="all" />
<?php } ?>
	</head>
	<body>
		<header>
			<h1><a href="<?php bloginfo('wpurl'); ?>"><?php bloginfo('name'); ?></a></h1>
			<div class="banner">
				<?php dynamic_sidebar('header'); ?>
			</div>
            <div class="clear"></div>
			<nav>
				<?php wp_nav_menu(array('theme_location' => 'headermenu', 'link_before' => '<span>', 'link_after' => '</span>')); ?>
			</nav>
		</header>