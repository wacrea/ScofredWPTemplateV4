<div class="push_one three columns struct-global sidebar">

	<a href="http://fameety.com">
		<img alt="Fameety" class="image rounded" src="<?php bloginfo('template_url'); ?>/images/pubfameety.png" />
	</a>
	
	<h3><?php echo lang('Catégories', 'Categories'); ?></h3>
	<ul class="categories">
		<?php wp_list_cats('hide_empty=1'); ?>
	</ul>
</div>