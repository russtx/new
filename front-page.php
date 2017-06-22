<?php get_header(); ?>

	<!-- section -->
	<section>
		<div class="container">
			<div class="background-1">
				<div class="row">
					<div class="col-xs-12">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>
							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class('mainContent'); ?>>
								<?php the_content(); ?>
								<?php comments_template( '', true ); // Remove if you don't want comments ?>
								<br class="clear">
								<?php edit_post_link(); ?>
							</article>
							<!-- /article -->
						<?php endwhile; ?>
						<?php else: ?>
							<!-- article -->
							<article>
								<h2><?php _e( 'Sorry, nothing to display.' ); ?></h2>
							</article>
							<!-- /article -->
						<?php endif; ?>
					</div>

				</div><!-- row -->
			</div><!-- background-1 -- >
	</div><!-- container -->
	</section>
	<!-- /section -->

<?php get_footer(); ?>
