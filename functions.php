<?php

// enqueue the child theme stylesheet

Function wp_schools_enqueue_scripts() {
wp_register_style( 'childstyle', get_stylesheet_directory_uri() . '/style.css'  );
wp_enqueue_style( 'childstyle' );
}
add_action( 'wp_enqueue_scripts', 'wp_schools_enqueue_scripts', 11);
if(!function_exists('qode_header_meta')) {
	/**
	 * Function that echoes meta data if our seo is enabled
	 */
	function qode_header_meta() {
		global $qode_options_proya;

		if(isset($qode_options_proya['disable_qode_seo']) && $qode_options_proya['disable_qode_seo'] == 'no') {

			$seo_description = get_post_meta(qode_get_page_id(), "qode_seo_description", true);
			$seo_keywords = get_post_meta(qode_get_page_id(), "qode_seo_keywords", true);
			?>

			<?php if($seo_description) { ?>
				<meta name="description" content="<?php echo $seo_description; ?>">
			<?php } else if($qode_options_proya['meta_description']){ ?>
				<meta name="description" content="<?php echo $qode_options_proya['meta_description'] ?>">
			<?php } ?>

			<?php if($seo_keywords) { ?>
				<meta name="keywords" content="<?php echo $seo_keywords; ?>">
			<?php } else if($qode_options_proya['meta_keywords']){ ?>
				<meta name="keywords" content="<?php echo $qode_options_proya['meta_keywords'] ?>">
			<?php }
		}

	}

	add_action('qode_header_meta', 'qode_header_meta');
}