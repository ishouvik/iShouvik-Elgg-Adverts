<?php
/**
 * iShouvik Adverts Plugin
 * @package ishouvik_adverts
 */

elgg_register_event_handler('init', 'system', 'ishouvik_adverts_init');

function ishouvik_adverts_init() {

	//Extend views
	elgg_extend_view( 'page/elements/sidebar', 'ishouvik_adverts/elements/sidebar', 900 );
	elgg_extend_view( 'page/elements/footer', 'ishouvik_adverts/elements/footer' );

}