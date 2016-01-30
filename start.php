<?php

/**
 * Notification HTML Handler
 *
 * @author Ismayil Khayredinov <info@hypejunction.com>
 * @copyright Copyright (c) 2015, Ismayil Khayredinov
 */
require_once __DIR__ . '/autoloader.php';

elgg_register_event_handler('init', 'system', 'notifications_templates_init');

/**
 * Initialize the plugin
 * @return void
 */
function notifications_templates_init() {

	elgg_register_plugin_hook_handler('get_templates', 'notifications', 'notifications_templates_add_custom_templates');

}

/**
 * Add some instant notificaiton actions to the editable templates
 * 
 * @param string $hook   "get_templates"
 * @param string $type   "notifications"
 * @param string $return Template names
 * @param array  $params Hook params
 * @return array
 */
function notifications_templates_add_custom_templates($hook, $type, $return, $params) {

	$return[] = "useradd";
	$return[] = "uservalidationbyemail";

	return $return;
}