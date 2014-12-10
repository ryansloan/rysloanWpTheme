<html>
<head>
<title>
<?php 
if (is_home()) { 
echo "Ryan Sloan";
} 
else { 
wp_title("Ryan Sloan | ");
} ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>
	<div id='header'>
		<div id="siteTitle">
			<span id="siteName"><a href='<?php bloginfo( 'wpurl' ); ?>'><?php bloginfo('name'); ?></a></span>
		</div>
<!--<span id="siteTagLine"><?php echo get_bloginfo('description', 'display'); ?> </span>-->
		<?php
			if (!is_home()) {
				print "<div id='siteMenu'>";
				wp_nav_menu();
				print" </div>";
			}

		?>
	</div>

