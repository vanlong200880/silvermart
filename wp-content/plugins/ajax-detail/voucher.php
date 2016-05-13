<?php
/*
Plugin Name: Detail product ajax
Plugin URI: www.thietkechuyennghiep.net
Description: Voucher plugin
Version: 1.1
Author: LongPham
Author URI: www.thietkechuyennghiep.net
License: Plugin comes under GPL Licence.
*/


add_action('init', 'detail_enqueue_script');
function detail_enqueue_script(){
  wp_enqueue_script( 'detail_js', plugins_url( '/js/ajax-detail.js', __FILE__ ), array('jquery'), true, 100 );
  wp_localize_script('detail_js', 'ajax', array('url' => admin_url('admin-ajax.php')));
  wp_enqueue_script('detail_js');
}
function detail_action(){
  global $wpdb;
  $result = array(
    'message' => '',
    'result' => array(),
    'status' => false,
    'content' => '',
    'title' => '',
    'description' => '',
    'image' => '',
    'custom_silver' => ''
  );
  
  $id = (int) $_REQUEST['id'];
  if($id){
    $result['status'] = true;
    $result['id'] = $id;
    $post = get_post($id);
    query_posts( array('post__in' => array($id), 'post_type' => 'post'));
    while (have_posts()): the_post();
      $result['title'] = get_the_title();
      $result['content'] = get_the_content();
      $result['description'] = get_the_excerpt();
      $result['image'] = get_the_post_thumbnail(get_the_ID(), 'full');
      $result['custom_silver'] = get_field('custom_silver');
   endwhile;
  }else{
    $result['message'] = 'Không tải được dữ liệu. Vui lòng thử lại.';
  }
  echo json_encode($result);
  die();
}
add_action('wp_ajax_detail_action', 'detail_action');
add_action('wp_ajax_nopriv_detail_action', 'detail_action');

