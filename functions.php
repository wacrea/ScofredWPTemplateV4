<?php
	add_theme_support( 'post-thumbnails' );
	
	function wp_list_categories_remove_title_attributes($output) {
		$output = preg_replace('` title="(.+)"`', '', $output);
		return $output;
	}
	add_filter('wp_list_categories', 'wp_list_categories_remove_title_attributes');
	
	function lang($fr_str, $en_str)
	{
	
	//
	//		le 1er paramètre est la version FRANCAISE du texte.
	//		Le 2nd paramètre est la version ANGLAISE du texte.
	//		
	//		On affiche selon la langue du navigateur la version ANGLAISE ou FRANCAISE
	//

		// On détecte
		$langue_user = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
		$langue_user = $langue_user{0}.$langue_user{1};
		
		if($langue_user == 'fr')
		{
			return $fr_str;
		}
		elseif($langue_user == 'en')
		{
			return $en_str;
		}
		else
		{
			// On affiche en Anglais par défaut
			
			return $en_str;
			
		}
	}
	
	function rss_post_thumbnail($content) {
	global $post;
	if(has_post_thumbnail($post->ID)) {
	$content = '<p>' . get_the_post_thumbnail($post->ID) .
	'</p>' . get_the_content();
	}
	return $content;
	}
	add_filter('the_excerpt_rss', 'rss_post_thumbnail');
	add_filter('the_content_feed', 'rss_post_thumbnail');
?>