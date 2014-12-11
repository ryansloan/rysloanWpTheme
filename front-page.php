<?php 
get_header(); ?>
<div id='welcomeBlock'>

	<div id='welcomeMessage'>	<?php if ( have_posts() ) : the_post(); the_content(); endif; ?></div>
		<?php wp_nav_menu(); ?>
</div>
<div class='headerImage'>
	<img src="http://localhost:8888/ryan/rjs/wp-content/uploads/2014/12/snorkel.jpg"/>
</div>
<div class='welcomeSubsection'>
	<h1>Latest Blog Post</h1>

	<?php global $more; $more=0; //This overrides the default which is to ignore the "<!--more-->" tag on single post pages. 
	query_posts('cat=1'); 
	if ( have_posts() ) : the_post(); 
	?>
		<div class="blogPost">
			<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
			<div class='entry-meta'><span class='post-date'><?php the_time('F jS, Y'); ?></span></div>
			<div class='entry'>
				<?php the_content("Read the rest of this post"); ?>
			</div>
		</div>
	<?php  endif;?>
</div>
<div class='welcomeSubSection'>
	<h1>Follow Me On...</h1>
	<ul class='socialMediaList'>
		<li><a href='http://github.com/ryansloan'>GitHub</a></li>
		<li><a href='http://github.com/ryansloan'>Facebook</a></li>
		<li><a href='http://github.com/ryansloan'>Twitter</a></li>
		<li><a href='http://github.com/ryansloan'>LinkedIn</a></li>
	</ul>

</div>
<?php get_footer(); ?>
