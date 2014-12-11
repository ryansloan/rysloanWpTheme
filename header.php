<html>
<head>
<title>
<?php 
if (is_home()) { 
	print get_bloginfo('name')." | ".get_bloginfo('description');
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
			if (!is_home()) {
				print "<div id='siteMenu'>";
				wp_nav_menu();
				print" </div>";
			}

		?>
	</div>

