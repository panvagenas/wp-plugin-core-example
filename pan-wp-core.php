<?php
/**
 * Plugin Name:     Pan Wp Core Example Plugin
 * Plugin URI:      http://plugin-name.com/ // TODO
 * Description:     Pan WordPress Plugin Core Example.
 * Version:         0.0.1-dev
 * Author:          Panagiotis Vagenas <pan.vagenas@gmail.com>
 * Author URI:      http://gr.linkedin.com/in/panvagenas
 * Text Domain:     pan-core-example
 * Domain Path:     /lang
 * License:         GPL-3.0+
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

include '/home/vagenas/Development/WordPress/public_html/pan-wp-core/wp-content/plugins/pan-wp-core/vendor/devster/ubench/src/Ubench.php';

$bench = new Ubench();
$bench->start();
$mem = memory_get_usage();

require_once dirname(__FILE__) . '/vendor/autoload.php';

$plugin = new \PanWPCoreExample\Plugin('PanWPCoreExample', __FILE__, 'Pan Wp Core Example Plugin', '0.0.1-dev', 'pan-core-example', 'pan_core_example');

for($i = 0; $i < 1000000; $i++){
	$a = $plugin->Actions();
}

$bench->end();

var_dump($bench->getTime(), $bench->getMemoryPeak(), $bench->getMemoryUsage(), (memory_get_usage()-$mem)/1024);die;