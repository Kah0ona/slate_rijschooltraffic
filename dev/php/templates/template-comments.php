<?php
/*
Template Name: Gastenboek
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="u-gridRow">
			<div class="u-gridCol8">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
						<h2><?php the_title(); ?></h2>
						<div>
							<?php comments_template(); ?>
						</div>
					</article>
				<?php endwhile; endif; ?>
			</div>
			<div class="u-gridCol4">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
