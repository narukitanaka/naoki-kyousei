<?php
/////////////////////////////////////////
//アイキャッチ画像を有効化
/////////////////////////////////////////
add_theme_support('post-thumbnails');


/////////////////////////////////////////
//新着情報
/////////////////////////////////////////
function post_has_archive( $args, $post_type ) {
  if ( 'post' == $post_type ) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
  }
  return $args;
}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );
function change_post_menu_label() {
  global $menu;
  global $submenu;
  $menu[5][0] = '新着情報'; // Change "投稿" to "新着情報" in the admin menu
  $submenu['edit.php'][5][0] = '新着情報一覧'; // Change "投稿一覧" to "新着情報一覧"
  $submenu['edit.php'][10][0] = '新着情報を追加'; // Change "新規追加" to "新着情報を追加"
}
add_action( 'admin_menu', 'change_post_menu_label' );
function change_post_object_label() {
  global $wp_post_types;
  $labels = &$wp_post_types['post']->labels;
  $labels->name = '新着情報';
  $labels->singular_name = '新着情報';
  $labels->add_new = '新着情報を追加';
  $labels->add_new_item = '新着情報を追加';
  $labels->edit_item = '新着情報を編集';
  $labels->new_item = '新しい新着情報';
  $labels->view_item = '新着情報を表示';
  $labels->search_items = '新着情報を検索';
  $labels->not_found = '新着情報が見つかりません';
  $labels->not_found_in_trash = 'ゴミ箱に新着情報はありません';
}
add_action( 'init', 'change_post_object_label' );


/////////////////////////////////////////
//投稿記事の閲覧数をカウント
/////////////////////////////////////////
function set_post_views($postID) {
  $count_key = 'post_views_count';
  $count = get_post_meta($postID, $count_key, true);
  if($count==''){
      $count = 0;
      delete_post_meta($postID, $count_key);
      add_post_meta($postID, $count_key, '0');
  } else {
      $count++;
      update_post_meta($postID, $count_key, $count);
  }
}
function track_post_views ($post_id) {
  if ( !is_single() ) return;
  if ( empty ( $post_id) ) {
      global $post;
      $post_id = $post->ID;   
  }
  set_post_views($post_id);
}
add_action( 'wp_head', 'track_post_views');