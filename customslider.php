<?php

/*
Plugin Name: Custom FlexSlider
Plugin URI: 
Description: A simple plugin that integrates FlexSlider (http://flex.madebymufffin.com/) with WordPress using custom post types!
Author: Kirti Purswani
Version: 1.0
Author URI: Your URL
*/
  require_once('slider-img-type.php');
 
define('EFS_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );
define('EFS_NAME', "Custom FlexSlider");
define ("EFS_VERSION", "1.0");

wp_enqueue_script('flexslider', EFS_PATH.'jquery.flexslider.min.js', array('jquery'));
wp_enqueue_style('flexslider_css', EFS_PATH.'flexslider.css');

function init()
{
	
}

function efs_script(){
 
print '<script type="text/javascript" charset="utf-8">
  jQuery(window).load(function() {
    jQuery(\'.flexslider\').flexslider();
  });
</script>';
 
}
 
add_action('wp_head', 'efs_script');


?>