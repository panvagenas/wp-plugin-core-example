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

require_once dirname(__FILE__) . '/vendor/autoload.php';

$plugin = new \PanWPCoreExample\Plugin('PanWPCoreExample', __FILE__, 'Pan Wp Core Example Plugin', '0.0.1-dev', 'pan-core-example', 'pan_core_example');
