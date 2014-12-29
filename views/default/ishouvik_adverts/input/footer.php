<?php
	$footer_content = elgg_get_plugin_setting('footer_content','ishouvik_adverts');
?>

	<textarea style="width: 100%; height:250px;" name="<?php echo $vars['name']; ?>" ><?php echo $footer_content; ?></textarea>
