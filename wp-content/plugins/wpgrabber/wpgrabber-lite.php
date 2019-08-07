<?php
/**
@package WPGrabber
Plugin Name: WPGrabber
Plugin URI: https://wpgrabber.biz
Description: WordPess Grabber plugin для автонаполнения вашего сайта контентом
Version: 4.9.8
Author: GrabTeam (close)
License URI: https://github.com/WPGrabber/WPGrabber.Biz/blob/master/LICENSE
*/
  if (defined('WPGRABBER_VERSION')) {
    die('На сайте активирован плагин WPGrabber версии '.WPGRABBER_VERSION.'. Пожалуйста, деактивируйте его перед активацией данного плагина.');
  }
  define('WPGRABBER_VERSION', '4.9.8');

  define('WPGRABBER_PLUGIN_DIR', plugin_dir_path( __FILE__ ));
  define('WPGRABBER_PLUGIN_URL', plugin_dir_url( __FILE__ ));
  define('WPGRABBER_PLUGIN_FILE', __FILE__);

  require WPGRABBER_PLUGIN_DIR.'init.php';
  function delFirstPic($content) {
	$content = preg_replace("/<img[^>]+>/i", "", $content, 1);
	return $content;
	}
	if (get_option('wpg_' .'delFirstPic') == '1') add_filter ('the_content', 'delFirstPic');
	if (get_option('wpg_' .'delFirstPic') == '0') remove_filter ('the_content', 'delFirstPic');
?>