<?php
/**
 * Plugin Name:       Onepager - Advanced Blocks Pack
 * Plugin URI:        http://getonepager.com/plugins/onepager-advanced-blocks-pack
 * Description:       Onepager advanced-blocks-pack Plugin
 * Version:           1.0.0
 * Author:            ThemeXpert
 * Author URI:        http://www.themexpert.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       onepager-abp
 * Domain Path:       /languages
 */

add_action('onepager_loaded', function(){
	$path = __DIR__ . "/blocks";
	$url = plugins_url('blocks', __FILE__);
	$groups = ['Onepager Advanced Pack (Plugin)'];

	onepager()->blockManager()->loadAllFromPath($path, $url, $groups);
});
