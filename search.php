<?php get_header(); ?>

<div class="eight columns struct-global list">
	
	<h2 class="title-search"><?php echo lang('Recherche', 'Search'); ?> : "<?php the_search_query(); ?>"</h2>
	
	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
		<article>
			<a href="<?php the_permalink(); ?>" title='<?php echo lang('Lire','Read'); ?> : "<?php the_title(); ?>"'>
				<h3><?php the_title(); ?></h3>
				
				<?php if(has_post_thumbnail()): ?>
					<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
					<img alt="<?php the_title(); ?>" src="<?php echo $url ?>" class="image rounded" />
				<?php endif; ?>
			</a>
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>
		
	<?php wp_pagenavi(); ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>