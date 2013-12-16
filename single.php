
					<!-- <span style="float:left;margin-right: 20px;"><?php the_time('j F Y') ?></span> -->		
				
<!--
					<span style="float:right; margin-left: 20px;background: yellow;-webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;"><?php edit_post_link('Editer', '', ''); ?></span>
				</div>
							
				<div id="the_content" style="text-align: justify;">								
					<?php the_content(); ?>
				</div>
				
				<a href="https://twitter.com/share" class="twitter-share-button" data-via="Scofred_" data-lang="fr">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="fb-like" data-send="true" data-width="450" data-show-faces="false"></div>
			
			</div>
			
			<div id="comments_div">
			<?php //comments_template(); ?>
			</div>
-->

<?php get_header(); ?>

<div class="eight columns struct-global list">

	<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
	
		<article>
				<h3><?php the_title(); ?></h3>
				
				<div class="meta">
					<span style="float:left;margin-right: 20px;"><?php the_time('j F Y') ?></span>
					<hr/>
				</div>
				
				<div class="the_content">
					<?php the_content(); ?>
				</div>
			</a>
		</article>
		
		<article>
			<h3><?php echo lang('Commentaires','Comments'); ?></h3>
			
			<?php comments_template(); ?>
		</article>
		
	<?php endwhile; ?>
	<?php endif; ?>
		
	<?php wp_pagenavi(); ?>
</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>