<html>
<head>
<?php include_once('ga_config.php'); ?>
<title>
<?php 
if (is_front_page()) { 
	print get_bloginfo('name')." | ".get_bloginfo('description');
} 
elseif (is_category()) {
	print single_cat_title()." posts | ".get_bloginfo('name');
}
else { 
	print single_post_title()." | ".get_bloginfo('name');
} ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>
	<div id='header'>
		<div id="siteTitle">
			<span id="siteName"><a href='<?php bloginfo( 'wpurl' ); ?>'><?php bloginfo('name'); ?></a></span>
		</div>
		<?php
			if (!is_front_page()) {
				print "<div id='siteMenu'>";
				wp_nav_menu(array( 'theme_location' => 'header-menu' ));
				print" </div>";
			}

		?>
	</div>
