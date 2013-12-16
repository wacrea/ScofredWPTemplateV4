<?php get_header(); ?>

<div class="eight columns struct-global list">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
		<article>
				<h3><?php the_title(); ?></h3>
				
				<div class="the_content">
					<?php the_content(); ?>
				</div>
			</a>
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>
		
	<?php wp_pagenavi(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>