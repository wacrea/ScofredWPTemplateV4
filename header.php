<!DOCTYPE HTML>
<html>
<head>
 
	<title><?php bloginfo('name') ?> <?php if ( is_single() ) ?> <?php wp_title(); ?></title>
 
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/Scofred" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="http://feeds.feedburner.com/Scofred" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /><?php wp_head(); ?>
	
	<link rel="icon" type="image/png" href="<?php echo bloginfo('template_url'); ?>/images/favicon.png" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/gumby.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/libs/modernizr-2.6.2.min.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/javascript"></script>
 
	<?php wp_head(); ?>
	
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-15509303-12']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
	
	<?php wp_head(); ?>
 
</head>
<body>

<header>
	<div class="navbar" id="nav1">
		<div class="row">
			<a class="toggle" gumby-trigger="#nav1 > .row > ul" href="#"><i class="icon-menu"></i></a>
			<h1 class="two columns logo">
				<a href="<?php bloginfo('url'); ?>">
						<img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" style="height: 90px;" />
				</a>
			</h1>
			<ul class="push_six seven columns">
			<li><a href="<?php bloginfo('url'); ?>">Blog</a></li>
			<li><a href="http://williamagay.com">Me</a></li>
			<li><a href="http://scofred.com/contact">Contact</a></li>
			<li><a href="http://williamagay.com/apps">Apps</a></li>
			<li><a href="https://github.com/WilliamAgay">Github</a></li>
			</ul>
		</div>
	</div>
</header>

<div class="img_container">
	<div class="img_bg">
		<div class="row">
			<div class="twelve columns">
				<div class="row">
					<div class="six columns">
							<h1 class="sitename">
								<span class="blog_sitename">
								<a href="<?php bloginfo('url'); ?>">
									Blog
								</a>
								</span>
							
								<small class="soustitre">(<?php echo lang('en','in'); ?> 
								<a href="<?php echo bloginfo('url'); ?>/category/fr"><?php echo lang('Français', 'French'); ?></a>, <?php echo lang('en','in'); ?> 
								<a href="<?php echo bloginfo('url'); ?>/category/en"><?php echo lang('Anglais', 'English'); ?> </a> <?php echo lang('ou','or'); ?>
								<a href="<?php echo bloginfo('url'); ?>"><?php echo lang('les deux','both'); ?></a>)
								</small>
							</h1>
					</div>

					<ul class="push_two four columns">
						<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
							<li class="prepend append field">
						      <input class="normal text input" name="s" style="margin-top: 48px;width: 80%;" type="text" placeholder="<?php echo lang('Recherchez...','Search...'); ?>" />
						      <div class="medium primary btn"><a href="#">Go</a></div>
						    </li>
					    </form>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">