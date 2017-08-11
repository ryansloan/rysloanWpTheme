<meta name="google-site-verification" content="YHiRd5wepd-a5lxK7S_dLwgxGi5sIhj-JFF7wgFgVPA" />
<?php 
get_header(); ?>
<div id='mainContent'>
<div class='category-description'>
	<div class='category-name'>Posts Filed "<?php echo single_cat_title(); ?>"</div>
	<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

					get_template_part( 'loop', 'category' );
				?>
</div>
	<?php if ( have_posts() ) : while(have_posts()): the_post(); ?>
	<div class="blogPost">
		<h1><a href='<?php the_permalink(); ?>'><?php the_title(); ?></a></h1>
		<div class='entry-meta'><span class='post-date'><?php the_time('F jS, Y'); ?></span>
		<span class='post-categories'>Filed under: 
				<?php $post_categories = wp_get_post_categories(get_the_id()); 
					$output_links=array_map(function ($c) { $cat_name = get_category($c)->name; return "<a href='".esc_url(get_category_link($c))."'>".$cat_name."</a>";}, $post_categories);
					printf(implode(",",$output_links));
				?>
		</span>
</div>
		<div class='entry'>
			<?php the_content('Read the rest of this post'); ?>
		</div>
	</div>
	<?php  endwhile; endif;?>
</div>

<?php get_footer(); ?>
