
<?php 
get_header(); ?>
<div id='welcomeBlock'>

	<div id='welcomeMessage'>	<?php if ( have_posts() ) : the_post(); the_content(); endif; ?></div>
		<?php wp_nav_menu(array( 'theme_location' => 'frontpage-menu' )); ?>
</div>
<div class='headerImage'>
	<img src="<?php echo get_header_image(); ?>" />
</div>
<div class='welcomeSubsection'>
	<h1>Latest Blog Post</h1>

	<?php 
	$args = array(
    'post_status' => 'publish',
    'no_found_rows' => true );
	wp_reset_query(); $posts = new WP_Query($args);
	if ($posts->have_posts()) : /*while ($posts->have_posts()) :*/ $posts->the_post();
	?>
		<div class="blogPost">
			<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
			<div class='entry-meta'><span class='post-date'><?php the_time('F jS, Y'); ?></span>
			<span class='post-categories'>Filed under: 
				<?php $post_categories = wp_get_post_categories(get_the_id()); 
					$output_links=array_map(function ($c) { $cat_name = get_category($c)->name; return "<a href='".esc_url(get_category_link($c))."'>".$cat_name."</a>";}, $post_categories);
					printf(implode(", ",$output_links));
				?>
			</span>
			</div>
			<div class='entry'>
				<?php global $more; $more=0;  	//This overrides the default which is to ignore the "<!--more-->" tag on single post pages.  
												//Why 0 instead of 1 for "on", you ask? Because wordpress. ?>
				<?php the_content("Read the rest of this post"); ?>
			</div>
		</div>
	<?php  /*endwhile;*/  wp_reset_postdata(); endif;?>
</div>
<div class='welcomeSubSection'>
	<h1>Follow Me On...</h1>
<div id='followMeContainer'>
		<?php wp_nav_menu(array('theme_location' => 'follow-menu' )); 			?>
</div>
</div>
<?php get_footer(); ?>
