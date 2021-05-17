<!doctype html>
<html lang="en">
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php bloginfo('name'); ?> <?php wp_title("—"); ?></title>
<meta name="theme-color" content="#3A7908">
<link rel="icon" crossorigin href="https://resources.whatwg.org/logo.svg">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>

<header>
	<hgroup>
		<h1><a href="/">The WHATWG Blog <img crossorigin src="https://resources.whatwg.org/logo.svg" alt=""></a></h1>
		<h2 class="description"><?php bloginfo('description'); ?></h2>
	</hgroup>
</header>
