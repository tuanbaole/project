<?php
/**
 * Plugin Name: My First Plugin Demo // Tên của plugin
 * Plugin URI: http://hocwp.net // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin đầu tiên mà tôi viết dành riêng cho WordPress, chỉ để học tập mà thôi. // Phần mô tả cho plugin
 * Version: 1.0 // Đây là phiên bản đầu tiên của plugin
 * Author: Sau Hi // Tên tác giả, người thực hiện plugin này
 * Author URI: http://sauhi.com // Địa chỉ trang chủ của tác giả
 * License: GPLv2 or later // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */
function test()
{
	remove_meta_box( 'dashboard_primary','dashboard','post_container_1');
}

add_action( 'wp_dashboard_setup','dwwp_remove_dashboard_widget');

function dwwp_remove_dashboard_widget() 
{
	global $wp_admin_bar;
	// echo '<pre>';
	var_dump($wp_admin_bar);
	// echo '</pre>';
}
add_action( 'wp_bfore_admin_bar_render ','dwwp_add_google_link' );