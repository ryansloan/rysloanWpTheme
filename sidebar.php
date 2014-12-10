<div id="sidebar">
<img src="<?php header_image() ?>" class='profilePhoto' alt="<?php bloginfo('title') ?>" />
<?php 
$linkToEdDocs = array(
    'text' => 'CS Education Docs',
    'url'  => 'http://ryanjsloan.com/docs/'
	);
?>
<ul>
<?php wp_nav_menu(array('container'=>'li','items_wrap'=>'%3$s' )); ?> <!-- <ul>%3$s</ul> -->
<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href='http://ryanjsloan.com/docs/'>CS Education Docs</a></li>
</ul>
<div class="socialMediaIcons">
<a href="http://twitter.com/ryansloan"><img src="<?php bloginfo('template_directory'); ?>/images/twitter.png" alt="Twitter"/></a>
<a href="http://linkedin.com/in/ryansloan"><img src="<?php bloginfo('template_directory'); ?>/images/linkedin.png" alt="LinkedIn"/></a>
<a href="http://facebook.com/ryansloan"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.png" alt="Facebook"/></a>
<a href="http://github.com/ryansloan"><img src="<?php bloginfo('template_directory'); ?>/images/github.png" alt="GitHub"/></a>
</div>

</div>

