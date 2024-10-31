<?php

  /*
  Plugin Name: Read metrics for Google Analytics
  Description: Medium like read metrics for Google Analytics
  Text Domain: read-metrics-for-google-analytics
  Author: Boost.re
  Version: 0.1
  */
  


  function read_script() {
    global $post;
    if(($post->post_type == 'post')||($post->post_type == 'page')){
      wp_enqueue_script(  'read-tracker', '//boost.re/javascripts/read.js' );
    }
  }  

  add_action( 'wp_enqueue_scripts', 'read_script' );

  function readmetrics_load_textdomain() {
    load_plugin_textdomain( 'read-metrics-for-google-analytics', false, plugin_basename( dirname( __FILE__ ) ) . '/languages/' ); 
  }
  
  add_action( 'plugins_loaded', 'readmetrics_load_textdomain' );

?>