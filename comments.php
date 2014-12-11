<?php 
?>

<div id="comments">
        <?php if ( post_password_required() ) : ?>
                <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'coraline' ); ?></p>
        </div><!-- #comments -->
        <?php
                /* Stop the rest of comments.php from being processed,
                 * but don't kill the script entirely -- we still have
                 * to fully load the template.
                 */
                return;
        endif;
        ?>

        <?php if ( have_comments() ) : ?>
		<h1>Comments for "<?php echo get_the_title();  ?>"</h1>
		 <ol class="commentlist">
                        <?php wp_list_comments(); ?>
                </ol>
		

	<?php //endif; ?>

	<?php else: ?>

		<h1>No comments on "<?php echo get_the_title(); ?>"</h1>
	<?php endif; ?>

	<?php comment_form(); ?>

</div>
