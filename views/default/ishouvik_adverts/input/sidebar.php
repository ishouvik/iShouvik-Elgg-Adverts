<?php
	$rightadvert_content = elgg_get_plugin_setting('sidebar_content','ishouvik_adverts');
?>

	<textarea style="width: 100%; height:250px;" name="<?php echo $vars['name']; ?>" ><?php echo $rightadvert_content; ?></textarea>
