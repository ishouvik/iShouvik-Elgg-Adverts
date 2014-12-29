
<p>
<?php

 echo "<h1>" . elgg_echo('ishouvik:advert:sidebar') . "</h1>" . elgg_view("ishouvik_adverts/input/sidebar", array("name"=>"params[sidebar_content]", "value"=>$vars['entity']->sidebarads_code));
echo "<br /><br />";
 echo "<h1>" . elgg_echo('ishouvik:advert:footer') . "</h1>" . elgg_view("ishouvik_adverts/input/footer", array("name"=>"params[footer_content]", "value"=>$vars['entity']->footerads_code));


?>
</p>
