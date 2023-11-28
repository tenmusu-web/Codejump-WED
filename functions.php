<?php
function my_script_init() {
  wp_enqueue_style("my", get_template_directory_uri() . "/css/style.css", array(), filemtime(get_theme_file_path('css/style.css')), "all");
  wp_enqueue_script("my", get_template_directory_uri() . "/assets/js/script.js", array("jquery"), filemtime(get_theme_file_path('assets/js/script.js')), true);
}
add_action("wp_enqueue_scripts", "my_script_init");


function my_setup() {
  add_theme_support('post-thumbnails');//アイキャッチ画像を設定
  add_theme_support('automatic-feed-links');//RSSフィードのURLを生成
  add_theme_support('title-tag');//WordPressでタイトルタグを自動生成してくれる
  add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));//html5形式で記述
}
add_action("after_setup_theme", "my_setup");

/**
 * メニューの登録
 */
function my_menu_init() {
  register_nav_menus(
    array(
      'global' => 'ヘッダーメニュー',
      'drawer' => 'ドロワーメニュー',
      'footer' => 'フッターメニュー',
    )
  );
}
add_action('init', 'my_menu_init');

/**
 * ウィジェットの追加
 */
function my_widget_init() {
  register_sidebar(
    array(
      'name' => 'サイドバー', // 表示するエリア名
      'id'   => 'sidebar', // id
      'description' => '投稿ページのサイドバー', //ウィジェットエリアの説明。管理画面上で表示される。
      'before_widget' => '<div id="%1$s" class="widget %2$s">',
      'after_widget'  => '</div>',
      'before_title'  => '<div class="widget-title">',
      'after_title'   => '</div>'
    )
  );
}
add_action('widgets_init', 'my_widget_init');



//カテゴリー名の取得
function my_the_post_category($anchor = true) {
  $category = get_the_category();
  if($category[0]) {
    if($anchor) {
      echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
    } else {
      echo $category[0]->cat_name;
    }
  }
}
