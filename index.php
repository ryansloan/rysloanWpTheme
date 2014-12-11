<?php 
get_header(); ?>
<div id='mainContent'>
	<div id='welcomeGreeting'>Blog Posts</div>
	<?php if ( have_posts() ) : while(have_posts()): the_post(); ?>
	<div class="blogPost">
		<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
		<div class='entry-meta'><span class='post-date'><?php the_time('F jS, Y'); ?></span></div>
		<div class='entry'>
			<?php the_content('Read the rest of this post'); ?>
		</div>
	</div>
	<?php  endwhile; endif;?>
</div>

<?php get_footer(); ?>
